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