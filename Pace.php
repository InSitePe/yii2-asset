<?php

namespace insite\asset;

class Pace extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $sourcePath = '@bower/pace';

    /**
     * @inherit
     */
    public $css = [
        'themes/red/pace-theme-minimal.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'pace.min.js'
    ];

}
