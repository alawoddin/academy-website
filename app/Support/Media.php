<?php

namespace App\Support;

use Illuminate\Http\UploadedFile;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class Media
{
    public static function url(?string $path, string $fallback): string
    {
        if ($path && is_file(public_path($path))) {
            return asset($path);
        }

        return asset($fallback);
    }

    public static function store(?UploadedFile $file, string $folder, ?int $maxWidth = 1200): ?string
    {
        if (! $file) {
            return null;
        }

        $dir = public_path($folder);
        if (! is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        $name = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
        $destination = $dir.'/'.$name;

        $mime = (string) $file->getMimeType();
        if ($maxWidth && str_starts_with($mime, 'image/')) {
            try {
                $manager = new ImageManager(new Driver());
                $manager->read($file->getRealPath())
                    ->scaleDown(width: $maxWidth)
                    ->save($destination);

                return $folder.'/'.$name;
            } catch (\Throwable) {
                // Fall through to a plain move if image processing fails.
            }
        }

        $file->move($dir, $name);

        return $folder.'/'.$name;
    }
}
