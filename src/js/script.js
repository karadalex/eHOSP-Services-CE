$(document).ready(function() {

	$("#toggleMenu").on('click', function() {
		$(".shadow").toggleClass('shadow-show');
		$("#mobile").toggle('slide', {direction: "right"}, 400);
	});

	$("#menuOut").on('click', function() {
		$("#mobile").toggle('slide', {direction: "right"}, 400);
		$(".shadow").toggleClass('shadow-show');
	});

	$(".shadow").on('click', function() {
		$(".shadow").toggleClass('shadow-show');
		$("#mobile").toggle('slide', {direction: "right"}, 400);
	});

});
