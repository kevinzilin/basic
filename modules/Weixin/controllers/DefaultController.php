<?php

namespace app\modules\Weixin\controllers;

use yii\web\Controller;

class DefaultController extends Controller {
	public $token = 'weixin';
	public function actionIndex() {
		$echoStr = \Yii::$app->request->get ( 'echostr' );
		if ($echoStr) {
			$this->valid ( $echoStr );
		}
		$this->responseMsg();
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
		if (! $this->token) {
			throw new Exception ( 'TOKEN is not defined!' );
		}
		
		$signature = $_GET ["signature"];
		$timestamp = $_GET ["timestamp"];
		$nonce = $_GET ["nonce"];
		
		$token = $this->token;
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
	public function responseMsg() {
		// get post data, May be due to the different environments
		$postStr = $GLOBALS ["HTTP_RAW_POST_DATA"];
		
		// extract post data
		if (! empty ( $postStr )) {
			/*
			 * libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
			 * the best way is to check the validity of xml by yourself
			 */
			libxml_disable_entity_loader ( true );
			$postObj = simplexml_load_string ( $postStr, 'SimpleXMLElement', LIBXML_NOCDATA );
			$fromUsername = $postObj->FromUserName;
			$toUsername = $postObj->ToUserName;
			$keyword = trim ( $postObj->Content );
			$time = time ();
			$textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";
			if (! empty ( $keyword )) {
				$msgType = "text";
				$contentStr = "Welcome to wechat world!";
				$resultStr = sprintf ( $textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr );
				echo $resultStr;
			} else {
				echo "Input something...";
			}
		} else {
			echo "";
			exit ();
		}
	}
}