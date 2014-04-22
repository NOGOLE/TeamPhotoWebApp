<?php
/* @var $this SharedAlbumController */
/* @var $model SharedAlbum */

$this->breadcrumbs=array(
	'Shared Albums'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SharedAlbum', 'url'=>array('index')),
	array('label'=>'Manage SharedAlbum', 'url'=>array('admin')),
);
?>

<h1>Create SharedAlbum</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>