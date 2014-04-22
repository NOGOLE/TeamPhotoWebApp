<?php
/* @var $this SharedAlbumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Shared Albums',
);

$this->menu=array(
	array('label'=>'Create SharedAlbum', 'url'=>array('create')),
	array('label'=>'Manage SharedAlbum', 'url'=>array('admin')),
);
?>

<h1>Shared Albums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
