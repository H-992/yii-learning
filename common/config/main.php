<?php
return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],

	'aliases' => [
		'@upload' => '/var/www/advanced/upload',
	],

	// 'catchAll' => [
	// 	'site/offline',
	// 	'h' => 2,
	// ],

	'controllerMap' => [
		'article' => [
			'class' => 'frontend\controllers\PostController',
			'enableCsrfValidation' => false,
		],
	],

	'params' => [
		'pic_size' => ['w' => 450, 'h' => 250],
	],

];
