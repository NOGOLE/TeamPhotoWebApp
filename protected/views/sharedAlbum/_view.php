<?php
/* @var $this SharedAlbumController */
/* @var $data SharedAlbum */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('album_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->album->name), array('/userAlbum/view','id'=>$data->album_id)); ?>
	<br />


</div>
