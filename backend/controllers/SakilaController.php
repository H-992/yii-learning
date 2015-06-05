<?php

namespace backend\controllers;

use Yii;
class SakilaController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$isolationLevel =  \yii\db\Transaction::REPEATABLE_READ;
    	// Yii::$app->db->transaction(function($db){
    	// 	$db->createCommand()->update('payment',['amount'=>1],'payment_id=15')->execute();
    	// 	$db->createCommand()->update('payment',['amount'=>10],'payment_id=16')->execute();
    	// },$isolationLevel);

    	$transaction = Yii::$app->db->beginTransaction($isolationLevel);

    	try {
    		Yii::$app->db->createCommand()->update('payment',['amount'=>1],'payment_id=17')->execute();
    		Yii::$app->db->createCommand()->update('payment',['amount'=>10],'payment_id=18')->execute();

    		$transaction->commit();
    		
    	} catch (Exception $e) {
    		$transaction->rollBack();

    		throw $e;
    	}

        return $this->render('index');
    }


    public function actionActor()
    {
        echo '<pre>';

        $actor = (new \yii\db\Query())
        ->select('first_name,last_name,actor_id')
        ->from('actor')->limit(10);

        $film = (new \yii\db\Query())
        ->select('title,description,film_id')
        ->from('film')
        ->union($actor)
        ->limit(10)
        ->indexBy('film_id')
        ->all();





        print_r($film);


    }

}
