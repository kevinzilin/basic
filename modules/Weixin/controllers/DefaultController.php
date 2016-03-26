<?php

namespace app\modules\Weixin\controllers;

use yii\web\Controller;

class DefaultController extends Controller {
	public $token = 'weixin';
	public $enableCsrfValidation = false;
	public function actionIndex() {
		$echoStr = \Yii::$app->request->get ( 'echostr' );
		if ($this->checkSignature () && $echoStr) { // 提交url验证的时候会多一个echostr参数
			echo $echoStr; // 这里就是服务器配置Url时验证Token,通过了就算是接入成功.
			exit ();
		} else if ($this->checkSignature ()) {
			$this->responseMsg ();
		}
	}
	public function valid($echoStr) {
		// valid signature , option
		if ($this->checkSignature ()) {
			echo $echoStr;
			exit ();
		}
	}
	private function checkSignature() { // 验证是否为微信发送
		if (! $this->token) {
			throw new Exception ( 'TOKEN is not defined!' );
		}
		
		$signature = \Yii::$app->request->get ( 'signature' );
		$timestamp = \Yii::$app->request->get ( 'timestamp' );
		$nonce = \Yii::$app->request->get ( 'nonce' );
		
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
	public function responseMsg() { // 接收微信推送的消息
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
			$MsgType = $postObj->MsgType;
			$keyword = trim ( $postObj->Content );
			$time = time ();
			if ($MsgType == 'event') { // 关注和取消关注事件
				if ($postObj->Event == 'subscribe') { // 关注
					$contentStr = "欢迎关注";
					$this->send_text_Msg($fromUsername, $toUsername, $time, $contentStr);
				} elseif ($postObj->Event == 'unsubscribe') { // 取消关注
				}
			}
			
			
			
			if (! empty ( $keyword )) {
				$msgType = "text";
				$contentStr = "Welcome to wechat world!";
				
				echo $resultStr;
			} else {
				echo "Input something...";
			}
		} else {
			echo "";
			exit ();
		}
	}
	public function send_text_Msg($toUsername, $fromUsername, $time, $contentStr) {
		$textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";
		$resultStr = sprintf ( $textTpl, $toUsername, $fromUsername, $time, 'text', $contentStr );
	}
}
