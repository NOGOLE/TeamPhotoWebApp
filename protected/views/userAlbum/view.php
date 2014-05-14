<?php
/* @var $this UserAlbumController */
/* @var $model UserAlbum */

$this->breadcrumbs=array(
	'User Albums'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List UserAlbum', 'url'=>array('index')),
	array('label'=>'Create UserAlbum', 'url'=>array('create')),
	array('label'=>'Update UserAlbum', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserAlbum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserAlbum', 'url'=>array('admin')),
);
?>

<h1>View <?php echo $model->user->name;?>'s Album <?php echo $model->name; ?> </h1>
<?php $photos = $model->photos;
$images_path = realpath(Yii::getPathOfAlias('webroot.images'));

foreach($photos as $photo)

{
echo CHtml::image($images_path.'/'.$photo->uri,'heart');
}

?>
<?php 
 ?>
