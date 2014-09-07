<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!doctype html>

<!--[if lt IE 7 ]>
<html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-morgandelaney-me" data-template-set="html5-reset-wordpress-theme">

  <meta charset="<?php bloginfo('charset'); ?>">

  <!-- Always force latest IE rendering engine (even in intranet) -->
  <!--[if IE ]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->

  <?php
  if (is_search())
    echo '<meta name="robots" content="noindex, nofollow" />';
  ?>

  <title><?php wp_title('|', true, 'right'); ?></title>

  <meta name="title" content="<?php wp_title('|', true, 'right'); ?>">
  <meta name="description" content="<?php bloginfo('description'); ?>"/>
  <meta name="author" content="Morgan Delaney"/>
  <meta name="Copyright"
        content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
  <meta name="viewport" content="width=1024 minimal-ui"/>
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/_/img/favicon.png"/>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"/>
  <script src="<?php echo get_template_directory_uri(); ?>/_/js/modernizr-2.8.0.dev.js"></script>
  <link rel="profile" href="http://gmpg.org/xfn/11"/>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> id="body">

  <div id="wrapper">