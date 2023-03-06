<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Facade;

final class YouTubeDownloader
{
    protected YouTubeClient $youTubeClient;

    public function __construct(
        string $token,
        protected FFMpeg $ffmpeg = new FFMpeg(),
    ) {
        $this->youTubeClient = new YouTubeClient($token);
    }

    public function downloadVideo(string $url): FFMpegVideo
    {
        // Fetching video metadata from youtube
        $title = $this->youTubeClient->fetchVideo($url)->getTitle();

        // Saving video file to a temporary file
        $filePath = $this->youTubeClient->saveAs($url, 'video.mpg');

        // Processing source video
        $video = $this->ffmpeg->open($filePath);

        // Normalizing and resizing the video to smaller dimensions
        $video
            ->filters('sharp')
            ->resize([320, 240]);

        // Capturing preview image
        $video->frame()->save($title . 'frame.jpg');

        // Saving video in target format
        $video->save($title . '.mp4');

        return $video;
    }
}
