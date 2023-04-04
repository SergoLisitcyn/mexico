<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'es-MX',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'assetManager' => [
            'appendTimestamp' => true,
        ],
        'reCaptcha' => [
            'class' => 'himiklab\yii2\recaptcha\ReCaptchaConfig',
            'siteKeyV2' => '6Le-e1slAAAAAGdE1gHlP5RNeCT26P_fhaAmqAGJ',
            'secretV2' => '6Le-e1slAAAAADoZMMsMeuozVrVe1aiCWRnaYn6v',
//            'siteKeyV3' => '6LcVb0MlAAAAABQg6h9WqzweK1DCj-SWKs8UvLm_',
//            'secretV3' => '6LcVb0MlAAAAACoFCI0Dqv6bYd650VSXjeqoJxwG',
        ],
        'request' => [
//            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => '/site/index',
                'contacto' => '/site/contact',
                'signup' => '/site/signup',
                'redirect' => '/site/redirect',
//                'empresas' => '/site/empresas',
                'progress-value' => '/site/progress-value',
                'review-information' => '/site/review-information',
                'entidad' => '/mfo/index',
                'captcha' => '/site/captcha',
                'sitemap.xml' => '/sitemap/index',
                [
                    'pattern' => 'entidad/<url:\S+>/reviews',
                    'route' => '/mfo/reviews',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'entidad/<url:\S+>',
                    'route' => '/mfo/view',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'contenido/<slug:\S+>',
                    'route' => '/pages/show-page',
                    'defaults' => ['slug' => 'error']
                ],
                [
                    'pattern' => '/<url:\S+>',
                    'route' => '/site/solicita',
                    'defaults' => ['slug' => 'error']
                ],
            ],
        ],
    ],
    'params' => $params,
];
