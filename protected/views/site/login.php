<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>系统登录</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/login/css/reset.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/login/css/supersized.css">
	   	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/login/css/style.css">
	   <!--<link rel="shortcut icon" href="favicon.ico" />-->
	     <!--[if lt IE 9]
	     	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/html5.js"></script>
	     [endif]-->
	</head>
<body>
<div class="page-container">
<h1>登录(Login)</h1>
<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
	<div class="row">
		<?php echo $form->errorSummary($model);?>
	</div>
	
	<div class="row">
		<?php echo $form->textField($model,'username',array('class'=>'username','placeholder'=>'请输入您的用户名!')); ?>
		<!--<?php echo $form->error($model,'username'); ?>-->
	</div>

	<div class="row">
		<?php echo $form->passwordField($model,'password',array('class'=>'password','placeholder'=>'请输入您的密码!')); ?>
		<!--<?php echo $form->error($model,'password'); ?>-->
	</div>
	
	<div class="row">
		<?php echo $form->textField($model,'captcha',array('class'=>'captcha','placeholder'=>'请输入验证码!')); ?>
		<!--<?php echo $form->error($model,'captcha'); ?>-->
	</div>
	
	<div class="row ">
		<?php echo CHtml::submitButton('Login',array('class'=>'submit_button')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>

</div>
<div style="margin:110px;">
	Copyright &copy; <?php echo date('Y')?> 18号外（www.18haowai.com）<br>
	版权所有；北京18号外网络科技有限公司京ICP证 100953号 
</div>
</body>
<!-- Javascript -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/login/js/jquery-1.8.2.min.js" ></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/login/js/supersized.3.2.7.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/login/js/supersized-init.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/login/js/scripts.js"></script>
</html>