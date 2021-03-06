<?php
/* @var $this UserAlbumController */
/* @var $data UserAlbum */
?>

<div class="view">



	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>

	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->create_time,'short','short')); ?>
	<br />

        <?php echo CHtml::button('Share',array('submit'=>'../sharedAlbum/create/'.$data->id)); ?>
        <br />


  <?php echo CHtml::button('Add Photos',array('submit'=>'../photo/create/?'.$data->id)); ?>
        <br />

</div>
