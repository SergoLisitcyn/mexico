<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'jodit' => 'yii2jodit\JoditModule',
        'extensions'=>['jpg','png','gif'],
        'root'=> 'frontend/uploads/images',
        'baseurl'=> 'frontend/uploads/images',
        'maxFileSize'=> '20mb',
        'defaultPermission'=> 0775,
    ],
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
