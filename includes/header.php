<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="theme-color" content="<?php echo get_theme_mod('google_chrome_theme'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<div class="site-border hidden-sm hidden-md hidden-lg"></div>

<div class="header-image hidden-xs"></div>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed menu-item-toggle" data-toggle="collapse" data-target="#navbarLeft">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>
      <a class="navbar-left right10" href="<?php echo home_url('/'); ?>">
        <img class="menu-item-logo" src="<?php echo esc_url(get_theme_mod('menu_logo')); ?>" />
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarLeft">
      <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-left',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
  
<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar, 
then you probably don't require a site title. Alternatively you can use the example below. 
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
