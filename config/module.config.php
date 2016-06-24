<?php

use PaylineModule\Utils\Env;

return [
    'service_manager' => [
        'factories' => [
            'payline' => 'PaylineModule\Service\Factory\PaylineFactory',
        ],
    ]
];
