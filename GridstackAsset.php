<?php

namespace zertex\gridstack;
use yii\web\AssetBundle;

class GridstackAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zertex/yii2-gridstackjs/dist';

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset',
        'zertex\gridstack\LodashAsset',
    ];

    public $js = [
        'gridstack.js'
    ];

    public $css = [
        'gridstack.css'
    ];
}
