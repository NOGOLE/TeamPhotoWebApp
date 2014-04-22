<?php
/* @var $this SharedAlbumController */
/* @var $model SharedAlbum */

$this->breadcrumbs=array(
	'Shared Albums'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SharedAlbum', 'url'=>array('index')),
	array('label'=>'Create SharedAlbum', 'url'=>array('create')),
	array('label'=>'View SharedAlbum', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SharedAlbum', 'url'=>array('admin')),
);
?>

<h1>Update SharedAlbum <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>