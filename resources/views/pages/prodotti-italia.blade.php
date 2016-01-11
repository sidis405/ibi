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
          <a class="btn btn-primary" href="/allegati/{{$listini['listino-ibi-italia']['allegato']}}" target="_blank">Scarica il listino in pdf</a>
@include('prodotti.filtro')

<a href="benessere-del-paziente">
<div class="benessere-paziente">
  <h5>Fegato grasso o Steatosi epatica ?</h5>
</div></a><a href="benessere-del-paziente">
<div class="benessere-paziente">
  <h5>Meteorismo e Aerofagia ?</h5>
</div></a>
</div>
</div>
<div class="col-md-9">
<div class="row filtri">
<div class="col-sm-4 no-pad">
  <div class="filtri-img"><a href="prodotti-export">              <img src="/img/ibi-export-logo.jpg" alt="" class="img-responsive"></a></div>
</div>
<div class="col-sm-4 no-pad">
  <div class="filtri-img">            <a href="prodotti-ibisqus">               <img src="/img/ibisqus-ospedale-logo.jpg" alt="" class="img-responsive"></a></div>
</div>
<div class="col-sm-4 no-pad">
  <div class="filtri-img active">       <a href="prodotti-italia">                  <img src="/img/ibi-italia-logo.jpg" alt="" class="img-responsive"></a></div>
</div>
</div>
<div id="prodotti-container" class="row prodotti-italia">
@foreach($prodotti as $prodotto)
<div class="col-lg-6 col-md-12 mix ct-{{$prodotto->categoria_terapeutica->slug}} pa-{{$prodotto->principio_attivo->slug}} {{str_slug($prodotto->nome)}} {{strtolower($prodotto->aic)}} {{strtolower($prodotto->atc)}}">
  <div class="product">
    <div class="product-title">
      <h2>{{$prodotto->nome}}</h2>
      <div class="plus-minus"></div>
    </div>
    <div class="formulazione">
      <h5>Formulazione</h5><span>{{$prodotto->formulazione}}</span>
    </div>
    <ul class="product-content">
      <li>
        <h5>{{ucfirst(strtolower($prodotto->principio_attivo->nome))}}</h5>
      </li>
      <li>
        <h5>Foglietto illustrativo</h5>
        @permessoibi('scarica_allegati')
        <a href="/prodotti/allegati/{{$prodotto->foglietto_illustrativo}}" target="_blank"><i class="fa fa-download"></i></a>
        @else
        <i class="fa fa-download login-tooltip" data-toggle="tooltip" data-placement="top" title="Devi essere registrato per visualizzare foglietti illustrativi"></i>
        @endpermessoibi
      </li>
      <li>
        <h5>Scheda tecnica</h5>
        @permessoibi('scarica_allegati')
        <a href="/prodotti/allegati/{{$prodotto->scheda_tecnica}}" target="_blank"><i class="fa fa-download"></i></a>
        @else
        <i class="fa fa-download login-tooltip" data-toggle="tooltip" data-placement="top" title="Devi essere registrato per visualizzare schede tecniche"></i>
        @endpermessoibi
      </li>
      <li>
        <h5>AIC</h5><span>{{$prodotto->aic}}</span>
      </li>
      <li>
        <h5>ATC</h5><span>{{$prodotto->atc}}</span>
      </li>
      <li>
        <h5>Fascia</h5><span>{{$prodotto->fascia->nome}}</span>
      </li>
      <li>
        <h5>Regime di dispensazione   </h5><span>{{$prodotto->regime_dispensazione}}</span>
      </li>
      <li>
        <h5>Validità mesi                 </h5><span>{{$prodotto->validita_mesi}}</span>
      </li>
      <li>
        <h5>{{$prodotto->categoria_terapeutica->nome}}</h5>
      </li>
    </ul>
  </div>
</div>
@endforeach
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

  registri['principi-ct-all'] = "<option value=''>Tutti</option> @foreach(array_pluck($categorie, 'principi_attivi')[0] as $pa) <option id='pa-{{$pa['slug']}}' value='.pa-{{$pa->slug}}'>{{ucfirst(strtolower($pa->nome))}}</option> @endforeach";
  
    @foreach($categorie as $categoria)
      
      registri["principi-ct-{{$categoria->slug}}"] = "<option value=''>Tutti</option> @foreach($categoria->principi_attivi as $pa) <option id='pa-{{$pa->slug}}' value='.pa-{{$pa->slug}}'>{{ucfirst(strtolower($pa->nome))}}</option> @endforeach";

    @endforeach

    $('#filter--categorie').on('change', function() {
      var chiave = 'principi-' + $(this).find('option:selected').attr('id');
      $('#filter--principi').html(registri[chiave]);
      mixIt();
      console.log(registri[chiave]);
  // alert( $(this).find('option:selected').attr('id') ); // or $(this).val()
    });

  </script>

  @stop
