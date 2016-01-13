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

$(function(){

  // Instantiate MixItUp:

  $('#prodotti-container').mixItUp();

});


/*
-------------------------
SIDEBAR
-------------------------
*/

if ($(window).width() > 767) {
  $(window).load(function() {
    animateSidebar();
  });

  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    animateSidebar();
  })

};



function animateSidebar(){
    $(function() {
        var offset = $(".sidebar").offset();
        var footerOffset = $("footer").offset();
        var mbPos = footerOffset.top-30; /*30px extra space*/
        var topPadding = 15;
        $(window).scroll(function() {
            if ($(window).scrollTop() > offset.top-20 ) {
                if($(window).scrollTop() < mbPos - $(".sidebar").height()) {
                    $(".sidebar").stop().animate({
                       marginTop: $(window).scrollTop() - offset.top + topPadding
                    });
                }
            }
            else {
                $(".sidebar").stop().animate({
                    marginTop: 0
                });
            };
        });
    });
}

/*
-------------------------
PRODUCT READ MORE
-------------------------
*/

$(document).ready(function() {
  $('.product .read-more').on('click',  function(event) {    
    event.preventDefault()
    var text = $(this).text()
    $(this).text(text == "Chiudi" ? "Vedi tutto" : "Chiudi");
    $(this).closest('.product').find('li.more').slideToggle();
  });
});

$(document).ready(function() {
  $('.product .plus-minus').on('click',  function(event) {    
    event.preventDefault()
    $(this).toggleClass('minus');
    $(this).closest('.product').find('.product-content').slideToggle();
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
