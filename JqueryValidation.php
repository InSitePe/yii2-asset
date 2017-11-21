<?php

namespace insite\asset;

class JqueryValidation extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $sourcePath = '@bower/jquery-validation/dist';

    /**
     * @inherit
     */
    public $js = [
        'jquery.validate.min.js'
    ];

}
