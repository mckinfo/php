<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
	<?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Classic Lutheria
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('normalize','cake.generic','foundation'));
                echo $this->Html->script(array('moderizr','jquery','foundation.mim','reveal'));
    ?>
</head>
<body>
	<div id="container">
		<div id="header">
			
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
                  
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>


 
</body>
</html>