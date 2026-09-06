<?php
$dir = __DIR__ . '/../public/frontend/assets/media/icons';
echo is_dir($dir) ? "DIR OK\n" : "DIR MISSING $dir\n";
if (is_dir($dir)) {
    foreach (scandir($dir) as $f) {
        if ($f !== '.' && $f !== '..') echo $f."\n";
    }
}
