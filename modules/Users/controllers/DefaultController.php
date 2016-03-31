<?php

namespace app\modules\Users\controllers;

use yii\web\Controller;
use app\models\User;

class DefaultController extends Controller
{
    public function actionIndex()
    {
    	User::addUser('ohogAwjwWwV5utghN7YjlpBd5cam');
        return $this->render('index');
    }
}
