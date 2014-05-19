<?php
/* @var $this PhotoController */
/* @var $data Photo */
?>

<div class="view">




	<b><?php echo CHtml::encode($data->getAttributeLabel('album')); ?>:</b>
	<?php echo CHtml::encode($data->album->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upload_time')); ?>:</b>
	<?php echo CHtml::encode(date('l jS \of F Y h:i:s A',$data->upload_time)); ?>
	<br />

	<?php
	$image = $data->name;//substr($data->uri, -15);
	 echo CHtml::image(Yii::app()->baseUrl.'/images/'.$image,'',array('width'=>150,'height'=>150)); ?>
	<br />


</div>
