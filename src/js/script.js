$(document).ready(function() {

	$("#toggleMenu").on('click', function() {
		$(".row ul li ul").toggle('slide', {direction: "right"}, 400);
	});

	$("#menuOut").on('click', function() {
		$(".row ul li ul").toggle('slide', {direction: "right"}, 400);
	});

});
