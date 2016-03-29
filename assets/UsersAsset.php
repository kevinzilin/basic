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
class UsersAsset extends AssetBundle {
	// public $sourcePath='@app/modules/Users/web';
	//public $jsOptions = ['position' => \yii\web\View::POS_HEAD];//将JS加载到头部 默认加载到endBody后
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [ 
			'users/css/vendor/bootstrap/bootstrap.min.css',
			'users/css/vendor/animate/animate.css',
			'users/js/vendor/mmenu/css/jquery.mmenu.all.css',
			'users/js/vendor/videobackground/css/jquery.videobackground.css',
			'users/css/vendor/bootstrap-checkbox.css',
			'users/js/vendor/chosen/css/chosen.min.css',
			'users/js/vendor/chosen/css/chosen-bootstrap.css',
			'users/js/vendor/datatables/css/dataTables.bootstrap.css',
			'users/js/vendor/datatables/css/ColVis.css',
			'users/js/vendor/datatables/css/TableTools.css',
			'users/css/minimal.css' 
	];
	public $js = [ 
			'users/js/jquery.js',
			'users/js/vendor/bootstrap/bootstrap.min.js',
			'users/js/vendor/mmenu/js/jquery.mmenu.min.js',
			'users/js/vendor/sparkline/jquery.sparkline.min.js',
			'users/js/vendor/nicescroll/jquery.nicescroll.min.js',
			'users/js/vendor/animate-numbers/jquery.animateNumbers.js',
			'users/js/vendor/videobackground/jquery.videobackground.js',
			'users/js/vendor/blockui/jquery.blockUI.js',
			'users/js/vendor/datatables/jquery.dataTables.min.js',
			'users/js/vendor/datatables/ColReorderWithResize.js',
			'users/js/vendor/datatables/colvis/dataTables.colVis.min.js',
			'users/js/vendor/datatables/tabletools/ZeroClipboard.js',
			'users/js/vendor/datatables/tabletools/dataTables.tableTools.min.js',
			'users/js/vendor/datatables/dataTables.bootstrap.js',
			'users/js/vendor/chosen/chosen.jquery.min.js',
			'users/js/minimal.min.js' 
	];
}
