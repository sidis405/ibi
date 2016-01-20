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
              <div class="filtri-img">
                <a href="prodotti-export">
                  <!-- <img src="/img/ibi-export-logo.jpg" alt="" class="img-responsive"> -->
                  Esportazioni
                </a>
              </div>
            </div>
            <div class="col-sm-4 no-pad">
              <div class="filtri-img">
                <a href="prodotti-ibisqus">
                  <!-- <img src="/img/ibisqus-ospedale-logo.jpg" alt="" class="img-responsive"> -->
                  Ospedale
                </a>
              </div>
            </div>
            <div class="col-sm-4 no-pad">
              <div class="filtri-img active">
                <a href="prodotti-italia">
                  <!-- <img src="/img/ibi-italia-logo.jpg" alt="" class="img-responsive"> -->
                  Farmacia
                </a>
              </div>
            </div>
          </div>
          <div class="intro">
<p>
            @include('layouts.content', array('key' => 'intro_prodotti_ibi_italia', 'permesso'=> 'modifica_ibi_italia'))
            <a href="/ibi-italia">Leggi di più</a></p>
            <br>
          </div>
          @include('prodotti.prodotti_italia_partial')
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