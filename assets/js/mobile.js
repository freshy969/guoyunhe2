(function($) {
	// Reference: http://www.html5rocks.com/en/tutorials/speed/animations/
	var mobileNavbar = document.getElementById("mobile-navbar");
	var mobileNavbarSiteTitle = document.getElementById(
		"mobile-navbar-site-title"
	);
	var lastKnownScrollPosition = 0;
	var lastWindowHeight = 0;
	var ticking = false;

	function updateNavbar(scrollPosition, windowHeight) {
		var opacity = Math.pow(scrollPosition / windowHeight, 3);
		if (opacity > 1) {
			opacity = 1;
		} else if (opacity < 0) {
			opacity = 0;
		}
		mobileNavbar.style.background = "rgba(255,255,255," + opacity + ")";

		if (scrollPosition > windowHeight) {
			mobileNavbarSiteTitle.style.opacity = 1;
		} else {
			mobileNavbarSiteTitle.style.opacity = 0;
		}
	}

	window.addEventListener("scroll", function(e) {
		lastKnownScrollPosition = window.scrollY;
		lastWindowHeight = window.innerHeight;

		if (!ticking) {
			window.requestAnimationFrame(function() {
				updateNavbar(lastKnownScrollPosition, lastWindowHeight);
				ticking = false;
			});

			ticking = true;
		}
	});
})(jQuery);
