<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户管理'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'创建用户', 'url'=>array('create')),
	array('label'=>'用户详细', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'用户管理', 'url'=>array('admin')),
);
?>

<h1>Update User <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>