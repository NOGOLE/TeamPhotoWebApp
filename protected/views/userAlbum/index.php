<?php
/* @var $this UserAlbumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Albums',
);

$this->menu=array(
	array('label'=>'Create UserAlbum', 'url'=>array('create')),
	array('label'=>'Manage UserAlbum', 'url'=>array('admin')),
);
?>

<h1>User Albums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
