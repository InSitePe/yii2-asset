<?php

namespace upch\asset;

class Popper extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $sourcePath = '@bower/popper.js/dist';
    
    /**
     * @inherit
     */
    public $js = [
        'umd/popper.min.js'
    ];

}
