<?php

namespace insite\asset;

class SweetAlert2 extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $sourcePath = '@bower/sweetalert2/dist';

    /**
     * @inherit
     */
    public $css = [
        'sweetalert2.min.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'sweetalert2.min.js'
    ];

}
