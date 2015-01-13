$('a').click(function() {
  $('html, body').animate({
      scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 500);
  return false;
});

$(document).ready(function(){

    $('section[data-type="background"]').each(function(){
        $(window).scroll(function() {
          if ($(window).scrollTop() + $(window).height() >= $('#end-transparent').offset().top) {
				$('.navbar-inverse').removeClass('navbar-active');
			} else if ($(window).scrollTop() + $(window).height() < $('#end-transparent').offset().top) {
				$('.navbar-inverse').addClass('navbar-active');
			}

     	}); // end window scroll
     });  // end section function
}); // close out script

/* Create HTML5 element for IE */
document.createElement("section");
