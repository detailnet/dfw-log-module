<?php

use Detail\Log;
use Detail\Log\Factory;

return [
    'service_manager' => [
        'abstract_factories' => [],
        'aliases' => [],
        'invokables' => [],
        'factories' => [
            Log\Options\ModuleOptions::CLASS => Factory\Options\ModuleOptionsFactory::CLASS,
        ],
        'initializers' => [
            Log\Service\LoggerInitializer::CLASS,
        ],
    ],
    'controllers' => [
        'initializers' => [
            Log\Service\LoggerInitializer::CLASS,
        ],
    ],
    'detail_log' => [
        'logger' => 'Monolog\Logger',
    ],
];
