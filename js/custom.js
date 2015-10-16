/*
// check if jQuery is loaded
window.onload = function() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}
*/
$(window).resize(function() {

	if ($(window).width() > 550) {
		if ($(".overflow-menu").css("display") == "block") {
			$(".overflow-menu").hide("slide", { direction: "up" }, 0);
		}
	}
});

$(document).ready(function() { // execute when web page is fully loaded

	// Show/hide the navbar if the navicon is clicked
	$(".overflow").click(function() {

		if ($(".overflow-menu").css("display") == "block") {
			showOverflowMenu(false);
		}
		else if ($('.overflow-menu').css("display") == "none") {
			showOverflowMenu(true);
		}

	});

	// adjust settings of flexslider
	$('.flexslider').flexslider({
		animation: "slide",
		prevText: "",
		nextText: ""

	});

	// modify margins of flexslider
	$('.flexslider').css('margin','10px');
	$('.flexslider').css('margin-left','10px');
	$('.flexslider').css('margin-right','10px');

	if ($(document).height() / $(window).height() >= 1.25) {
		$('.toTop').show();
	}

});


function showOverflowMenu(showOrHide){

	// Show navbar:
	// slide the navbar in from the top if viewing on mobile
	// from the left side otherwise
	if (showOrHide) {

		if ($(window).width() <= 550) { // if mobile size
			$(".overflow-menu").show("slide", { direction: "up" }, 200);
		}
	}

	// Hide navbar:
	// slide the navbar out through the top if viewing on mobile
	// to the left otherwise
	else { //if (!showOrHide) {

		if ($(window).width() <= 550) {
			$(".overflow-menu").hide("slide", { direction: "up" }, 200);
		}
	}
}


