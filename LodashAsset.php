<?php

namespace zertex\gridstack;

use yii\web\AssetBundle;

class LodashAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zertex/yii2-gridstackjs/dist';

    public $js = [
        'lodash.js',
    ];
}