<?php
/* @var $this PhotoController */
/* @var $model Photo */

$this->breadcrumbs=array(
	'Photos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Photo', 'url'=>array('index')),
	array('label'=>'Manage Photo', 'url'=>array('admin')),
);
?>

<h1>Create Photo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>