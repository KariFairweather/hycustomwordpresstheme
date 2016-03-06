<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
      <div class="logo">
        <h1><?php bloginfo( 'name' ); ?></h1> 
      </div>
    </a>
    <nav>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </nav>
    <form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
      <input type="search" placeholder="   " title="Search..." name="s" id="s" >
      <i class="fa fa-search"></i>
    </form>
  </div> <!-- /.container -->
</header><!--/.header-->

