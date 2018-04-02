/**
 * Header Styles and Interaction
 *
 * Change branding text color based on background image darkness.
 */

BackgroundCheck.init({
	targets: ".site-navigation, .site-branding-text, .menu-scroll-down",
	images: ".wp-custom-header img"
});

var $featuredImage = jQuery(".single-featured-image-header img");

if ($featuredImage.length) {
	$featuredImage.height(Math.max($featuredImage.width() * 0.3333, 300));
	jQuery(window).resize(function() {
		$featuredImage.height(Math.max($featuredImage.width() * 0.3333, 300));
	});
}
