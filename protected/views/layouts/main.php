<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	<link rel="icon" href="<?php echo Yii::app()->request->baseUrl;?>/images/favicon.ico" type="image/x-icon" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<!--[if lt IE 8]>-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<!-- [endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<!--后台模板-->
	<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
</head>
<body>
<!--<div class="container" id="page">
	<?php //if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
	<?php //endif?>
	<?php //echo $content; ?>
	<div class="clear"></div><br>
	<div id="footer">
		Copyright &copy; <?php //echo date('Y')?> 18号外（www.18haowai.com）<br/>
		版权所有；北京18号外网络科技有限公司京ICP证 100953号 
	</div>
</div>-->
<div class=" header  navbar navbar-inverse navbar-fixed-top"">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->  
			<a class="navbar-brand" href="index.html" style="margin:-15px;">
			<img src="/assets/img/logo.jpg" alt="logo" class="img-responsive" />
			</a>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER --> 
			<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="/assets/img/menu-toggler.png" alt="" />
			</a> 
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="/assets/img/avatar1_small.jpg"/>
					<span class="username"><?php echo  Yii::app()->session['id'];?></span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="extra_profile.html"><i class="fa fa-user"></i> 我的简介</a></li>
						<li><a href="<?php echo Yii::app()->createUrl('/site/logout');?>"><i class="fa fa-key"></i> 退出</a></li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<div class="clearfix"></div>
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->        
			<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-th"></i> 
					<span class="title">用户管理</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo Yii::app()->createUrl('/user/admin');?>">
							用户列表</a>
						</li>
						<li >
							<a href="<?php echo Yii::app()->createUrl('/manager/admin');?>">
							管理员列表</a>
						</li>
					</ul>
				</li>
				
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-th"></i> 
					<span class="title">广告管理</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="table_basic.html">
							广告列表</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="active" href="javascript:;">
					<i class="fa fa-th"></i>  
					<span class="title">手机通讯</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							通讯产品
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">GPS导航仪</a></li>
								<li><a href="#">电话机</a></li>
								<li><a href="#">手持GPS</a></li>
								<li><a href="#">对讲机</a></li>
								<li><a href="#">电话会议</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							手机配件
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">移动电源</a></li>
								<li><a href="#">存储卡</a></li>
								<li><a href="#">贴膜</a></li>
								<li><a href="#">充电器</a></li>
								<li><a href="#">电池</a></li>
								<li><a href="#">蓝牙耳机</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript#">
							手机
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">双卡双待</a></li>
								<li><a href="#">4寸及以上</a></li>
								<li><a href="#">800万像素</a></li>
								<li><a href="#">4G手机</a></li>
								<li><a href="#">音乐手机</a></li>
								<li><a href="#">三防手机</a></li>
								<li><a href="#">商务手机</a></li>
								<li><a href="#">老人手机</a></li>
							</ul>
						</li>
					</ul>
				</li>
				
				<li>
					<a class="active" href="javascript:;">
					<i class="fa fa-th"></i>  
					<span class="title">电脑笔记本</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							电脑整机
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">台式机</a></li>
								<li><a href="#">一体机</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							笔记本
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">    四核全能本</a></li>


								<li><a href="#">4G内存</a></li>
								<li><a href="#">i5笔记本</a></li>
								<li><a href="#">i7笔记本</a></li>
								<li><a href="#">独显本</a></li>
								<li><a href="#">14寸笔记本</a></li>
								<li><a href="#">13寸笔记本</a></li>
								<li><a href="#">双显卡笔记本</a></li>
								<li><a href="#">商务本</a></li>
								<li><a href="#">游戏影音本</a></li>
								<li><a href="#">极致轻薄本</a></li>
								<li><a href="#">超极本</a></li>
								<li><a href="#">上网本</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript#">
							电脑配件
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">双卡双待</a></li>
								<li><a href="#">4寸及以上</a></li>
								<li><a href="#">800万像素</a></li>
								<li><a href="#">4G手机</a></li>
								<li><a href="#">音乐手机</a></li>
								<li><a href="#">三防手机</a></li>
								<li><a href="#">商务手机</a></li>
								<li><a href="#">老人手机</a></li>
							</ul>
						</li>
					</ul>
				</li>
				
				<li>
					<a class="active" href="javascript:;">
					<i class="fa fa-th"></i>  
					<span class="title">相机 摄相机</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							卡片机
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#"> 安卓相机</a></li>
								<li><a href="#">广角相机</a></li>
								<li><a href="#">长焦相机</a></li>
								<li><a href="#">单电相机</a></li>
								<li><a href="#">1000元以下</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							单反
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">专业消费级</a></li>   
								<li><a href="#">入门单反</a></li>
								<li><a href="#">中端单反</a></li>
								<li><a href="#">高端单反</a></li>
								<li><a href="#">3D相机</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript#">
							摄像机
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">高清摄像机</a></li>
								<li><a href="#">专业摄像机</a></li>
								<li><a href="#">闪存摄像机</a></li>
								<li><a href="#">硬盘摄像机</a></li>
							</ul>
						</li>
					</ul>
				</li>
				
				<li>
					<a class="active" href="javascript:;">
					<i class="fa fa-th"></i>  
					<span class="title">随身视听</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							平板
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#"> 安卓相机</a></li>
								<li><a href="#">广角相机</a></li>
								<li><a href="#">长焦相机</a></li>
								<li><a href="#">单电相机</a></li>
								<li><a href="#">1000元以下</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							MP3/MP4
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">专业消费级</a></li>   
								<li><a href="#">入门单反</a></li>
								<li><a href="#">中端单反</a></li>
								<li><a href="#">高端单反</a></li>
								<li><a href="#">3D相机</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript#">
							 录音笔
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">高清摄像机</a></li>
								<li><a href="#">专业摄像机</a></li>
								<li><a href="#">闪存摄像机</a></li>
								<li><a href="#">硬盘摄像机</a></li>
							</ul>
						</li>
					</ul>
				</li>
				
				<li>
					<a class="active" href="javascript:;">
					<i class="fa fa-th"></i>  
					<span class="title">电脑外设</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							音箱
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#"> 无线音箱</a></li>
								<li><a href="#">苹果音箱</a></li>
								<li><a href="#">电脑音箱</a></li>
								<li><a href="#">HiFi音箱</a></li>
								<li><a href="#">笔记本音箱</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							耳机
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">入耳式</a></li>   
								<li><a href="#">耳塞式</a></li>
								<li><a href="#">头戴式</a></li>
								<li><a href="#">蓝牙耳机</a></li>
								<li><a href="#">无线耳机</a></li>
								<li><a href="#">游戏影音</a></li>
								<li><a href="#">HiFi耳机</a></li>
								<li><a href="#">运动耳机</a></li>	
							</ul>
						</li>
						<li>
							<a href="javascript#">
							
							键鼠
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">无线鼠标</a></li>
								<li><a href="#">游戏鼠标</a></li>
								<li><a href="#">激光鼠标</a></li>
								<li><a href="#">蓝光鼠标</a></li>
								<li><a href="#">光电鼠标</a></li>
								<li><a href="#">无线键盘</a></li>
								<li><a href="#">机械键盘</a></li>
								<li><a href="#">超薄键盘</a></li>
								<li><a href="#">游戏键盘</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript#">
							摄像头
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">  高清</a></li>
								<li><a href="#">无驱动版</a></li>
								<li><a href="#">500万像素</a></li>
								<li><a href="#">800万像素</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript#">
							移动硬盘
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">USB3.0高速</a></li>
								<li><a href="#">U盘</a></li>
							</ul>
						</li>
					</ul>
				</li>
				
				<li>
					<a class="active" href="javascript:;">
					<i class="fa fa-th"></i>  
					<span class="title">DIY装机</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							扩展配件
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">视频采集卡</a></li>
								<li><a href="#">TV卡</a></li>
								<li><a href="#">硬盘/光驱盒</a></li>
								<li><a href="#">光盘片</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							 装机配件
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">主板</a></li>   
								<li><a href="#">显卡</a></li>

								
								<li><a href="#">CPU</a></li>
								<li><a href="#">内存</a></li>
								<li><a href="#">硬盘</a></li>
								<li><a href="#">固态硬盘</a></li>
								<li><a href="#">电源</a></li>
								<li><a href="#">机箱</a></li>
								<li><a href="#">散热器</a></li>
								<li><a href="#">光驱</a></li>	
							</ul>
						</li>
						<li>
							<a href="javascript#">
							显示器
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#"> 设计制图</a></li>
								<li><a href="#">电子竞技</a></li>
								<li><a href="#">经济实用</a></li>
								<li><a href="#">宽屏16:10</a></li>
								<li><a href="#">宽屏16:9</a></li>
							</ul>
						</li>
					</ul>
				</li>
				
				<li>
					<a class="active" href="javascript:;">
					<i class="fa fa-th"></i>  
					<span class="title">游戏电玩</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							游戏机
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">掌上游戏机</a></li>
								<li><a href="#">PSP</a></li>
								<li><a href="#">NDSL</a></li>
								<li><a href="#">游戏机</a></li>
								<li><a href="#">PS3</a></li>
								<li><a href="#">XBOX360</a></li>
								<li><a href="#">Wii</a></li>
								<li><a href="#">手柄</a></li>
								<li><a href="#">方向盘</a></li>
								<li><a href="#">游戏杆</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							 游戏机配件
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">游戏机线材</a></li> 
								<li><a href="#">游戏机存储器</a></li>
								<li><a href="#">游戏机套</a></li>
								<li><a href="#">游戏机包/盒</a></li>
							</ul>
						</li>
					</ul>
				</li>
				
				<li>
					<a class="active" href="javascript:;">
					<i class="fa fa-th"></i>  
					<span class="title">办公用品</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							投影显示
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">投影机</a></li>
								<li><a href="#">家用投影机</a></li>
								<li><a href="#">微型投影机</a></li>
								<li><a href="#">3D投影机</a></li>
								<li><a href="#">影院投影机</a></li>
								<li><a href="#">商务投影机</a></li>
								<li><a href="#">投影灯泡</a></li>
								<li><a href="#">投影幕布</a></li>
								<li><a href="#">电子白板</a></li>
								<li><a href="#">游戏杆</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							 办公打印
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">激光打印机</a></li> 
								<li><a href="#">喷墨打印机</a></li>
								<li><a href="#">多功能一体机</a></li>
								<li><a href="#">复印机</a></li>
								<li><a href="#">传真机</a></li>
								<li><a href="#">扫描仪</a></li>
								<li><a href="#">硒鼓</a></li>
								<li><a href="#">墨盒</a></li>
								<li><a href="#">墨粉</a></li>
								<li><a href="#">UPS电源</a></li>
								<li><a href="#">点钞机</a></li>
							</ul>
						</li>
					</ul>
				</li>
				
				<li>
					<a class="active" href="javascript:;">
					<i class="fa fa-th"></i>  
					<span class="title">网络产品</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							网络存储
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">磁盘阵列</a></li>
								<li><a href="#">NAS网络存储</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							 网络设备
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">交换机</a></li> 
								<li><a href="#">路由器</a></li>
								<li><a href="#">ADSL</a></li>
								<li><a href="#">网卡</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							 无线网络
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">无线上网卡</a></li> 
								<li><a href="#">3G上网卡</a></li>
								<li><a href="#">无线网卡</a></li>
								<li><a href="#">无线路由器</a></li>
								<li><a href="#">无线接入器</a></li>
							</ul>
						</li>
					</ul>
				</li>
				
				<li>
					<a class="active" href="javascript:;">
					<i class="fa fa-th"></i>  
					<span class="title">家用电器</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							个人护理
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">剃须刀</a></li>
								<li><a href="#">血压计</a></li>
								<li><a href="#">电动牙刷</a></li>
								<li><a href="#">脱毛器</a></li>
								<li><a href="#">助听器</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							厨房电器
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">电饭煲</a></li> 
								<li><a href="#"> 电饼铛</a></li>
								<li><a href="#">电池炉</a></li>
								<li><a href="#">微波炉</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							 生活电器
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">电暖器</a></li> 
								<li><a href="#">空调扇</a></li>
								<li><a href="#">加湿器</a></li>
								<li><a href="#">豆浆机</a></li>
								<li><a href="#">榨汁机</a></li>
								<li><a href="#">收音机</a></li>
								<li><a href="#">酸奶机</a></li>
								<li><a href="#">咖啡机</a></li>
								<li><a href="#">电水壶</a></li>
								<li><a href="#">电吹风</a></li>
								<li><a href="#">电熨斗</a></li>
								<li><a href="#">空气净化器</a></li>
								<li><a href="#">足浴盆</a></li>
							</ul>
						</li>
					</ul>
				</li>
				
				<li>
					<a class="active" href="javascript:;">
					<i class="fa fa-th"></i>  
					<span class="title">数字家电</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							电视机
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">液晶电视</a></li>
								<li><a href="#">3D电视</a></li>
    							<li><a href="#">LED电视</a></li>
								<li><a href="#">网络电视</a></li>
								<li><a href="#">等离子电视</a></li>
								<li><a href="#">家庭影院</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							播放机
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">  AV音箱</a></li> 
								<li><a href="#">迷你组合音响</a></li>
								<li><a href="#">高清播放机</a></li>
								<li><a href="#">蓝光播放机</a></li>
								<li><a href="#">DVD</a>
							</ul>
						</li>
					</ul>
				</li>
				
				<li>
					<a class="active" href="javascript:;">
					<i class="fa fa-th"></i>  
					<span class="title">品牌管理</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							手机通讯品牌
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">苹果</a></li>
								<li><a href="#">三星</a></li>
    							<li><a href="#">小米</a></li>
								<li><a href="#">魅族</a></li>
								<li><a href="#">HTC</a></li>
								<li><a href="#">华为</a></li>
								<li><a href="#">诺基亚</a></li>
								<li><a href="#">金立</a></li>
								<li><a href="#">酷派</a></li>
								<li><a href="#">LG</a></li>
								<li><a href="#">索尼爱立信</a></li>
								<li><a href="#">中兴</a></li>
								<li><a href="#">夏普</a></li>
								<li><a href="#">OPPO</a></li>
								<li><a href="#">阿尔卡特</a></li>
								<li><a href="#">长虹</a></li>
								<li><a href="#">步步高</a></li>
								<li><a href="#">纽曼</a></li>
								<li><a href="#">征途</a></li>
								<li><a href="#">TomTom</a></li>
								<li><a href="#">京华数码</a></li>
								<li><a href="#">E路航</a></li>
								<li><a href="#"> Garmin</a></li>
								<li><a href="#">中恒</a></li>
								<li><a href="#">任我游</a></li>
								<li><a href="#">昂达</a></li>
								<li><a href="#">e路航</a></li>
								<li><a href="#">首信</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							电脑笔记本品牌
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">苹果</a></li> 
								<li><a href="#">lennove</a></li>
								<li><a href="#">三星</a></li>
								<li><a href="#">TinkPad</a></li>
								<li><a href="#">华硕</a></li>
								<li><a href="#">宏碁</a></li>
								<li><a href="#">索尼</a>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							相机,摄像机品牌
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">索尼</a></li> 
								<li><a href="#">佳能</a></li>
								<li><a href="#">三洋</a></li>
								<li><a href="#">施耐德</a></li>
								<li><a href="#">卡尔蔡司</a></li>
								<li><a href="#">爱国者</a></li>
								<li><a href="#">腾龙</a>
								<li><a href="#">明基</a>
								<li><a href="#">哈苏</a>
								<li><a href="#">柯达</a>
								<li><a href="#">理光</a>
								<li><a href="#">徕卡</a>
								<li><a href="#">适马</a>
								<li><a href="#">卡西欧</a>
								<li><a href="#">奥林巴斯</a>
								<li><a href="#">三星</a>
								<li><a href="#">松下</a>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							随身视听品牌
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">苹果</a></li> 
								<li><a href="#">汉王</a></li>
								<li><a href="#">亚马逊</a></li>
								<li><a href="#">索尼</a></li>
								<li><a href="#">罗技</a></li>
								<li><a href="#">歌美</a></li>
								<li><a href="#">蓝色妖姬</a>
								<li><a href="#">酷比魔方</a>
								<li><a href="#">艾利和</a>
								<li><a href="#">台电</a>
								<li><a href="#">三星</a>
								<li><a href="#">蓝魔</a>
							</ul>
						</li>
						
						<li>
							<a href="javascript:;">
							电脑外设品牌
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">东芝</a></li> 
								<li><a href="#">三星</a></li>
								<li><a href="#">忆捷</a></li>
								<li><a href="#">苹果</a></li>
								<li><a href="#">LG</a></li>
							</ul>
						</li>
						
						<li>
							<a href="javascript:;">
							DIY装机品牌
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">金士顿</a></li> 
								<li><a href="#">威刚</a></li>
								<li><a href="#">影驰</a></li>
								<li><a href="#">mis微星</a></li>
								<li><a href="#">七彩虹</a></li>
								<li><a href="#">索泰</a></li>
								<li><a href="#">海盗船</a></li>
								<li><a href="#">芝奇</a></li>
								<li><a href="#">宇瞻</a></li>
								<li><a href="#">希捷</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							游戏电玩品牌
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">神盾</a></li> 
								<li><a href="#">Shield</a></li>
								<li><a href="#">莱仕达</a></li>
								<li><a href="#">罗技 </a></li>
								<li><a href="#">北通</a></li>
								<li><a href="#">NDSL</a></li>
								<li><a href="#">神游科技</a></li>
								<li><a href="#">誉拓</a></li>
								<li><a href="#">	PSP</a></li>
								<li><a href="#">PS2</a></li>
								<li><a href="#">XBOX</a></li>
								<li><a href="#">WII</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							办公品牌
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">三木</a></li> 
								<li><a href="#">爱普森</a></li>
								<li><a href="#">三洋</a></li>
								<li><a href="#">松下</a></li>
							</ul>
						</li>
						
						<li>
							<a href="javascript:;">
							网络产品品牌
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">神舟数码</a></li> 
								<li><a href="#">惠普</a></li>
								<li><a href="#">中兴</a></li>
								<li><a href="#">思科</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							家用电器品牌
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">三洋</a></li> 
								<li><a href="#">三星</a></li>
								<li><a href="#">SONY</a></li>
								<li><a href="#">格力</a></li>
								<li><a href="#">LG</a></li>
								<li><a href="#">美的</a></li>
								<li><a href="#">夏普</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							数字家电品牌
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">苹果</a></li> 
								<li><a href="#">三星</a></li>
								<li><a href="#">SONY</a></li>
								<li><a href="#">海尔</a></li>
								<li><a href="#">三洋</a></li>
								<li><a href="#">松下</a></li>
								<li><a href="#">海信</a></li>
								<li><a href="#">先锋</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler"></div>
				<div class="toggler-close"></div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>THEME COLOR</span>
						<ul>
							<li class="color-black current color-default" data-style="default"></li>
							<li class="color-blue" data-style="blue"></li>
							<li class="color-brown" data-style="brown"></li>
							<li class="color-purple" data-style="purple"></li>
							<li class="color-grey" data-style="grey"></li>
							<li class="color-white color-light" data-style="light"></li>
						</ul>
					</div>
					<div class="theme-option">
						<span>Layout</span>
						<select class="layout-option form-control input-small">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>Header</span>
						<select class="header-option form-control input-small">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>Sidebar</span>
						<select class="sidebar-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>Footer</span>
						<select class="footer-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END BEGIN STYLE CUSTOMIZER -->            
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							<button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>Actions</span> <i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="#"> Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Home</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">UI Features</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li><a href="#">Typography</a></li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
		</div>
		<!-- BEGIN PAGE -->     
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			Copyright &copy; <?php echo date('Y')?> 18号外（www.18haowai.com）
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="fa fa-angle-up"></i>
			</span>
		</div>
	</div>
</body>
	<!--后台js-->
	<script src="/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>ssssssss
	<script src="/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>   
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
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