<?php
/* @var $this PhotoController */
/* @var $model Photo */

$this->breadcrumbs=array(
	'Photos'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Photo', 'url'=>array('index')),
	array('label'=>'Create Photo', 'url'=>array('create')),
	array('label'=>'View Photo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Photo', 'url'=>array('admin')),
);
?>

<h1>Update Photo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>