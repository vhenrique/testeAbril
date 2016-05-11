$ = jQuery.noConflict();
$(document).ready(function(){
	$('.menuIcon').click(function(e){
		e.preventDefault();
		$(this).toggleClass('active');
		$('header .mainMenu .menu').toggleClass('active');
	})

	// Search
	$('.searchSubmit').click(function(e){
		e.preventDefault();
		$('header .mainSearch input[type="text"]').toggleClass('active');
	})
});