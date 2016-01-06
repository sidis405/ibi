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
          <div class="btn btn-primary">Scarica il listino in pdf</div>
          <div class="filter-content">
            <h3>Filtri</h3>
            <div class="filter-block"><span>Nazione</span>
            <select name="cars">
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="fiat">Fiat</option>
              <option value="audi">Audi</option>
            </select>
          </div>
          <div class="filter-block"><span>Nazione</span>
          <select name="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
          </select>
        </div>
        <div class="filter-block"><span>Nazione</span>
        <select name="cars">
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="fiat">Fiat</option>
          <option value="audi">Audi</option>
        </select>
      </div>
      <div class="filter-block"><span>Nazione</span>
      <select name="cars">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="fiat">Fiat</option>
        <option value="audi">Audi</option>
      </select>
    </div>
    <div class="filter-block"><span>Nazione</span>
    <select name="cars">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
    </select>
  </div>
  <div class="btn btn-pirmary">Filtra</div>
</div>
</div>
</div>
<div class="col-md-9">
<div class="row filtri">
<div class="col-sm-4 no-pad">
  <div class="filtri-img active"><a href="prodotti-export">             <img src="/img/ibi-export-logo.jpg" alt="" class="img-responsive"></a></div>
</div>
<div class="col-sm-4 no-pad">
  <div class="filtri-img">            <a href="prodotti-ibisqus">               <img src="/img/ibisqus-ospedale-logo.jpg" alt="" class="img-responsive"></a></div>
</div>
<div class="col-sm-4 no-pad">
  <div class="filtri-img">            <a href="prodotti-italia">                  <img src="/img/ibi-italia-logo.jpg" alt="" class="img-responsive"></a></div>
</div>
</div>
<div id="prodotti-container" class="row prodotti-export">
<div class="col-lg-6 col-md-12 mix">
  <div class="product">
    <div class="product-title">
      <h2>Acido zoledronico ibigen liofilizzato</h2>
      <div class="plus-minus"></div>
    </div>
    <ul class="product-content">
      <li>
        <h5>Principio attivo</h5><span>Acido Zoledronico - Anidro</span>
      </li>
      <li>
        <h5>Formulazione</h5><span>750 mg IM/EV 1 flac. da 20 ml + solv. 1,6 ml</span>
      </li>
      <li>
        <h5>Foglietto illustrativo</h5>
        @permessoibi('scarica_allegati')
        <i class="fa fa-download">       </i>
        @endpermessoibi
      </li>
      <li>
        <h5>Scheda tecnica</h5><i class="fa fa-download"></i>
      </li>
      <li>
        <h5>AIC</h5>
      </li>
      <li>
        <h5>ATC</h5>
      </li>
      <li>
        <h5>Fascia</h5>
      </li>
      <li>
        <h5>Validità mesi</h5>
      </li>
      <li>
        <h5>Unità </h5>
      </li>
    </ul>
  </div>
</div>
<div class="col-lg-6 col-md-12 mix">
  <div class="product">
    <div class="product-title">
      <h2>Acido zoledronico ibigen liofilizzato</h2>
      <div class="plus-minus"></div>
    </div>
    <ul class="product-content">
      <li>
        <h5>Principio attivo</h5><span>Acido Zoledronico - Anidro</span>
      </li>
      <li>
        <h5>Formulazione</h5><span>750 mg IM/EV 1 flac. da 20 ml + solv. 1,6 ml</span>
      </li>
      <li>
        <h5>Foglietto illustrativo</h5><i class="fa fa-download">       </i>
      </li>
      <li>
        <h5>Scheda tecnica</h5><i class="fa fa-download"></i>
      </li>
      <li>
        <h5>AIC</h5>
      </li>
      <li>
        <h5>ATC</h5>
      </li>
      <li>
        <h5>Fascia</h5>
      </li>
      <li>
        <h5>Validità mesi</h5>
      </li>
      <li>
        <h5>Unità</h5>
      </li>
    </ul>
  </div>
</div>
<div class="col-lg-6 col-md-12 mix">
  <div class="product">
    <div class="product-title">
      <h2>Acido zoledronico ibigen liofilizzato</h2>
      <div class="plus-minus"></div>
    </div>
    <ul class="product-content">
      <li>
        <h5>Principio attivo</h5><span>Acido Zoledronico - Anidro</span>
      </li>
      <li>
        <h5>Formulazione</h5><span>750 mg IM/EV 1 flac. da 20 ml + solv. 1,6 ml</span>
      </li>
      <li>
        <h5>Foglietto illustrativo</h5><i class="fa fa-download">       </i>
      </li>
      <li>
        <h5>Scheda tecnica</h5><i class="fa fa-download"></i>
      </li>
      <li>
        <h5>AIC</h5>
      </li>
      <li>
        <h5>ATC</h5>
      </li>
      <li>
        <h5>Fascia</h5>
      </li>
      <li>
        <h5>Validità mesi</h5>
      </li>
      <li>
        <h5>Unità </h5>
      </li>
    </ul>
  </div>
