/*
-------------------------
CAROUSEL
-------------------------
*/
$(document).ready(function() {
    
    $('.main-carousel').slick({
      infinite: true,
      slidesToShow: 1,
      autoplay: true,    
      arrows: false   
    });
    
});

/*
-------------------------------------
MAGNIFIC-POPUP
-------------------------------------
*/

$('#area-riservata-modal').addClass('mfp-hide');
$(document).ready(function() {
  $('.open-area-riservata-modal').magnificPopup({
    type:'inline',
    midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    mainClass: 'mfp-fade'
  });
});


/*
-------------------------------------
ACCORDION ANIMATION
-------------------------------------
*/

$(document).ready(function() {
  $('.panel').on('show.bs.collapse', function () {
    $(this).find('.plus-minus').addClass('minus');
    $(this).find('.caret').addClass('caret-rotate');
  })
  $('.panel').on('hide.bs.collapse', function () {
    $(this).find('.plus-minus').removeClass('minus');
    $(this).find('.caret').removeClass('caret-rotate');
  })
});

/*
-------------------------------------
JAVASCRIPT TO ENABLE LINK TO A TAB
-------------------------------------
*/
var url = document.location.toString();
if (url.match('#')) {
    $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;    
} 

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
    window.scrollTo(0, 0);
})

/*
-------------------------
MIXITUP
-------------------------
*/

// $(function(){

//   // Instantiate MixItUp:

//   $('#prodotti-container').mixItUp();

// });

/*
-------------------------
BACK TO TOP
-------------------------
*/

if ($('#back-to-top').length) {
    var scrollTrigger = 200, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}


/*
-------------------------
SIDEBAR
-------------------------
*/
jQuery(document).ready(function() {
   jQuery('.col-md-4').theiaStickySidebar({
      // Settings
      additionalMarginTop: 20
    });
  });
/*
-------------------------
PRODUCT
-------------------------
*/


$(document).ready(function() {
  $('.product-title').on('click',  function(event) {    
    event.preventDefault()
    $(this).closest('.product').find('.product-title .plus-minus').toggleClass('minus');

    $(this).closest('.product').find('.formulazione-title').slideToggle();    
    
  });
});

$(document).ready(function() {
  $('.formulazione-title').on('click',  function(event) {    
    event.preventDefault()    
    $('.formulazione-content').not(this).slideUp();

    if($(this).closest('.formulazione').find('.formulazione-content').css('display') == 'none')
    {

        $(this).closest('.formulazione').find('.formulazione-content').slideToggle();          
       
      
    }
    
  });
});

/*
-------------------------
TOOLTIP INIT
-------------------------
*/

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


//# sourceMappingURL=main.js.map

//# sourceMappingURL=main.js.map
