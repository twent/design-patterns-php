<?php

declare(strict_types=1);

namespace Structural;

use Tests\TestCase;
use Twent\DesignPatterns\Structural\Facade\YouTubeDownloader;

final class FacadeTest extends TestCase
{
    public function testFacadePatternWorks(): void
    {
        $youTubeDownloader = new YouTubeDownloader('token');
        $video = $youTubeDownloader->downloadVideo('https://youtube.com/channel/video_id');

        $this->assertSame($video->getPath(), 'video_id.mp4');
        $this->assertSame($video->getWidth(), 320);
        $this->assertSame($video->getHeight(), 240);
        $this->assertSame($video->getFilters(), ['sharp']);

        $video->resize([1920, 1080]);
        $video->filters('denoise');
        $video->save('test.webm');
        $this->assertSame($video->getPath(), 'test.webm');
        $this->assertSame($video->getWidth(), 1920);
        $this->assertSame($video->getHeight(), 1080);
        $this->assertSame($video->getFilters(), ['sharp', 'denoise']);
    }
}
