<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'reCaptcha' => [
            'class' => 'himiklab\yii2\recaptcha\ReCaptchaConfig',
            'siteKeyV2' => '6LcVb0MlAAAAABQg6h9WqzweK1DCj-SWKs8UvLm_',
            'secretV2' => '6LcVb0MlAAAAACoFCI0Dqv6bYd650VSXjeqoJxwG',
            'siteKeyV3' => '6LcVb0MlAAAAABQg6h9WqzweK1DCj-SWKs8UvLm_',
            'secretV3' => '6LcVb0MlAAAAACoFCI0Dqv6bYd650VSXjeqoJxwG',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['admin','manager','client'],
        ],
    ],
];
