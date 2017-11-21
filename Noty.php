<?php

namespace insite\asset;

class Noty extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $sourcePath = '@bower/noty/lib';

    /**
     * @inherit
     */
    public $css = [
        'noty.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'noty.min.js'
    ];

}