/**
 * Header Styles and Interaction
 *
 * Change branding text color based on background image darkness.
 */

(function() {
	var $customHeaderImage = jQuery(".wp-custom-header img");

	if ($customHeaderImage.length) {
		BackgroundCheck.init({
			targets: ".site-navigation, .site-branding-text, .menu-scroll-down",
			images: "#site-header"
		});
	}

	var $featuredImage = jQuery(".single-featured-image-header img");

	if ($featuredImage.length) {
		$featuredImage.height(Math.max($featuredImage.width() * 0.3333, 300));
		jQuery(window).resize(function() {
			$featuredImage.height(Math.max($featuredImage.width() * 0.3333, 300));
		});
	}
})();
