setTimeout(function() {
	$('.alert').slideUp(900);
}, 500);

$('#slideMenu #slideToggle').on('click', function(e) {
	e.preventDefault();
	$(this).parent().toggleClass('slideAlive');
});