<?php

spl_autoload_register(function ($class) {
    $prefixes = [
        'app\\' => __DIR__ . '/../app/',
        'core\\' => __DIR__ . '/../src/core/',
        'helpers\\' => __DIR__ . '/../src/helpers/'
    ];

    foreach ($prefixes as $prefix => $base_dir) {
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            continue;
        }

        $relative_class = substr($class, $len);
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

        if (file_exists($file)) {
            require $file;
        }
    }
});