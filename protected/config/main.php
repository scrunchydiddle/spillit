<?php

return array(
	'name'=>'Spill It!!',
	'defaultController'=>'main',
	'import'=>array(
		'application.models.*',
		'application.components.*'
	),
	'components'=>array(
		'file'=>array(
			'class'=>'application.extensions.file.CFile',
		),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=spillit',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_'
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=> false,
			'rules'=>array(
				'<controller:w+>/<id:d+>'=>'<controller>/view',
				'<controller:w+>/<action:w+>/<id:d+>'=>'<controller>/<action>',
				'<controller:w+>/<action:w+>'=>'<controller>/<action>'
			),
		),
	),
);
