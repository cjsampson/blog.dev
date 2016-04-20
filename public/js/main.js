setTimeout(function() {
	$('.alert').slideUp(900);
}, 500);

$('.slideToggle slideMenu').on('click', function(e) {
	e.preventDefault();
	$(this).parent().toggleClass('.slideMenu');
});