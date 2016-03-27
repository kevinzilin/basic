<?php

namespace app\modules\Weixin;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\Weixin\controllers';
	
    public static  $abc='affdadsf';
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
    
    public static function  getUser(){
    	echo 'users';
    }
}
