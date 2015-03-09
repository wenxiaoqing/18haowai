<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户管理'=>array('admin'),
	'Manager',
);

$this->menu=array(
	//array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'创建用户', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('高级收搜','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'password',
		'salt',
		'email',
		'profile',
		/*array(
			'class'=>'CButtonColumn',
		),*/
		array(
			'class'=>'CButtonColumn',
			'header'=>'操作', 
			'template' => '{view}{update}',
			'buttons' => array(   
					'view' => array(   
							'label'=>'查看',
							'url'=>'Yii::app()->controller->createUrl("view",array("id"=>$data->primaryKey))',  
							'options'=>array('style'=>'cursor:pointer;', 'target' => '_blank', 'class' => ''),  
					),
					'update' => array(   
							'label'=>'编辑',
							'url'=>'Yii::app()->controller->createUrl("update",array("id"=>$data->primaryKey))',  
							'options'=>array('style'=>'cursor:pointer;', 'target' => '_blank', 'class' => ''),
					),
			),
		),
		
		/*'pager'=>array(
			'class'=>'application.extensions.widgets.CCLinkPager',    
			'header' => '',
			'maxButtonCount' => '5', 
			'prevPageLabel' => '上一页',
			'nextPageLabel' => '下一页',
			'firstPageLabel' => '首页', 
			'lastPageLabel' => '尾页',
			'htmlOptions' => array('class' => 'pagination'),
		),*/
	),
	
)); ?>
<?php 
	//application.extensions.widgets.CCLinkPager
//	$this->widget('application.extensions.widgets.CCLinkPager',array('pages'=>$pages, 'header' => '', 'maxButtonCount' => '10', 
//						'prevPageLabel' => '上一页', 'nextPageLabel' => '下一页', 'firstPageLabel' => '首页', 
//						'lastPageLabel' => '尾页','htmlOptions' => array('class' => 'pagination')));
?>
