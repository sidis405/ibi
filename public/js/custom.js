$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})




$(document).ready(function() {
  $('.product .plus-minus').on('click',  function(event) {    
    event.preventDefault()
    $(this).toggleClass('minus');
    $(this).closest('.product').find('.product-content').slideToggle();
  });
});


function openAreaRiservataModal()
{
  console.log('opening modal');
  $('#area-riservata-modal').addClass('mfp-hide');
   

    $.magnificPopup.open({
      
      items: {src: '#area-riservata-modal'},
      type:'inline',
      mainClass: 'mfp-fade'
    });

}

if (window.location.href.indexOf("login=true") != -1)
{
  openAreaRiservataModal();
}