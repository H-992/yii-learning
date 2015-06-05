<?php

namespace backend\controllers;
use Yii;

class CountryController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$params = [
    	':cname'=>'Iran',
    	// ':ccode'=>'IR',
    	// ':ccr'=>'IRR'
    	];


    	$sql = "SELECT * FROM {{%countries}} WHERE [[countryName]]=:cname"; //  AND countryCode=:ccode AND currencyCode=:ccr ";
    	$iran = Yii::$app->db->createCommand($sql,$params)->queryOne();

        return $this->render('index',['iran'=>$iran]);
    }


    public function actionUpdate($cname,$p)
    {
    	// $sql = "UPDATE countries SET population='9692999998' WHERE countryName='$cname' ";
    	$is = Yii::$app->db->createCommand()->update('countries',['population'=>$p],"countryName='$cname' ")->execute();
    	if($is)
    	{
    		echo 'ok';
    	}else{
    		echo 'no';
    	}
    }

    public function actionCreate()
    {

    	$arr_ins = [
    	  	[
			'DD',
			't1',
			'IRR',
			9692999998,
			999,
			'test city',
			'fa-IR,ku'
    		],
    		 [
		    'DD',
			't2',
			'IRR',
			9692999998,
			999,
			'test city',
			'fa-IR,ku'
    		],
    		    	  	[
		   'DD',
			't3',
			'IRR',
			9692999998,
			999,
			'test city',
			'fa-IR,ku'
    		],
    		[
		   'DD',
			't4',
			'IRR',
			9692999998,
			999,
			'test city',
			'fa-IR,ku'
    		]


    	];

    	$is = Yii::$app->db->createCommand()->batchInsert('countries',
    		['countryCode','countryName','currencyCode','population','isoNumeric','capital','languages'],
    		$arr_ins
    		)->execute();

    	if($is)
    	{
    		echo 'ok';
    	}else{
    		echo 'no';
    	}

    }


    public function actionDelete($id)
    {
    	$is = Yii::$app->db->createCommand()->delete('countries',"id='$id'")->execute();

    	if($is)
    	{
    		echo 'ok';
    	}else{
    		echo 'no';
    	}
    }





}
