<?php

namespace backend\controllers;

class FilmController extends \yii\web\Controller {
	public function actionIndex() {
		$film_actor = \backend\models\Film::findOne(1);
		if ($film_actor != null) {
			// echo '<pre>';
			// print_r($film_actor->actors);

			return $this->render('index', ['film' => $film_actor, 'actors' => $film_actor->actors]);
		}

	}

}
