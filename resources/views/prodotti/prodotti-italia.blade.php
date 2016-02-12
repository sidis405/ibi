@extends('layouts.master')
@section('content')
<!-- Page content -->
<div class="main-header prodotti">
  <div class="container">
    <div class="main-caption">
      <h1>Prodotti</h1>
    </div>
  </div>
</div>
<section class="content products-content">
  <div class="container">
    <div class="row">
      <div class="col-md-3 sidebar-wrapper">
        <div class="sidebar products-sidebar hidden-sm hidden-xs">
          <a class="btn btn-primary" href="/allegati/{{$listini['listino-ibi-italia']['allegato']}}" target="_blank">Scarica il listino in pdf</a>
          @include('prodotti.filtri.filtro_italia')
          <a href="benessere-del-paziente">
            <div class="benessere-del-paziente meteorismo">
              <h5>Meteorismo e Aerofagia ?</h5>
            </div></a>
          <a href="benessere-del-paziente">
            <div class="benessere-del-paziente fegato-grasso">
              <h5>Fegato grasso o Steatosi epatica ?</h5>
            </div></a>
            <a target="_blank" href="http://realsil.it" class="btn btn-primary">Visita il sito Realsil</a>
          </div>          
        </div>
        <div class="col-md-9">
          @include("prodotti.tabs", array('active' => 'prodotti-italia'))
          <div class="intro hidden-xs">
  
              @include('layouts.content', array('key' => 'intro_prodotti_ibi_italia', 'permesso'=> 'modifica_ibi_italia'))
             <a href="/ibi-italia">Leggi di più</a>
          </div>
          <div class="filtri-mobile-btn visible-xs visible-sm btn">
            Filtri
          </div>
          <div class="filtri-mobile sidebar products-sidebar">
            @include('prodotti.filtri.filtro_italia')
          </div>
            @include('prodotti.partials.prodotti_italia_partial')

          <div class="benessere-mobile visible-xs">
            <a href="benessere-del-paziente">
            <div class="benessere-del-paziente meteorismo">
              <h5>Meteorismo e Aerofagia ?</h5>
            </div></a>
          <a href="benessere-del-paziente">
            <div class="benessere-del-paziente fegato-grasso">
              <h5>Fegato grasso o Steatosi epatica ?</h5>
            </div></a>
          <a style="width: 100%" target="_blank" href="http://realsil.it" class="btn btn-primary">Visita il sito Realsil</a>
          </div>

         </div>
        </div>
      </div>
    </section>
    @stop
    @section('footer_scripts')
    <script src="/js/prodotti_filter.js"></script>
    <script>
    var registri = [];
    registri['principi-ct-all'] = "<option value=''>Tutti</option> @foreach($principi  as $pa) @if(in_array($pa->slug, $principi_validi)) <option id='pa-{{$pa['slug']}}' value='.pa-{{$pa->slug}}'>{{ucfirst(strtolower($pa->nome))}}</option> @endif @endforeach";
    
    @foreach($categorie as $categoria)
    
    registri["principi-ct-{{$categoria->slug}}"] = "<option value=''>Tutti</option> @foreach($categoria->principi_attivi as $pa) @if(in_array($pa->slug, $principi_validi)) <option id='pa-{{$pa->slug}}' value='.pa-{{$pa->slug}}'>{{ucfirst(strtolower($pa->nome))}}</option> @endif @endforeach";
    @endforeach
    $('#filter--categorie').on('change', function() {
    var chiave = 'principi-' + $(this).find('option:selected').attr('id');
    // console.log(chiave);
    $('#filter--principi').html(registri[chiave]);
    mixIt();
    // console.log(registri[chiave]);
    // alert( $(this).find('option:selected').attr('id') ); // or $(this).val()
    });
    </script>
    @stop