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
      <div class="col-md-3">
        <div class="sidebar products-sidebar">
          <a class="btn btn-primary" href="/allegati/{{$listini['listino-ibisqus-ospedale']['allegato']}}" target="_blank">Scarica il listino in pdf</a>
          @include('prodotti.filtri.filtro_ibisqus')

          <div class="sezioni-ibisqus-side">
              <a href="/prodotti-ibisqus-italia" class="btn btn-primary active">Italia</a>
              <a href="/prodotti-ibisqus-germania" class="btn btn-primary">Germania</a>
              <a href="/prodotti-ibisqus-regno-unito" class="btn btn-primary">Regno Unito</a>
          </div>
  
          </div>
        </div>
        <div class="col-md-9">
          @include("prodotti.tabs", array('active' => 'prodotti-ibisqus'))
          <div class="intro">
         
              @include('layouts.content', array('key' => 'intro_prodotti_ibisqus', 'permesso'=> 'modifica_ibisqus'))
             <a href="/ibi-ibisqus" class="btn btn-primary">Leggi di più</a>
            </div>
            @include('prodotti.partials.prodotti_ibisqus_partial')
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