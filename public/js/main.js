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

// $('.__blogNav--item a').on('hover', function() {
// 	$('.__blogNav--item a').css({'font-size': '1.25em'});
// });