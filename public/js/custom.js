$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


// $('.login-tooltip').tooltip({placement: 'bottom',trigger: 'manual'}).tooltip('show');
// $('.login-tooltip').on('click',function(){$(this).tooltip('destroy');});

// $(function(){
//   var $filterCategoriaSelect = $('#filtro_categoria'),
//   		$filterPrincipioSelect = $('#filtro_principio'),
//       // $sortSelect = $('#SortSelect'),
//       $container = $('#prodotti-container');
  
//   $container.mixItUp();
  
//   $filterCategoriaSelect.on('change', function(){
//     $container.mixItUp('filter', this.value);
//   });

//   $filterPrincipioSelect.on('change', function(){
//     $container.mixItUp('filter', this.value);
//   });
  
//   var inputText;
//   var $matching = $();

//   // Delay function
//   var delay = (function(){
//     var timer = 0;
//     return function(callback, ms){
//       clearTimeout (timer);
//       timer = setTimeout(callback, ms);
//     };
//   })();

//   $("#cerca_prodotti").keyup(function(){
//     // Delay function invoked to make sure user stopped typing
//     delay(function(){
//       inputText = $("#cerca_prodotti").val().toLowerCase();
      
//       // Check to see if input field is empty

//       if ((inputText.length) > 0) {            
//         $( '.mix').each(function() {
//           $this = $("this");

//           // console.log($(this).children().find('.product-title').text().toLowerCase().match(inputText));
          
//            // add item to be filtered out if input text matches items inside the title   
//            if($(this).children().find('.product-title').text().toLowerCase().match(inputText)) {
//            // if($(this).children('.product-title').text().toLowerCase().match(inputText)) {
//             $matching = $matching.add(this);
//           }
//           else {
//             // removes any previously matched item
//             $matching = $matching.not(this);
//           }
//         });
//         $("#prodotti-container").mixItUp('filter', $matching);
//       }

//       else {
//         // resets the filter to show all item if input is empty
//         $("#prodotti-container").mixItUp('filter', 'all');
//       }
//     }, 200 );
//   });
// });

// $('.prodotti-filter-all').click(function(e)
// {
//   $("#cerca_prodotti").val('');
//   $('#filtro_categoria').prop('selectedIndex',0);
//   $('#filtro_principio').prop('selectedIndex',0);
// });
