<?php

namespace backend\controllers;

class ActorController extends \yii\web\Controller {
	public function actionIndex() {
		echo '<pre>';
		foreach (\backend\models\Actor::find()->batch(10) as $actors) {
			print_r($actors);
			echo '<hr/>';
		}
		// return $this->render('index');
	}

}
