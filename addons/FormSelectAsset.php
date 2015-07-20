<?php
namespace zydecode\uikit\addons;

use yii\web\AssetBundle;

/**
 * Upload component asset
 *
 * @author Vjacheslav Demchenko <word2electronics@gmail.com>
 * @since 2.0
 */
class FormSelectAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';

    public $js = [
        'js/components/form-select.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'zydecode\uikit\UIkitPluginAsset',
    ];
}