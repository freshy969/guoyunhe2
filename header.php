<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Guo_Yunhe_2
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

	<header id="site-header" class="site-header" role="banner" style="<?php
		if ( is_home() || is_front_page() ) {
			echo 'background-image: url(';
			if (header_image()) {
				echo header_image();
			} else {
				echo get_theme_file_uri( '/assets/images/header.jpg' );
			}
			echo ');';
		}
	?>">

		<nav id="site-navigation" class="site-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'guoyunhe2' ); ?>">

			<?php wp_nav_menu( array(
				'theme_location' => 'top',
			) ); ?>

		</nav><!-- #site-navigation -->

		<?php get_search_form(); ?>

		<div class="site-branding">

			<div class="wrap">

				<?php the_custom_logo(); ?>

				<div class="site-branding-text">
					<?php if ( is_front_page() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>

					<?php
					$description = get_bloginfo( 'description', 'display' );

					if ( $description || is_customize_preview() ) :
					?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding-text -->

			</div><!-- .wrap -->
		</div><!-- .site-branding -->

	</header><!-- #site-header -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! is_front_page() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'full' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
