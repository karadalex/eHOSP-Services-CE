$(document).ready(function() {

	$("#toggleMenu").on('click', function() {
		$("#mobile").toggle('slide', {direction: "right"}, 400);
	});

	$("#menuOut").on('click', function() {
		$("#mobile").toggle('slide', {direction: "right"}, 400);
	});

});