</div>
<div class="col-lg-6 col-md-12 mix">
  <div class="product">
    <div class="product-title">
      <h2>Acido zoledronico ibigen liofilizzato</h2>
      <div class="plus-minus"></div>
    </div>
    <ul class="product-content">
      <li>
        <h5>Principio attivo</h5><span>Acido Zoledronico - Anidro</span>
      </li>
      <li>
        <h5>Formulazione</h5><span>750 mg IM/EV 1 flac. da 20 ml + solv. 1,6 ml</span>
      </li>
      <li>
        <h5>Foglietto illustrativo</h5><i class="fa fa-download">       </i>
      </li>
      <li>
        <h5>Scheda tecnica</h5><i class="fa fa-download"></i>
      </li>
      <li>
        <h5>AIC</h5>
      </li>
      <li>
        <h5>ATC</h5>
      </li>
      <li>
        <h5>Fascia</h5>
      </li>
      <li>
        <h5>Validità mesi</h5>
      </li>
      <li>
        <h5>Unità </h5>
      </li>
    </ul>
  </div>
</div>
<div class="col-lg-6 col-md-12 mix">
  <div class="product">
    <div class="product-title">
      <h2>Acido zoledronico ibigen liofilizzato</h2>
      <div class="plus-minus"></div>
    </div>
    <ul class="product-content">
      <li>
        <h5>Principio attivo</h5><span>Acido Zoledronico - Anidro</span>
      </li>
      <li>
        <h5>Formulazione</h5><span>750 mg IM/EV 1 flac. da 20 ml + solv. 1,6 ml</span>
      </li>
      <li>
        <h5>Foglietto illustrativo</h5><i class="fa fa-download">       </i>
      </li>
      <li>
        <h5>Scheda tecnica</h5><i class="fa fa-download"></i>
      </li>
      <li>
        <h5>AIC</h5>
      </li>
      <li>
        <h5>ATC</h5>
      </li>
      <li>
        <h5>Fascia</h5>
      </li>
      <li>
        <h5>Validità mesi</h5>
      </li>
      <li>
        <h5>Unità </h5>
      </li>
    </ul>
  </div>
</div>
<div class="col-lg-6 col-md-12 mix">
  <div class="product">
    <div class="product-title">
      <h2>Acido zoledronico ibigen liofilizzato</h2>
      <div class="plus-minus"></div>
    </div>
    <ul class="product-content">
      <li>
        <h5>Principio attivo</h5><span>Acido Zoledronico - Anidro</span>
      </li>
      <li>
        <h5>Formulazione</h5><span>750 mg IM/EV 1 flac. da 20 ml + solv. 1,6 ml</span>
      </li>
      <li>
        <h5>Foglietto illustrativo                    </h5>
      </li>
      <li>
        <h5>Scheda tecnica</h5>
      </li>
      <li>
        <h5>AIC</h5>
      </li>
      <li>
        <h5>ATC</h5>
      </li>
      <li>
        <h5>Fascia</h5>
      </li>
      <li>
        <h5>Validità mesi</h5>
      </li>
      <li>
        <h5>Unità </h5>
      </li>
    </ul>
  </div>
</div>
<div class="col-lg-6 col-md-12 mix">
  <div class="product">
    <div class="product-title">
      <h2>Acido zoledronico ibigen liofilizzato</h2>
      <div class="plus-minus"></div>
    </div>
    <ul class="product-content">
      <li>
        <h5>Principio attivo</h5><span>Acido Zoledronico - Anidro</span>
      </li>
      <li>
        <h5>Formulazione</h5><span>750 mg IM/EV 1 flac. da 20 ml + solv. 1,6 ml</span>
      </li>
      <li>
        <h5>Foglietto illustrativo                    </h5>
      </li>
      <li>
        <h5>Scheda tecnica</h5>
      </li>
      <li>
        <h5>AIC</h5>
      </li>
      <li>
        <h5>ATC</h5>
      </li>
      <li>
        <h5>Fascia</h5>
      </li>
      <li>
        <h5>Validità mesi</h5>
      </li>
      <li>
        <h5>Unità </h5>
      </li>
    </ul>
  </div>
</div>
<div class="col-lg-6 col-md-12 mix">
  <div class="product">
    <div class="product-title">
      <h2>Acido zoledronico ibigen liofilizzato</h2>
      <div class="plus-minus"></div>
    </div>
    <ul class="product-content">
      <li>
        <h5>Principio attivo</h5><span>Acido Zoledronico - Anidro</span>
      </li>
      <li>
        <h5>Formulazione</h5><span>750 mg IM/EV 1 flac. da 20 ml + solv. 1,6 ml</span>
      </li>
      <li>
        <h5>Foglietto illustrativo                    </h5>
      </li>
      <li>
        <h5>Scheda tecnica</h5>
      </li>
      <li>
        <h5>AIC</h5>
      </li>
      <li>
        <h5>ATC</h5>
      </li>
      <li>
        <h5>Fascia</h5>
      </li>
      <li>
        <h5>Validità mesi</h5>
      </li>
      <li>
        <h5>Unità                           </h5>
      </li>
    </ul>
  </div>
</div>
</div>
</div>
</div>
</div>
</section>
@stop