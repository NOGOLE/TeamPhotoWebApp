<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About Team Photo</h1>

<p class="about">
<?php 
$this->widget('zii.widgets.jui.CJuiAccordion', array(
'panels' => array(
'What is Team Photo?' => 'Team Photo is a cloud based photo storage and sharing application.',
'How do I get started?' => 'Currently the app is being developed, thus only a select few can access the app for testing purposes. If you are 
interested in testing, navigate over to the Contact page.',
'Does it cost?' => 'Like all NOGOLE apps, Team Photo is free.',
),
'options' => array(
'animated' =>'bounceSlide',
),
));
?>
</p>
