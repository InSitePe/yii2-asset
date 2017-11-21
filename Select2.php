<?php

namespace insite\asset;

class Select2 extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $sourcePath = '@bower/select2/dist';

    /**
     * @inherit
     */
    public $css = [
        'css/select2.min.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'js/select2.min.js',
        'js/i18n/es.js'
    ];

}
