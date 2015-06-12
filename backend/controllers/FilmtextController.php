<?php

namespace backend\controllers;

class FilmtextController extends \yii\web\Controller {
	public function actionIndex() {
		return $this->render('index');
	}

	public function actionDelete($id) {
		$film_text = \backend\models\FilmText::findOne($id);
		if ($film_text != null) {
			if ($film_text->delete()) {
				echo "deleted $id";
			}

		} else {
			echo "film_text $id not found";
		}
	}

}
