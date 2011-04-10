<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class MakeController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{
		echo 'Hello World from make';
	}
	
	public function actionHello()
	{
		$arr = array( 	'foo' => 'bar',
				'bat' => 'baz'
		);
		echo CJSON::encode($arr);
	
	}
	
	public function actionContact()
	{
		$this->render('contact');
	}
}
