$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


// $('.login-tooltip').tooltip({placement: 'bottom',trigger: 'manual'}).tooltip('show');
// $('.login-tooltip').on('click',function(){$(this).tooltip('destroy');});

$(function(){
  var $filterCategoriaSelect = $('#filtro_categoria'),
  		$filterPrincipioSelect = $('#filtro_principio'),
      // $sortSelect = $('#SortSelect'),
      $container = $('#prodotti-container');
  
  $container.mixItUp();
  
  $filterCategoriaSelect.on('change', function(){
    $container.mixItUp('filter', this.value);
  });

  $filterPrincipioSelect.on('change', function(){
    $container.mixItUp('filter', this.value);
  });
  
  // $sortSelect.on('change', function(){
  //   $container.mixItUp('sort', this.value);
  // });
});