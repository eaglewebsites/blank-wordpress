<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Title & Description-->
  	<title> <?php if ( is_home() ) { get_bloginfo( 'name' ); } else { wp_title('', true,''); } ?> </title>
  	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <!--favicon-->
  	<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/favicon.ico">
    <!--css-->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/custom.css" rel="stylesheet">
  </head>
  <body>
