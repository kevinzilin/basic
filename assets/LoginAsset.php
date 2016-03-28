<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace app\assets;

use yii\web\AssetBundle;

/**
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LoginAsset extends AssetBundle {
	//public $sourcePath='@app/modules/Users/web';
	public $basePath = '@webroot';
 	public $baseUrl = '@web';
	public $css = [ 
			'users/css/vendor/bootstrap/bootstrap.min.css',
			'users/css/vendor/bootstrap-checkbox.css' ,
			'users/css/minimal.css',
	];
	public $js = [ ];
}
