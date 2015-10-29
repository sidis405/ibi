// Insert your JS here
$(document).ready(function() {
	$('#scene').parallax();
});

// Slick init

$('.opening-carousel').slick({
  dots: false,
  infinite: true,
  speed: 500,  
  cssEase: 'linear'
});

$('.partners').slick({
  dots: false,
  infinite: true,
  speed: 7000,
  autoplay: true,
  autoplaySpeed: -1,
  slidesToShow: 3,
  arrows: false,
  cssEase: 'linear',
  responsive: [
   {
     breakpoint: 767,
     settings: {
       slidesToShow: 1,
       slidesToScroll: 1,
       infinite: true       
     }
   }
   ]
});

$(document).ready(function() {
  $(window).scroll(function(){
    if ($(window).scrollTop() > $('h2.slogan').offset().top) {
      $('header').fadeIn(300)
    } else {
      $('header').fadeOut(300)
    }
  })
});

// Cache selectors
var lastId,
    topMenu = $("header"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
$('header a, .welcome-container a').click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight-60;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

$('.open-popup').magnificPopup({
  type:'inline',
  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
});