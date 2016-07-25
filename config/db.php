<?php

return (YII_ENV_DEV) ? [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=aia',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
        ] :
        [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=tademetv_aia',
    'username' => 'tademetv_root',
    'password' => 'leY517aL6l',
    'charset' => 'utf8',
];
