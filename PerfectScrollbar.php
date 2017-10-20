<?php

namespace insite\asset;

class PerfectScrollbar extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $sourcePath = '@bower/perfect-scrollbar';

    /**
     * @inherit
     */
    public $css        = [
        'css/perfect-scrollbar.min.css',
    ];

    /**
     * @inherit
     */
    public $js         = [
        'js/perfect-scrollbar.jquery.js'
    ];

}
