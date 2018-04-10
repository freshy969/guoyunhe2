(function($) {
	// Toggle buttons
	jQuery(".menu-toggle").click(() => {
		jQuery(".site-navigation").toggleClass("active");
		jQuery(".site-search").removeClass("active");
	});

	jQuery(".search-toggle").click(() => {
		jQuery(".site-search").toggleClass("active");
		jQuery(".site-navigation").removeClass("active");
	});

	// Scrolling behavior
	// Reference: http://www.html5rocks.com/en/tutorials/speed/animations/
	var adminbar = document.getElementById("wpadminbar");
	var header = document.getElementById("site-header");
	var mobileNavbar = document.getElementById("mobile-navbar");
	var mobileNavbarSiteTitle = document.getElementById(
		"mobile-navbar-site-title"
	);
	var siteNavigation = document.getElementById("site-navigation");
	var siteSearch = document.getElementById("site-search");
	var lastKnownScrollPosition = 0;
	var lastHeaderHeight = 0;
	var lastAdminbarHeight = 0;
	var ticking = false;

	function updateNavbar() {
		scrollPosition = window.scrollY;
		headerHeight = header.clientHeight;
		adminbarHeight = adminbar ? adminbar.clientHeight : 0;
		mobileNavbarTop = mobileNavbar.getBoundingClientRect().y;

		var opacity = Math.pow(scrollPosition / (headerHeight + adminbarHeight), 3);
		if (opacity > 1) {
			opacity = 1;
		} else if (opacity < 0) {
			opacity = 0;
		}
		mobileNavbar.style.background = "rgba(255,255,255," + opacity + ")";

		if (scrollPosition > headerHeight) {
			mobileNavbarSiteTitle.style.opacity = 1;
		} else {
			mobileNavbarSiteTitle.style.opacity = 0;
		}

		var top = "calc(3rem + " + mobileNavbarTop + "px)";
		siteNavigation.style.top = top;
		siteSearch.style.top = top;
	}

	updateNavbar();

	window.addEventListener("scroll", function(e) {
		if (!ticking) {
			window.requestAnimationFrame(function() {
				updateNavbar();
				ticking = false;
			});

			ticking = true;
		}
	});

	window.addEventListener("resize", function(e) {
		updateNavbar();
	});
})(jQuery);
