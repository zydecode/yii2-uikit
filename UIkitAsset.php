<?php
namespace zydecode\uikit;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class UIkitAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';
    public $css = [
        'css/uikit.css',
    ];
}