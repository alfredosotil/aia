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
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'dateFormat' => 'php:d-M-Y',
            'datetimeFormat' => 'php:Y-m-d H:i:s',
            'timeFormat' => 'php:H:i:s',
        ],
        'assetManager' => [
            'linkAssets' => true,
            'assetMap' => [
                'bootstrap.js' => '@web/bootstrap/bootstrap.min.js',
                'jquery.js' => '@web/js/jQuery/jquery.min.js',
            ],
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    'basePath' => '@webroot', // do not publish the bundle
                    'baseUrl' => '@web', // do not publish the bundle
                    'css' => [
                        'bootstrap/bootstrap.min.css',
                    ],
                    'js' => [
                        'bootstrap/bootstrap.min.js',
                    ]
                ],
//                'yii\web\JqueryAsset' => [
//                    'sourcePath' => null,   // do not publish the bundle
//                    'js' => [
//                        '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js',
//                    ]
//                ],
//                'yii\jui\JuiAsset' => [
//                    'sourcePath' => null,   // do not publish the bundle
//                    'css' => [
//                        '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css',
//                    ],
//                    'js' => [
//                        '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js',
//                    ]
//                ],
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
            'viewPath' => '@app/mail',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'mail.aia.com.pe',
                'username' => 'tademetv@aia.com.pe',
                'password' => 'leY517aL6l',
//                'port' => '465',
//                'encryption' => 'ssl',
            ],
            'useFileTransport' => false,
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

if (YII_ENV_DEV) {
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
                'templates' => [// setting materializecss templates
                    'materializecss' => '@vendor/macgyer/yii2-materializecss/src/gii-templates/generators/crud/materializecss',
                ]
            ]
        ],
    ];
}

return $config;
