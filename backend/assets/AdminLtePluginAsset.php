<?php
namespace backend\assets;
use yii\web\AssetBundle;
class AdminLtePluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower-assets/icheck';

    public $css = [
        'skins/square/blue.css',
    ];
    public $js = [
        'icheck.min.js',
    ];

    public $depends = [
        'dmstr\adminlte\web\AdminLteAsset',
    ];
}