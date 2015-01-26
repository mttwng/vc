$('a').click(function() {
  $('html, body').animate({
      scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 500);
  return false;
});

$('img').click(function() {
  $('html, body').animate({
      scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 500);
  return false;
});

var controller = new ScrollMagic();

// jQuery for Parallax Scrolling
// $('.screen-fit').parallax({imageSrc: "../images/bg.jpg"});

$(document).ready(function(){

        $(window).scroll(function() {
          if ($(window).scrollTop() + $(window).height() >= $('#end-transparent').offset().top) {
    				$('.navbar-inverse').removeClass('navbar-active');
    			} else if ($(window).scrollTop() + $(window).height() < $('#end-transparent').offset().top) {
    				$('.navbar-inverse').addClass('navbar-active');
    			}

     	}); // end window scroll
}); // close out script

$(document).ready(

    function() {

    if ($(window).width() > 500) {
        var left1 = TweenMax.to("#left-bar-1", 0.5, {transform: "translateX(0)"});
        var right1 = new TimelineMax()
            .add(TweenMax.to("#right-bar-1", 0.01, {display: "inline"}))
            .add(TweenMax.to("#right-bar-1", 0.5, {transform: "translateX(0)"}));
        var left2 = TweenMax.to("#left-bar-2", 0.5, {transform: "translateX(0)"});

        // build scene
        var scene = new ScrollScene({triggerElement: "#trigger1"})
                .setTween(left1)
                .addTo(controller);

        var scene = new ScrollScene({triggerElement: "#trigger2"})
                .setTween(right1)
                .addTo(controller);

        var scene = new ScrollScene({triggerElement: "#trigger3"})
                .setTween(left2)
                .addTo(controller);
      }

    // scene.addIndicators();

});
/* Create HTML5 element for IE */
document.createElement("section");
// 