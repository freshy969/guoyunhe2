/**
 * Header Styles and Interaction
 *
 * 1. Change the ratio of header image
 */

(function() {
	var $featuredImage = jQuery(".single-featured-image-header img");

	if ($featuredImage.length) {
		$featuredImage.height(Math.max($featuredImage.width() * 0.3333, 300));
		jQuery(window).resize(function() {
			$featuredImage.height(Math.max($featuredImage.width() * 0.3333, 300));
		});
	}
})();
