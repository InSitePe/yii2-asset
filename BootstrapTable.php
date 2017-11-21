<?php

namespace insite\asset;

class BootstrapTable extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $sourcePath = '@bower/bootstrap-table/dist';

    /**
     * @inherit
     */
    public $css = [
        'bootstrap-table.min.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'bootstrap-table.min.js',
        'locale/bootstrap-table-es-ES.min.js'
    ];

}
