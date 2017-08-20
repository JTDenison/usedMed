<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<title>UsedMed</title>
	<?php wp_head(); ?>

</head>
	<?php
	// body _class taks array of params body_class(array('class','class'))
	?>
<body <?php body_class(); ?>>
<?php wp_nav_menu(array('theme_location'=>'primary')); ?>