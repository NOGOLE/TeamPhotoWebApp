<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<p>
The second app brought to you by <a href = "http://www.nogole.com">NOGOLE LLC.</a> Team Photo allows users to: 
<ul>
<li>back up photos for later use via albums</li>
<li>invite others to view your albums via their telephone number</li>
<li>add photos to albums that you are shared with</li>
</ul>
</p>

<p>
Currently this app is being developed, feel free to watch our development on <a href = "https://www.github.com/NOGOLE/TeamPhotoWebapp">GitHub</a>. Alternatively, if you want to be notified when the app is ready to go into the beta stage phase, please navigate <?php
echo CHtml::link("Here", array('site/contact')); ?>.
</p>

<p>
In the meantime, please follow us on <?php echo CHtml::link("Twitter", "https://www.twitter.com/nogoleky"); ?>, and like us on <?php echo CHtml::link("Facebook", "https://www.facebook.com/nogole"); ?>!
</p>
