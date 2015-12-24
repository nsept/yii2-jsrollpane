<?php

namespace nsept\jscrollpane\assets;
use yii\web\AssetBundle;

class JScrollPaneAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.jscrollpane';

    public $js = [
        'jquery.jscrollpane.min.js'
    ];

    public $css = [
        'jquery.jscrollpane.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'nsept\mousewheel\MousewheelAsset',
    ];
}