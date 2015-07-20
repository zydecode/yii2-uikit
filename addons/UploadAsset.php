<?php
namespace zydecode\uikit\addons;

use yii\web\AssetBundle;

/**
 * Upload component asset
 *
 * @author Vjacheslav Demchenko <word2electronics@gmail.com>
 * @since 2.0
 */
class UploadAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';

    public $js = [
        'js/components/upload.js',
    ];
    public $css = [
    	'css/components/form-file.css',
    	'css/components/placeholder.css',
    	'css/components/progress.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'zydecode\uikit\UIkitPluginAsset',
    ];
}