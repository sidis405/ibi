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
MIXITUP
-------------------------
*/

$(function(){

  // Instantiate MixItUp:

  $('#Container').mixItUp();

});


/*
-------------------------
SIDEBAR
-------------------------
*/

animateSidebar();

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  animateSidebar();
})

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
//# sourceMappingURL=main.js.map

//# sourceMappingURL=main.js.map
