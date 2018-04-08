<?php
/**
 * Template part for displaying pages on front page
 *
 * @package WordPress
 * @subpackage Guo_Yunhe_2
 * @since 1.0
 * @version 1.0
 */

global $guoyunhe2counter;

?>

<article id="panel<?php echo $guoyunhe2counter; ?>" <?php post_class( 'panel ' ); ?> >

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		?>

		<div class="panel-image">
			<img src="<?php echo esc_url( $thumbnail[0] ); ?>" width="1200" height="600" alt="Panel image" />
		</div>

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap">
			<header class="entry-header">
				<?php
				 	if ( get_the_ID() !== (int) get_option( 'page_for_posts' )  ) {
						the_title( '<h2 class="entry-title">', '</h2>' );
					 }
				?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

			<?php
			// Show recent blog posts if is blog posts page (Note that get_option returns a string, so we're casting the result as an int).
			if ( get_the_ID() === (int) get_option( 'page_for_posts' )  ) : ?>

				<?php // Show four most recent posts.
				$recent_posts = new WP_Query( array(
					'posts_per_page'      => 3,
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
					'no_found_rows'       => true,
				) );
				?>

		 		<?php if ( $recent_posts->have_posts() ) : ?>

					<div class="recent-posts">

						<?php
						while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
							get_template_part( 'template-parts/post/content', 'excerpt' );
						endwhile;
						wp_reset_postdata();
						?>
					</div><!-- .recent-posts -->
				<?php endif; ?>
			<?php endif; ?>

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
