<?php

namespace backend\controllers;

class PaymentController extends \yii\web\Controller {
	public function actionIndex() {
		return $this->render('index');
	}

	public function actionAdd($id) {
		$payment = \backend\models\Payment::findOne($id);
		$payment->updateCounters(['amount' => 1]);
	}

	public function actionUpdate() {
		\backend\models\Payment::updateAll(['amount' => 0], "last_update>'2015-01-01'");
	}

}
