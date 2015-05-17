<html>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
       	<title><?php echo $this->pageTitle;?></title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSS -->
        <link rel="icon" href="<?php echo Yii::app()->request->baseUrl;?>/images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/login/reset.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/login/supersized.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/login/style.css">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="<?php echo Yii::app()->request->baseUrl;?>/js/login/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="page-container">
            <h1>登录(Login)</h1>
           <?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-Form',
			'enableAjaxValidation'=>false,
			'clientOptions'=>array(
			'validateOnSubmit'=>true,
			),
			)); ?>
           	<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128,'placeholder'=>'输入用户名','class'=>'user_name')); ?>
           	<?php echo $form->error($model,'username'); ?>
            <?php echo $form->passwordField($model,'password',array('placeholder'=>'输入密码','class'=>'password_ipnt')); ?>
            <?php echo $form->error($model,'password'); ?>
           <div class="captcha_1">
            	<div class="captcha_1_1">
	            	<?php echo $form->textField($model,'verifyCode',array('maxlength'=>6,'class'=>'Captcha','placeholder'=>'输入验证码')); ?> 
	           	</div>
	           	<div class="div_captcha_1_2">
	            	<?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer','class'=>'captcha'))); ?>
           		</div>
           	</div>
           	<div class="div_captcha_err">
           		<?php echo $form->error($model,'verifyCode',array('class'=>'captcha_err errorMessage')); ?>
           	</div>
            <?php echo CHtml::submitButton('提交',array('style'=>'font-size:17px;','class'=>'submit')); ?>
            <?php $this->endWidget();?> 
            <div class="connect">
                                         版权所有
            </div>
        </div>
		<div style="text-align:center;">
		<p>&copy;18号外（北京）网络科技有限公司</p>
		</div>
	</body>
	<!--后台js-->
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/login/supersized.3.2.7.min.js" ></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/login/supersized-init.js" ></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="/assets/scripts/app.js"></script>      
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		});
	</script>
</html>