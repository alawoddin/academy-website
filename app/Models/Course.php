<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function iconForTitle(?string $title): string
    {
        $title = strtolower((string) $title);

        $map = [
            'network' => 'frontend/assets/media/icons/network.svg',
            'sql' => 'frontend/assets/media/icons/sql.svg',
            'injection' => 'frontend/assets/media/icons/sql.svg',
            'security' => 'frontend/assets/media/icons/security.svg',
            'cyber' => 'frontend/assets/media/icons/security.svg',
            'python' => 'frontend/assets/media/icons/python.svg',
            'artificial' => 'frontend/assets/media/icons/ai.png',
            'intelligence' => 'frontend/assets/media/icons/ai.png',
            'web' => 'frontend/assets/media/icons/desktop.png',
            'photoshop' => 'frontend/assets/media/icons/ps.png',
            'figma' => 'frontend/assets/media/icons/figma.png',
            'illustrator' => 'frontend/assets/media/icons/ai2.png',
            'after effect' => 'frontend/assets/media/icons/ai3.png',
        ];

        foreach ($map as $needle => $path) {
            if ($title !== '' && str_contains($title, $needle)) {
                return $path;
            }
        }

        return 'frontend/assets/media/icons/desktop.png';
    }
}