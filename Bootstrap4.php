<?php

namespace insite\asset;

class Bootstrap4 extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $sourcePath = '@vendor/twbs/bootstrap/dist';

    /**
     * @inherit
     */
    public $css = [
        'css/bootstrap.min.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'js/bootstrap.min.js'
    ];
    
    public $depends = [
        'insite\asset\Tether'
    ];

}
