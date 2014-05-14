<?php
/* @var $this SharedAlbumController */
/* @var $model SharedAlbum */

$this->breadcrumbs=array(
	'Shared Albums'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SharedAlbum', 'url'=>array('index')),
	array('label'=>'Create SharedAlbum', 'url'=>array('create')),
	array('label'=>'Update SharedAlbum', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SharedAlbum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SharedAlbum', 'url'=>array('admin')),
);
?>

<h1>View <?php echo $model->album->name; ?> owned by <?php echo $model->album->user->name; ?> </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'album_id',
	),
)); ?>
