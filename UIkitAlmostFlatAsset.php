<?php
namespace zydecode\uikit;

use yii\web\AssetBundle;

/**
 * Almost flat theme for UIkit
 *
 * @author Oleg Martemjanov <demogorgorn@gmail.com>
 * @author Nikolay Kostyurin <nikolay@artkost.ru>
 * @since 2.0
 */
class UIkitAlmostFlatAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';
    public $css = [
        'css/uikit.almost-flat.css',
    ];
    /*public $depends = [
        'zydecode\uikit\UIkitAsset',
    ];*/
}