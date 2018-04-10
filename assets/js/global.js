/**
 * Initialize all kinds of JavaScript libraries
 *
 * @author Guo Yunhe <guoyunhebrave@gmail.com>
 */

(function($) {
	if ("addEventListener" in document) {
		document.addEventListener(
			"DOMContentLoaded",
			function() {
				FastClick.attach(document.body);
			},
			false
		);
	}
})(jQuery);
