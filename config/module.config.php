<?php

/*
 * This file is part of the Payline Module for Zend Framework 2.
 *
 * (c) Claude Khedhiri <claude@khedhiri.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return array(
    'service_manager' => array(
        'factories' => array(
            'payline' => 'PaylineModule\Service\Factory\PaylineFactory',
        ),
    )
);
