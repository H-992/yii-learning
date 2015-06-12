<?php

namespace frontend\controllers;
use Yii;

class PostController extends \yii\web\Controller {

	public $defaultAction = 'home';

	private $pic_width;

	public function actionIndex() {
		file_put_contents(Yii::getAlias('@upload') . '/test.txt', "test alias yii2 \n");
		return $this->render('index', ['width' => $this->pic_width]);
	}

	public function actionHome() {
		return $this->render('home');
	}

	public function actionTo($site, $param) {
		return $this->redirect('http://' . $site . '/' . $param);
	}

	public function beforeAction($action) {
		$this->pic_width = Yii::$app->params['pic_size']['w'] + 8;
		return parent::beforeAction($action);
	}

}
