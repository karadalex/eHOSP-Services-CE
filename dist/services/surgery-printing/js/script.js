$(document).ready(function() {

	$("#toggleMenu").click(function() {
		$(".row ul li ul#menu").toggle('slide', {direction: 'right'}, 500);
	});

	$("#menuOut").click(function() {
		$(".row ul li ul#menu").toggle('slide', {direction: 'right'}, 500);
	});

});
