<?php
/* @var $this UserAlbumController */
/* @var $model UserAlbum */

$this->breadcrumbs=array(
	'User Albums'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserAlbum', 'url'=>array('index')),
	array('label'=>'Create UserAlbum', 'url'=>array('create')),
	array('label'=>'View UserAlbum', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserAlbum', 'url'=>array('admin')),
);
?>

<h1>Update Album <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
