<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Course;

foreach (Course::all() as $course) {
    $icon = Course::iconForTitle($course->title);
    $course->update(['icon' => $icon]);
    echo $course->title.' -> '.$icon."\n";
}
