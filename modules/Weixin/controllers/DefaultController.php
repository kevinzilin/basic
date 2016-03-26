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
			$toUsername = $postObj->ToUserName; // 公众号
			$fromUsername = $postObj->FromUserName; // 用户OpenID
			$MsgType = $postObj->MsgType; // 消息类型
			$time = time ();
			if ($MsgType == 'event') { // 关注和取消关注事件
				if ($postObj->Event == 'subscribe') { // 关注
					$contentStr = "欢迎关注";
					$this->send_text_Msg ( $fromUsername, $toUsername, $time, $contentStr );
				} elseif ($postObj->Event == 'unsubscribe') { // 取消关注
				}
			}
			if ($MsgType == 'text') { // 普通文本消息 关键字匹配
				if ($postObj->Content == '图文') {
					$photo_arr=[
							[
									'title'=>'测试',
									'description'=>'描述',
									'picur'=>'http://ww1.sinaimg.cn/crop.46.93.1106.1106.1024/0066BUlQjw8erhomdo2uwj30xc0xcq5z.jpg',//图片地址
									'url'=>'https://www.baidu.com/',//图文地址
							],
							[
							'title'=>'测试2',
							'description'=>'描述2',
							'picur'=>'http://img5.duitang.com/uploads/item/201307/22/20130722192550_4tWsr.thumb.224_0.gif',//图片地址
							'url'=>'https://www.baidu.com/',//图文地址
							]
					];
					$this->send_photo_Msg ( $fromUsername, $toUsername, $time, $photo_arr );
				} else {
					$this->send_text_Msg ( $fromUsername, $toUsername, $time, $postObj->Content );
				}
			}
		}
	}
	public function send_text_Msg($toUsername, $fromUsername, $time, $contentStr) { // 回复普通文本
		$textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";
		$resultStr = sprintf ( $textTpl, $toUsername, $fromUsername, $time, 'text', $contentStr );
		echo $resultStr;
	}
	public function send_photo_Msg($toUsername, $fromUsername, $time, $photo_arr) { // 回复图文消息
		$textTpl = "<xml>
		<ToUserName><![CDATA[%s]]></ToUserName>
		<FromUserName><![CDATA[%s]]></FromUserName>
		<CreateTime>%s</CreateTime>
		<MsgType><![CDATA[news]]></MsgType>
		<ArticleCount>" . count ( $photo_arr ) . "</ArticleCount>
		<Articles>";
		foreach ( $photo_arr as $v ) {
			$textTpl .= "<item>
		<Title><![CDATA[" . $v ['title'] . "]]></Title>
		<Description><![CDATA[" . $v ['description'] . "]]></Description>
		<PicUrl><![CDATA[" . $v ['picur'] . "]]></PicUrl>
		<Url><![CDATA[" . $v ['url'] . "]]></Url>
		</item>";
		}
		$textTpl .= "</Articles></xml>";
		$resultStr = sprintf ( $textTpl, $toUsername, $fromUsername, $time, 'text' );
		echo $resultStr;
	}
}
