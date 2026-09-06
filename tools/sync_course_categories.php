<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Facades\Schema;

if (! Schema::hasColumn('courses', 'category_id')) {
    echo "RUN php artisan migrate first\n";
    exit(1);
}

$defaults = [
    'frontend/assets/media/courses/categories/c-1.png',
    'frontend/assets/media/courses/categories/c-2.png',
    'frontend/assets/media/courses/categories/c-3.png',
    'frontend/assets/media/courses/categories/c-4.png',
    'frontend/assets/media/courses/categories/c-5.png',
    'frontend/assets/media/courses/categories/c-6.png',
];

$i = 0;
foreach (Course::all() as $course) {
    $title = trim((string) $course->category_name);
    if ($title === '') {
        continue;
    }

    $category = Category::whereRaw('LOWER(title) = ?', [strtolower($title)])->first();
    if (! $category) {
        $category = Category::create([
            'title' => ucwords($title),
            'description' => 'Courses in '.ucwords($title),
            'rating' => '5',
            'teachers' => '10 Teachers',
            'hours' => $course->hours ?: '60+',
            'image' => $defaults[$i % count($defaults)],
        ]);
        echo "ADD category {$category->title}\n";
        $i++;
    }

    $updates = ['category_id' => $category->id, 'category_name' => $category->title];
    foreach (['icon', 'tag_image', 'author_image'] as $field) {
        if ($course->$field && str_starts_with($course->$field, 'upload/') && ! is_file(public_path($course->$field))) {
            $updates[$field] = null;
            echo "CLEAR missing {$field} on course {$course->id}\n";
        }
    }

    $course->update($updates);
    echo "LINK course {$course->title} -> {$category->title}\n";
}

echo "DONE\n";
