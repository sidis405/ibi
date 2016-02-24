@extends('layouts.master')
@section('content')
<!-- Page content -->
<div class="main-header prodotti">
  <div class="container">
    <div class="main-caption">
      <h1>{{$text['prodotti']['prodotti']}}</h1>
    </div>
  </div>
</div>
<section class="content products-content">
  <div class="container">
    <div class="row">
      <div class="col-md-3 sidebar-wrapper">
        <div class="sidebar products-sidebar hidden-sm hidden-xs">
          @include('prodotti.filtri.filtro_ibisqus')
  
          </div>        
        </div>
       
        <div class="col-md-9">
          @include("prodotti.tabs", array('active' => 'prodotti-ibisqus'))
          <div class="intro hidden-xs hidden-sm">
         
              @include('layouts.content', array('key' => 'intro_prodotti_ibisqus', 'permesso'=> 'modifica_ibisqus'))
             <a href="/ibisqus-ospedale">{{$text['azioni']['leggi_tutto']}}</a>
            </div>
            <div class="row sezioni-ibisqus">
              <div class="col-md-4 col-sm-4 col-xs-12"><a href="/prodotti-ibisqus-italia" class="btn btn-primary">{{$text['prodotti']['italia']}}</a></div>
              <div class="col-md-4 col-sm-4 col-xs-12"><a href="/prodotti-ibisqus-germania" class="btn btn-primary">{{$text['prodotti']['germania']}}</a></div>
              <div class="col-md-4 col-sm-4 col-xs-12"><a href="/prodotti-ibisqus-regno-unito" class="btn btn-primary">{{$text['prodotti']['uk']}}</a></div>
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