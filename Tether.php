<?php

namespace insite\asset;

class Tether extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $sourcePath = '@bower/tether/dist';

    /**
     * @inherit
     */
    public $css = [
        'css/tether.min.css',
        'css/tether-theme-basic.min.css'
    ];

    /**
     * @inherit
     */
    public $js = [
        'js/tether.min.js'
    ];

}
