<?php

namespace app\modules\Weixin\controllers;

use yii\web\Controller;

define ( "TOKEN", "weixin" );
class DefaultController extends Controller {
	public function actionIndex() {
		$echoStr = $_GET ["echostr"];
		$this->valid ( $echoStr );
		// return $this->render ( 'index' );
	}
	public function valid($echoStr) {
		// valid signature , option
		if ($this->checkSignature ()) {
			echo $echoStr;
			exit ();
		}
	}
	private function checkSignature() {
		// you must define TOKEN by yourself
		if (! defined ( "TOKEN" )) {
			throw new Exception ( 'TOKEN is not defined!' );
		}
		
		$signature = $_GET ["signature"];
		$timestamp = $_GET ["timestamp"];
		$nonce = $_GET ["nonce"];
		
		$token = TOKEN;
		$tmpArr = array (
				$token,
				$timestamp,
				$nonce 
		);
		// use SORT_STRING rule
		sort ( $tmpArr, SORT_STRING );
		$tmpStr = implode ( $tmpArr );
		$tmpStr = sha1 ( $tmpStr );
		
		if ($tmpStr == $signature) {
			return true;
		} else {
			return false;
		}
	}
}
