<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Facade;

final class FFMpeg
{
    public function open(string $filePath): FFMpegVideo
    {
        return new FFMpegVideo($filePath);
    }
}
