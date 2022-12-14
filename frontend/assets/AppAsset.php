<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.min.css',
        'css/site.css',
    ];
    public $js = [
        'js/scripts.min.js',
//        'js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapPluginAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
