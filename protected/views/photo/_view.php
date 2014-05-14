<?php
/* @var $this PhotoController */
/* @var $data Photo */
?>

<div class="view">




	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upload_time')); ?>:</b>
	<?php echo CHtml::encode($data->upload_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uri')); ?>:</b>
	<?php
	$image = $data->name;//substr($data->uri, -15);
	 echo CHtml::image(Yii::app()->baseUrl.'/images/'.$image,''); ?>
	<br />


</div>
