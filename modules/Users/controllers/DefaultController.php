<?php

namespace app\modules\Users\controllers;

use yii\web\Controller;
use app\models\User;

class DefaultController extends Controller {
	public function actionIndex() {
		return $this->render ( 'index' );
	}
}
