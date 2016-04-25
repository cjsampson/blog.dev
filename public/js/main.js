setTimeout(function() {
	$('.alert').slideUp(900);
}, 500);

$('.slideMenu .slideToggle').on('click', function(e) {
	e.preventDefault();
	$(this).parent().toggleClass('slideAlive');
});


$(function() {
	var $verticalNav = $('#verticalNav');
	$verticalNav.hide();
	$verticalNav.slideDown(800);
});