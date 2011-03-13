<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class MainController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{
		$file = Yii::app()->file->set('data/1.xml', true);	
		$data = array(
			'title' => 'this is title',
			'file' => $file,
			);
		
		$this->render('spillit',$data);
	}
	
}