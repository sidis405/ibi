@extends('layouts.master')
@section('content')
    <!-- Page content -->
    @include('home.carousel')
    <div class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box"><img src="/img/ibi-export-logo.jpg" alt="" class="img-responsive">
              {!!getText($contenuti, 'home_ibi_export_box')!!}
              <a href="ibi-export">
                  @permessoibi('modifica_export')
                    <a href="/admin/contenuti/{{getKey($contenuti, 'home_ibi_export_box', 'id')}}/modifica" target="_blank" class="pull-right">modifica</a>
                  @endpermessoibi
                <div class="btn btn-primary">Leggi tutto</div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box"><img src="/img/ibisqus-ospedale-logo.jpg" alt="" class="img-responsive">
              {!!getText($contenuti, 'home_ibisqus_ospedale_box')!!}
              <a href="ibisqus-ospedale">
              @permessoibi('modifica_ibisqus')
                <a href="/admin/contenuti/{{getKey($contenuti, 'home_ibisqus_ospedale_box', 'id')}}/modifica" target="_blank" class="pull-right">modifica</a>
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
            {!!getText($contenuti, 'home_articolo_principale')!!}
            @permessoibi('modifica_home')
                <a href="/admin/contenuti/{{getKey($contenuti, 'home_articolo_principale', 'id')}}/modifica" target="_blank" class="pull-right">modifica</a>
              @endpermessoibi
            <a href="chi-siamo">
              <div class="btn btn-primary">Leggi tutto</div></a>
          </div>
          <div class="col-md-4">
            @include('layouts.news_sidebar')
          </div>
        </div>
      </div>
    </section>
@stop