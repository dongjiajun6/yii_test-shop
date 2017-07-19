<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'djj123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),'houtai',
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/

		// database settings are configured in database.php
		// 'db'=>require(dirname(__FILE__).'/database.php'),
		'db'=>array(
<<<<<<< HEAD
			'connectionString'=>'mysql:host=localhost;dbname=yii_test',
				'emulatePrepare'=>true,
				'username'=>'yii_test',
				'password'=>'djj123456',
				'tablePrefix'=>'sw_',
				'enableParamLogging'=>true,
=======
			'connectionString'=>'mysql:host=localhost;bdname=yii_test',
			'emulatePrepare'=>true,
			'username'=>'yii_test',
			'password'=>'djj123456',
			'charset'=>'utf8',
			'tablePrefix'=>'sw_',// 设置数据表的前缀
>>>>>>> 9103e95703c98cea357a50896e91f83f79e42d66
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
<<<<<<< HEAD
				
				array(
					'class'=>'CWebLogRoute',
				),
				
=======
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
>>>>>>> 9103e95703c98cea357a50896e91f83f79e42d66
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
