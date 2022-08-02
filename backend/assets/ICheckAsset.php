<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Accounts asset bundle.
 */
class ICheckAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'js/iCheck.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'backend\assets\FontAwesomeAsset'
    ];

    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
