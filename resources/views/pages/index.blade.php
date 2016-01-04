@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-carousel">
      <div class="slide slide1">
        <div class="container caption-container">
          <div class="caption">
            <h3>Ibi: 90 anni di esperienza</h3><span>Affidabilità di garanzia e alta qualità</span>
          </div>
        </div>
      </div>
      <div class="slide slide2">
        <div class="container caption-container">
          <div class="caption">
            <h3>Ricerca e innovazione</h3><span>All'avanguardia nella nanomedicina</span>
          </div>
        </div>
      </div>
    </div>
    <div class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box"><img src="/img/ibi-export-logo.jpg" alt="" class="img-responsive">
              {!!$contenuti['home_ibi_export_box']['testo']!!}
              <a href="ibi-export">
                  @permessoibi('modifica_export')
                    <a href="/admin/contenuti/{{$contenuti['home_ibi_export_box']['id']}}/modifica" target="_blank" class="pull-right">modifica</a>
                  @endpermessoibi
                <div class="btn btn-primary">Leggi tutto</div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box"><img src="/img/ibisqus-ospedale-logo.jpg" alt="" class="img-responsive">
              {!!$contenuti['home_ibisqus_ospedale_box']['testo']!!}
              <a href="ibisqus-ospedale">
              @permessoibi('modifica_ibisqus')
                <a href="/admin/contenuti/{{$contenuti['home_ibisqus_ospedale_box']['id']}}/modifica" target="_blank" class="pull-right">modifica</a>
              @endpermessoibi
                <div class="btn btn-primary">Leggi tutto</div></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box"><img src="/img/ibi-italia-logo.jpg" alt="" class="img-responsive">
              <p>L’Istituto Biochimico Italiano, Ibi, fondato dal Prof. Giovanni Lorenzini, è un’azienda farmaceutica di grande tradizione scientifica presente sul mercato italiano da più di 90 anni, con obiettivi di ricerca, innovazione e produzione.</p><a href="ibi-italia">
                <div class="btn btn-primary">Leggi tutto</div></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box"><img src="/img/ibi-toll-manufacturer-logo.jpg" alt="" class="img-responsive">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eveniet exercitationem possimus illo provident commodi corporis cumque odit ducimus veniam at quaerat, consectetur voluptate, sequi illum blanditiis ipsum, hic atque!</p><a href="ibi-toll-manufacturer">
                <div class="btn btn-primary">Leggi tutto</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2>IBI: 90 anni di esperienza</h2>
            <h3>La nostra storia, i nostri valori</h3><img src="/img/home-content-img.jpg" class="img-responsive">
            <p>L’Istituto Biochimico Italiano, Ibi, fondato dal Prof. Giovanni Lorenzini, è un’azienda farmaceutica di grande tradizione scientifica presente sul mercato italiano da più di 90 anni, con obiettivi di ricerca, innovazione e produzione. Oltre la tradizione storica aziendale, le nuove tecnologie applicate e un’attenta cura nella produzione, fanno della Ibi sinonimo di affidabilità e garanzia di alta qualità nei paesi in cui l’Azienda è presente.</p>
            <p>Ibi dedica la propria attività allo sviluppo di nuove applicazioni terapeutiche per offrire soluzioni alternative a medici e pazienti ed è oggi una realtà consolidata in Italia, Europa, Asia, Australia e US.</p>
            <p>La sede si trova ad Aprilia dove, oltre allo stabilimento di produzione, sono collocate tutte le funzioni aziendali. La produzione e il controllo qualità sono il core business dell’Azienda, a cui si affiancano Ricerca e Sviluppo, Farmacovigilanza...</p><a href="chi-siamo">
              <div class="btn btn-primary">Leggi tutto</div></a>
          </div>
          <div class="col-md-4">
            @include('layouts.news_sidebar')
          </div>
        </div>
      </div>
    </section>
@stop