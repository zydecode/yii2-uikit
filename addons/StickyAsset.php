<?php
namespace zydecode\uikit\addons;

use yii\web\AssetBundle;

/**
 * Sticky addon asset
 *
 * @author Oleg Martemjanov <demogorgorn@gmail.com>
 * @since 2.0
 */
class StickyAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';
    public $js = [
        'js/components/sticky.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'zydecode\uikit\UIkitPluginAsset',
    ];
}