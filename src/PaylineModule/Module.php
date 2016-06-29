<?php

/*
 * This file is part of the Payline Module for Zend Framework 2.
 *
 * (c) Claude Khedhiri <claude@khedhiri.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PaylineModule;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
}
