<?php

namespace humhub\modules\coinshare;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    public $publishOptions = [
        'forceCopy' => true
    ];
    
    public $css = [
    ];
    public $js = [
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets';
        parent::init();
    }

}
