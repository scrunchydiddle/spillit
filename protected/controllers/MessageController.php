<?php

/**
 * MessageController 
 * Controller for handling message object
 */
class MessageController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{
		echo 'Hello World from make';
	}
	
	public function actionModel()
	{
		//$message = $_GET['message'];
		//$author = $_GET['author'];
		$date = time();

		$arr = array( 	'foo' => 'bar',
				'bat' => 'baz'
		);
		echo CJSON::encode($arr);
	
	}
	
	public function actionGet()
	{
		$this->render('contact');
	}

	public function actionSave()
	{
		$model = new Message;
		$model->message_id = '12345';
		$model->message_author = 'fikri';
		$model->message_date = time();
		$model->save();
		echo CJSON::encode($model);
	}
}
