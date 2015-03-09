<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户管理'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'创建用户', 'url'=>array('create')),
	array('label'=>'修改用户', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除用户', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除数据?')),
	array('label'=>'用户管理', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'salt',
		'email',
		'profile',
	),
)); ?>
