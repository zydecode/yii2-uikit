<?php
namespace zydecode\uikit;

use yii\web\AssetBundle;

/**
 * Plugins js code
 *
 * @author Nikolay Kostyurin <nikolay@artkost.ru>
 * @since 2.0
 */
class UIkitPluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';
    public $js = [
        'js/uikit.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}