$(document).ready(function() {

	$(".navbar-menu").on('click', function() {
		$(".shadow").toggleClass('shadow-show');
		$("#navbar-mobile-only").toggle('slide', {direction: "right"}, 400);
	});

	$("#navbar-mobile-only img").on('click', function() {
		$("#navbar-mobile-only").toggle('slide', {direction: "right"}, 400);
		$(".shadow").toggleClass('shadow-show');
	});

	$(".shadow").on('click', function() {
		$(".shadow").toggleClass('shadow-show');
		$("#navbar-mobile-only").toggle('slide', {direction: "right"}, 400);
	});

});
