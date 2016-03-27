<?php

namespace app\modules\Users;
use yii\filters\AccessControl;
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\Users\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
    
    public function behaviors()
    {
    	return [
    			'access' => [
    					'class' => AccessControl::className(),//授权过滤 仅允许登陆的用户执行操作
    					//'only' => ['login', 'logout', 'signup'],//表示需要执行过滤的操作 为空表示全部过滤
    					'rules' => [
    							[
    									'allow' => true,//表示允许执行
    									//'actions' => ['login', 'signup'],//允许执行的方法 为空表示全部
    									'roles' => ['@'],// 对角色授权 @表示登陆用户 ?表示游客
    							],
    					],
    			],
    	];
    }
}
