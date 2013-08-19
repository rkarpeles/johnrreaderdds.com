$(document).ready(function($) {

// Reponsive Nav Menu

	$('#toggle-nav').click(function () {
		var nav = $('.top-nav');
		if(nav.hasClass('showing')){
			 nav.removeClass('showing').addClass('hiding');
		}else{
			 nav.removeClass('hiding').addClass('showing');
		}
	 });

	$(window).resize(function(){
		var winwidth = $(window).innerWidth();
		if(winwidth > 900){
			$('.top-nav').removeClass('showing').removeClass('hiding');    
		}
	});

});