<?php

return array(
	'name'=>'Spill It!!',
	'defaultController'=>'main',
	'components'=>array(
		'file'=>array(
			'class'=>'application.extensions.file.CFile',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:w+>/<id:d+>'=>'<controller>/view',
				'<controller:w+>/<action:w+>/<id:d+>'=>'<controller>/<action>',
				'<controller:w+>/<action:w+>'=>'<controller>/<action>'
			),
		),
	),
);