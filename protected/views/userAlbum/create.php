<?php
/* @var $this UserAlbumController */
/* @var $model UserAlbum */

$this->breadcrumbs=array(
	'User Albums'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserAlbum', 'url'=>array('index')),
	array('label'=>'Manage UserAlbum', 'url'=>array('admin')),
);
?>

<h1>Create New Album</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
