<?php

/**
 * v14.5.3 redeclares Worker::$currentJob as protected; Laravel 13 requires public.
 * Remove until upstream fix: https://github.com/vyuldashev/laravel-queue-rabbitmq
 */
$file = dirname(__DIR__).'/vendor/vladimir-yuldashev/laravel-queue-rabbitmq/src/Consumer.php';

if (! is_file($file)) {
    return;
}

$contents = file_get_contents($file);
$patched = preg_replace('/\n\s+protected \$currentJob;\n/', "\n", $contents, 1, $count);

if ($count > 0) {
    file_put_contents($file, $patched);
}
