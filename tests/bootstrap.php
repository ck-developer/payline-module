<?php


if (file_exists(__DIR__ . '/TestConfiguration.php')) {
    $config = require __DIR__ . '/TestConfiguration.php';
} else {
    $config = require __DIR__ . '/TestConfiguration.php.dist';
}