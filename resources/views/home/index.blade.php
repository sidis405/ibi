@extends('layouts.master')
@section('content')
    <!-- Page content -->
    @include('home.carousel')
    <div class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box"><img src="/img/ibi-export-logo.jpg" alt="" class="img-responsive">
              {!!getTheText($contenuti, 'home_ibi_export_box')!!}
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
              {!!getTheText($contenuti, 'home_ibisqus_ospedale_box')!!}
              <a href="ibisqus-ospedale">
              @permessoibi('modifica_ibisqus')
                <a href="/admin/contenuti/{{getKey($contenuti, 'home_ibisqus_ospedale_box', 'id')}}/modifica" target="_blank" class="pull-right">modifica</a>
              @endpermessoibi
                <div class="btn btn-primary">Leggi tutto</div></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box"><img src="/img/ibi-italia-logo.jpg" alt="" class="img-responsive">
              {!!getTheText($contenuti, 'home_ibi_italia_box')!!}
              @permessoibi('modifica_ibi_italia')
                <a href="/admin/contenuti/{{getKey($contenuti, 'home_ibi_italia_box', 'id')}}/modifica" target="_blank" class="pull-right">modifica</a>
              @endpermessoibi
                <div class="btn btn-primary">Leggi tutto</div></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box"><img src="/img/ibi-toll-manufacturer-logo.jpg" alt="" class="img-responsive">
              {!!getTheText($contenuti, 'home_toll_manufacturer_box')!!}
                <div class="btn btn-primary">Leggi tutto</div></a>
                @permessoibi('modifica_toll_development')
                  <a href="/admin/contenuti/{{getKey($contenuti, 'home_toll_manufacturer_box', 'id')}}/modifica" target="_blank" class="pull-right">modifica</a>
                @endpermessoibi
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            {!!getTheText($contenuti, 'home_articolo_principale')!!}
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