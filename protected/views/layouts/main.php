<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<div id='header'>
	<div id='logo'></div>
</div>
<div id='container'>
	<div id='left'>
		<div id='login_panel'>
			<div id='help_hide'>
				<a onClick='alert("help");'>help&nbsp;</a> | <a onClick='alert("hide");'>&nbsp;hide</a>
			</div>
			<?php include('login.php');?>
		</div>
	</div>
	<div id='content'>
		<div id='nav_panel'>
			<a onClick='alert("help");'>Spill The Beans&nbsp;</a><?php //if login, show other options?>
		</div>
		<?php echo $content; ?>
	</div>
</div>

<body></body>

</html>