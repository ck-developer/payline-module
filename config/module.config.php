<?php

return [
    'payline' => [
        'merchant_id'    => '',
        'access_key'     => '',
        'contractNumber' => '',
        'proxy_host'     => '',
        'proxy_port'     => '',
        'proxy_login'    => '',
        'proxy_password' => '',
        'environment'    => '',
        'log_path'       => ''
    ],
    'service_manager' => [
        'factories' => [
            'payline' => \PaylineModule\Service\PaylineService::class,
        ],
    ]
];