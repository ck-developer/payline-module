<?php

use PaylineModule\Utils\Env;

return [
    'payline' => [
        'merchantId'    => '',
        'accessKey'     => '',
        'contractNumber' => '',
        'proxyHost'     => '',
        'proxyPort'     => '',
        'proxyLogin'    => '',
        'proxyPassword' => '',
        'environment'    => Env::HOMO,
        'logPath'       => '',
        'returnURL' => ['route' => 'home', ['action' => '']],
        'cancelURL' => ['route' => 'home', ['action' => '']],
        'notificationURL' => ['route' => 'home', ['action' => '']]
    ],
    'service_manager' => [
        'factories' => [
            'payline' => \PaylineModule\Service\Factory\PaylineFactory::class,
        ],
    ]
];