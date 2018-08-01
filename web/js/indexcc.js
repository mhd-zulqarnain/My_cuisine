$(document).ready(function() {
	
	$('.ingredient').click(function() {

		var totalNum = $('#total');
		var pressed = $(this).data('pressed');
		var currentCalories = +totalNum.html();
		
		if (pressed) {
			$(this).removeClass('clicked');
			var calories = $(this).data('calories');			
			+totalNum.html(currentCalories - calories);
			
		} else {
			$(this).addClass('clicked');
			var calories = $(this).data('calories');
			+totalNum.html(currentCalories + calories);
		}
		
		$(this).data("pressed", !pressed);

	});
	
});