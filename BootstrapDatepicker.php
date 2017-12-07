<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace insite\asset;

/**
 * Description of BootstrapDatepicker
 *
 * @author francisco
 */
class BootstrapDatepicker extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $sourcePath = '@bower/bootstrap-datepicker/dist/';

    /**
     * @inherit
     */
    public $js  = [
        'js/bootstrap-datepicker.min.js',
        'locales/bootstrap-datepicker.es.min.js'
    ];
    
    public $css = [
        'css/bootstrap-datepicker.min.css',
    ];

}
