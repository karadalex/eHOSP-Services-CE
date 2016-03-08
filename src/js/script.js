$(document).ready(function() {

	$("#toggleMenu").click(function() {
		$(".row ul").toggle('slide', {direction: 'left'}, 500);
	});

	$("#menuOut").click(function() {
		$(".row ul").toggle('slide', {direction: 'left'}, 500);
	});

});