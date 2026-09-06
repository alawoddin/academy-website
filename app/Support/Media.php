<?php

namespace App\Support;

use Illuminate\Http\UploadedFile;

class Media
{
    public static function url(?string $path, string $fallback): string
    {
        if ($path && is_file(public_path($path))) {
            return asset($path);
        }

        return asset($fallback);
    }

    public static function store(?UploadedFile $file, string $folder): ?string
    {
        if (! $file) {
            return null;
        }

        $dir = public_path($folder);
        if (! is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        $name = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
        $file->move($dir, $name);

        return $folder.'/'.$name;
    }
}
