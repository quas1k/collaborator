<?php

/**
 * Application configuration shared by all test types
 */
return [
    'id' => 'basic-tests',
    'basePath' => dirname(__DIR__),
    'language' => 'en-US',
    'components' => [
        'urlManager' => [
            'showScriptName' => true,
        ],
        'request' => [
            'enableCsrfValidation' => false,
        ],
    ],
];
