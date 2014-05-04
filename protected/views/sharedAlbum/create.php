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

<h1>Share Album</h1>
<h2>Enter the phone number of the user you would like to share this album with. They will instantly be added to the album!</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
