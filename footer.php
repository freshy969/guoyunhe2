<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Guo_Yunhe_2
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="site-footer" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				if (
					is_active_sidebar( 'sidebar-1' ) ||
					is_active_sidebar( 'sidebar-2' ) ||
					is_active_sidebar( 'sidebar-3' ) ||
					is_active_sidebar( 'sidebar-4' )
				) :
				?>

					<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'guoyunhe2' ); ?>">
						<?php
						if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
							<div class="widget-column footer-widget-1">
								<?php dynamic_sidebar( 'sidebar-1' ); ?>
							</div>
						<?php }
						if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
							<div class="widget-column footer-widget-2">
								<?php dynamic_sidebar( 'sidebar-2' ); ?>
							</div>
						<?php } ?>
						<?php
						if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
							<div class="widget-column footer-widget-3">
								<?php dynamic_sidebar( 'sidebar-3' ); ?>
							</div>
						<?php }
						if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
							<div class="widget-column footer-widget-4">
								<?php dynamic_sidebar( 'sidebar-4' ); ?>
							</div>
						<?php } ?>
					</aside><!-- .widget-area -->

				<?php endif; ?>

				<hr />

				<?php if ( has_nav_menu( 'bottom' ) ) :
					/*
					 * Do not output anything contains "social", otherwise it
					 * will be blocked by AdBlock browser extensions
					 */
				?>
					<nav id="footer-links" class="footer-links" role="navigation" aria-label="<?php esc_attr_e( 'Footer links menu', 'guoyunhe2' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'bottom'
							) );
						?>
					</nav><!-- .footer-links -->
				<?php endif; ?>

				<div class="site-info">
					Copyright 2011&ndash;<?php echo date("Y"); ?> Guo Yunhe.
					Powered by <a href="https://wordpress.org/" target="_blank">WordPress</a>.
					Use <a href="https://github.com/guoyunhe/guoyunhe2">Guo Yunhe 2</a> theme.
				</div><!-- .site-info -->
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
