<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'AIA Bienes y Raices',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ]
    ],
    'components' => [
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,   // do not publish the bundle
                    'js' => [
                        '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js',
                    ]
                ],
                'yii\jui\JuiAsset' => [
                    'sourcePath' => null,   // do not publish the bundle
                    'css' => [
                        '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css',
                    ],
                    'js' => [
                        '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js',
                    ]
                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'aZz5joDFfm5Gc5EBvzmjY8U-zAtkeKuC',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\UserLogin',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            // Disable index.php
            'showScriptName' => false,
            // Disable r= routes, index.php?r=gii
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'suffix' => '.html',
            'rules' => array(
//              http://localhost/path/to/index.php/gii.html
                'gii' => 'gii',
                'gii/<controller:\w+>' => 'gii/<controller>',
                'gii/<controller:\w+>/<action:\w+>' => 'gii/<controller>/<action>',
//                ['class' => 'yii\rest\UrlRule', 'controller' => ['module', 'access', 'user', 'profile', 'type', 'state'], 'pluralize' => false],
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ],
    ],
    'params' => $params,
];

if (true) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', $_SERVER['REMOTE_ADDR']],
        'generators' => [
            'crud' => [
                'class' => 'yii\gii\generators\crud\Generator',
                'templates' => [ // setting materializecss templates
                    'materializecss' => '@vendor/macgyer/yii2-materializecss/src/gii-templates/generators/crud/materializecss',
                ]
            ]
        ],
    ];
}

return $config;
