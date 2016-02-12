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
-------------------------
NEWS CAROUSEL
-------------------------
*/
$(document).ready(function() {
    
    $('.news-container').slick({      
      slidesToShow: 2,        
      arrows: false,
      infinite: true,
      autoplay: true,
      vertical: true,
      verticalSwiping: true,
      slidesToScroll: 1,
      responsive: [      
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1            
          }
        }       
      ]
    });
    
});


$(document).ready(function() {
    
    $('.hero-box-mobile').slick({      
      slidesToShow: 1,        
      arrows: false,
      infinite: true,                
      slidesToScroll: 1
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
});

if (location.hash) {
  setTimeout(function() {

    window.scrollTo(0, 0);
  }, 1);
}



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
 jQuery('.sidebar-wrapper').theiaStickySidebar({
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
  $('.filtri-mobile-btn').on('click', function(event) {
    $('.filtri-mobile').slideToggle()    
  });
});

$(document).ready(function() {
  $('.product-title').on('click',  function(event) {    
    event.preventDefault()
    $(this).closest('.product').find('.product-title .plus-minus').toggleClass('minus');

    if($(this).closest('.product').find('.formulazione-title').css('display') == 'none')
    {
      $(this).closest('.product').find('.formulazione-title').slideDown();  
    }else{
      
      $(this).closest('.product').find('.formulazione-title').slideUp();  
      $(this).closest('.product').find('.formulazione-content').slideUp();
    }
    
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

// $(document).ready(function() {
//   $('.formulazione-title').on('click', function(event) {    
//     $(this).find('i').toggleClass('caret-rotation');
//   });
// });

/*
-------------------------
TOOLTIP INIT
-------------------------
*/

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

/*
-------------------------
CONTACTS MAP CHANGE ON CLICK
-------------------------
*/

$(function() {
  $('#headingOne').on('click', function(event) {
    $('#maps').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2983.621283220953!2d12.616033927143896!3d41.59907506768937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1325976707d09bbb%3A0x62e00c106979d665!2sIstituto+Biochimico+Italiano+Giovanni+Lorenzini+Spa!5e0!3m2!1sit!2sit!4v1453302971988');
  });
  $('#headingTwo').on('click', function(event) {
    $('#maps').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2584.108973609997!2d8.618553613840579!3d49.63340070974752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4797d75c2d384b15%3A0xff55920313ca8ffb!2sDonnersbergstra%C3%9Fe+6%2C+64646+Heppenheim+(Bergstra%C3%9Fe)%2C+Germania!5e0!3m2!1sit!2sit!4v1453730423059');
  });
  $('#headingThree').on('click', function(event) {
    $('#maps').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2404.7475933605892!2d-3.0381851418928334!3d52.93497001213872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487ab9e580147bf7%3A0x7fe9d57e4c8d5168!2sBowmed+Ibisqus+Ltd!5e0!3m2!1sit!2sit!4v1453730861667');
  });
});

$('.lingua-btn').click(function(e){

  e.preventDefault();

  var url = $(this).data('url');

  cambiaLingua(url);

});


function cambiaLingua (url) {

    $.ajax({
        url: url,
        type: 'GET',
        success: function(data) {

            location.reload();

            return false;
        },
        error: function(XMLHttpRequest, textstatus, error) {

            return false;

        }
    });

    return false;

}