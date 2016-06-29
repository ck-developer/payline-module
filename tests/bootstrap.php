<?php

/*
 * This file is part of the Payline Module for Zend Framework 2.
 *
 * (c) Claude Khedhiri <claude@khedhiri.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (file_exists(__DIR__ . '/TestConfiguration.php')) {
    $config = require __DIR__ . '/TestConfiguration.php';
} else {
    $config = require __DIR__ . '/TestConfiguration.php.dist';
}
