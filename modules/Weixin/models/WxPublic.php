<?php

namespace app\modules\Weixin\models;

use Yii;

/**
 * This is the model class for table "wx_public".
 *
 * @property integer $id
 * @property string $wx_id
 * @property string $wx_appid
 * @property string $wx_appsecret
 * @property string $wx_access_token
 * @property integer $expired_time
 * @property string $wx_token
 */
class WxPublic extends \yii\db\ActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'wx_public';
	}
	
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [ 
				[ 
						[ 
								'expired_time' 
						],
						'integer' 
				],
				[ 
						[ 
								'wx_id',
								'wx_appid' 
						],
						'string',
						'max' => 55 
				],
				[ 
						[ 
								'wx_appsecret',
								'wx_access_token',
								'wx_token' 
						],
						'string',
						'max' => 255 
				] 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [ 
				'id' => 'ID',
				'wx_id' => 'Wx ID',
				'wx_appid' => 'Wx Appid',
				'wx_appsecret' => 'Wx Appsecret',
				'wx_access_token' => 'Wx Access Token',
				'expired_time' => 'Expired Time',
				'wx_token' => 'Wx Token' 
		];
	}
	
	/**
	 * 获取数据库access_token
	 * 
	 * @return string
	 */
	public function getAccess_token() {
		$time = time ();
		if ($time > ($this->expired_time - 5)) {
			$access_token = $this->setAccess_token ();
		} else {
			$access_token = $this->wx_access_token;
		}
		return $access_token;
	}
	
	/**
	 * 从微信获取access_token
	 */
	public function setAccess_token() {
		$appid = $this->wx_appid;
		$appsecret = $this->wx_appsecret;
		$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
	}
}
