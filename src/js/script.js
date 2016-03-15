$(document).ready(function() {

	$("#toggleMenu").click(function() {
		$(".row ul li ul").slideToggle('slide', {direction: 'right'}, 500);
	});

	$("#menuOut").click(function() {
		$(".row ul li ul").slideToggle('slide', {direction: 'left'}, 500);
	});

});
