<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">

	<!-- Force IE to use the latest rendering engine available -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- If Site Icon isn't set in customizer -->
	<?php if ( !function_exists( 'has_site_icon' ) || !has_site_icon() ) { ?>
		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon"/>
		<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	<?php } ?>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>


	<?php get_template_part( 'parts/import-user-entered-site-colors' ); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header" role="banner">
	<div class="search-bar primary-background">
		<?php get_search_form(); ?>
	</div>
	<div class="site-logo">
		
		<?php echo start_site_logo(); ?>
		
	</div>
	<?php
	if ( get_bloginfo( 'description' ) ) :
		printf( '<div class="site-tagline centered-text">%s</div>',
			esc_html( get_bloginfo( 'description' ) )
		);
	endif;
	?>
	<div class="main-navigation">
		<div class="mobile-menu-toggle"><a href="#menu-main-navigation" id="toggle">Menu</a></div>
		<?php start_top_nav(); ?>
	</div>


</header> <!-- / .site-header -->
<div class="site-content">