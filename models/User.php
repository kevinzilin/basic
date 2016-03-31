<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $wx_name
 * @property string $wx_img
 * @property string $wx_openid
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 * @property integer $follow_status
 * @property integer $follow_time
 * @property integer $cancel_time
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'user';
	}
	
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [ 
				[ 
						[ 
								'follow_status',
								'follow_time',
								'cancel_time' 
						],
						'integer' 
				],
				[ 
						[ 
								'username' 
						],
						'string',
						'max' => 50 
				],
				[ 
						[ 
								'wx_name',
								'wx_img',
								'wx_openid' 
						],
						'string',
						'max' => 255 
				],
				[ 
						[ 
								'password',
								'authKey',
								'accessToken' 
						],
						'string',
						'max' => 100 
				] 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [ 
				'id' => 'ID',
				'username' => 'Username',
				'wx_name' => 'Wx Name',
				'wx_img' => 'Wx Img',
				'wx_openid' => 'Wx Openid',
				'password' => 'Password',
				'authKey' => 'Auth Key',
				'accessToken' => 'Access Token',
				'follow_status' => 'Follow Status',
				'follow_time' => 'Follow Time',
				'cancel_time' => 'Cancel Time' 
		];
	}
	/**
	 * @inheritdoc
	 */
	public static function findIdentity($id) {
		return static::findOne ( $id );
		// return isset(self::$users[$id]) ? new static(self::$users[$id]) :
		// null;
	}
	
	/**
	 * @inheritdoc
	 */
	public static function findIdentityByAccessToken($token, $type = null) {
		return static::findOne ( [ 
				'access_token' => $token 
		] );
		/*
		 * foreach (self::$users as $user) {
		 * if ($user['accessToken'] === $token) {
		 * return new static($user);
		 * }
		 * }
		 *
		 * return null;
		 */
	}
	
	/**
	 * Finds user by username
	 *
	 * @param string $username        	
	 * @return static|null
	 */
	public static function findByUsername($username) {
		$user = User::find ()->where ( [ 
				'username' => $username 
		] )->asArray ()->one ();
		
		if ($user) {
			return new static ( $user );
		}
		
		return null;
		/*
		 * foreach (self::$users as $user) {
		 * if (strcasecmp($user['username'], $username) === 0) {
		 * return new static($user);
		 * }
		 * }
		 *
		 * return null;
		 */
	}
	
	/**
	 * @inheritdoc
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @inheritdoc
	 */
	public function getAuthKey() {
		return $this->authKey;
	}
	
	/**
	 * @inheritdoc
	 */
	public function validateAuthKey($authKey) {
		return $this->authKey === $authKey;
	}
	
	/**
	 * Validates password
	 *
	 * @param string $password
	 *        	password to validate
	 * @return boolean if password provided is valid for current user
	 */
	public function validatePassword($password) {
		$password = md5 ( md5 ( $password ) . sha1 ( $password ) ); // 加密
		return $this->password === $password;
	}
	public function getOrders() {
		$orders = $this->hasMany ( Order::className (), [  // 根据users表id 关联查询 order表 查询多条
				'user_id' => 'id' 
		] )->asArray ();
		return $orders;
	}
	public static function setUser($openid, $follow_status) { // 新增 修改微信用户
		$openid = strval ( $openid ); // 转为字符串
		$user = User::find ()->where ( 'wx_openid=:openid', [ 
				':openid' => $openid 
		] )->one ();
		if (empty ( $user )) {
			$user = new User ();
			$user->wx_openid = $openid;
		}
		$user->follow_status = $follow_status;
		$time = time ();
		if ($follow_status == 1) { // 关注
			$user->follow_time = $time;
			$user->accessToken = md5 ( md5 ( $openid ) . sha1 ( $openid ) );
		} else {
			$user->accessToken = '';
			$user->cancel_time = $time;
		}
		return $user->save ();
	}
}

?>