<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
	<?php if(is_front_page()) : ?>	
		<div class="above-the-fold__wrapper">
	<?php endif; ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="site-header-inner col-sm-4">

					<?php $header_image = get_header_image();
					if ( ! empty( $header_image ) ) { ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
						</a>
					<?php } // end if ( ! empty( $header_image ) ) ?>


					<div class="site-branding">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div>

				</div>
				<nav class="site-navigation">
					<div class="site-navigation-inner col-sm-8">
						<div class="navbar">
							<div class="navbar-header">
							<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
								<span class="sr-only">Toggle navigation</span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							</button>

							<!-- Your site title as branding in the menu -->
							<!--<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php // bloginfo( 'name' ); ?></a>-->
						  </div>

						<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
							'menu_class' => 'nav navbar-nav',
							'fallback_cb' => '',
							'menu_id' => 'main-menu',
							'walker' => new wp_bootstrap_navwalker()
						)
					); ?>

						</div><!-- .navbar -->
					</div>
				</nav><!-- .site-navigation -->
			</div>
		</div><!-- .container -->
	</header><!-- #masthead -->


	<?php if(is_front_page()) : ?>	
		<?php include(locate_template('partials/above-the-fold.php')); ?>
		</div> <!---atf wrapper -->
	<?php endif; ?>
	

<?php if (!is_front_page()) : ?>
	<div class="main-content">
		<div class="container">
			<div class="row">

				<div id="content" class="main-content-inner col-sm-12 col-md-8">
<?php endif;?>

