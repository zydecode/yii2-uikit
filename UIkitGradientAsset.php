<?php
namespace zydecode\uikit;

use yii\web\AssetBundle;

/**
 * Gradient theme for UIkit
 *
 * @author Oleg Martemjanov <demogorgorn@gmail.com>
 * @author Nikolay Kostyurin <nikolay@artkost.ru>
 * @since 2.0
 */
class UIkitGradientAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';
    public $css = [
        'css/uikit.gradient.css',
    ];
    /*public $depends = [
        'zydecode\uikit\UIkitAsset',
    ];*/
}