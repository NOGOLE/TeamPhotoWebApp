<?php
/* @var $this SharedAlbumController */
/* @var $data SharedAlbum */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('album_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->album->name), array('/userAlbum/view','id'=>$data->album_id)); ?>
	<br />
<?php echo CHtml::button('Add Photos',array('submit'=>'../photo/create/?'.$data->album_id)); ?>
        <br />


</div>
