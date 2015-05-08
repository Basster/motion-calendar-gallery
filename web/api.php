<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Basster\MotionGallery\Application([
    'base_path' => realpath(__DIR__ . '/../')
]);

$app->run();