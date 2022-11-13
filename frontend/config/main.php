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
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'assetManager' => [
            'appendTimestamp' => true,
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
                'empresas' => '/site/empresas',
                'entidad' => '/mfo/index',
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
