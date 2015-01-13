jQuery(document).ready(function($) {

	$(".headroom").headroom({
		"tolerance": 10,
		"offset": 20,
		"classes": {
			"initial": "animated",
			"pinned": "slideDown",
			"unpinned": "slideUp"
		}
	});

});