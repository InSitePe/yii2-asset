<?php

namespace insite\asset;

class JqueryValidation extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $sourcePath = '@bower/jquery-validation/';

    /**
     * @inherit
     */
    public $js = [
        'dist/jquery.validate.min.js',
        'src/localization/messages_es_PE.js'
    ];

}
