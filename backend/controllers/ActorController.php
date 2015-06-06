<?php

namespace backend\controllers;

use backend\models\Actor;

class ActorController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionCreate($first_name,$last_name)
    {
    	if( ($first_name != null)&&($last_name!=null) )
    	{
    		$actor = new Actor();
    		$actor->first_name=$first_name;
    		// $actor->last_name=$last_name;


    		if($actor->validate())
    		{
    			$actor->save();
    		}else{
    			print_r($actor->getErrors());
    		}

    	}
    }

    public function actionSave($id)
    {
    	$actor = Actor::findOne($id);
    	if($actor !=null)
    	{
    		$actor->first_name='aaaa_updated';
    		$actor->last_name='bbbbbbb_updated';
    		if($actor->save())
    			echo 'ok updated!';
    	}else{
    		$actor = new Actor();
    		$actor->first_name='alex';
    		$actor->last_name='wood';
    		if($actor->save())
    			echo 'ok saved new';
    		else
    			print_r($actor->getErrors());
    	}
    }


    public function actionSelect($ids=null)
    {
    	if($ids != null)
    	{
    		$actor = [];
    		// echo '<pre>';
    		foreach (Actor::find()->each(10) as $actors) {
    			$actor[] = [
    			'actor_id'=>$actors->actor_id,
    			'first_name'=>$actors->first_name,
    			'last_name'=>$actors->last_name,
    			'last_update'=>$actors->last_update
    			];
    		}

    		// $actor = Actor::findAll(explode(',', $ids));
    		// if($actor != null)
    		// {
    			return $this->render('_show',['actor'=>$actor]);
    		// }
    	}
    }

}
