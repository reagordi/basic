<?php
return [
    'components' => [
        'response' => [
            'format' => Reagordi::$app->getResponse()::FORMAT_HTML,
            'charset' => 'utf-8',
        ],
        'request' => [
            'multiCookieDomain' => true
        ]
    ]
];
