<?php

// include Yii bootstrap file
$yii = dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
// create a Web application instance and run
require_once($yii);
Yii::createWebApplication($config)->run();