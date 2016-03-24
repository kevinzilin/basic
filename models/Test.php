<?php

namespace app\models;

use yii\db\ActiveRecord;

class Test extends ActiveRecord {
	public function rules(){
		return [
				['id','integer'],//验证整形
				['name','string','length'=>[0,5]]//验证字符串 并且长度在0-5之间
		];
	}
}

?>