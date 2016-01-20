@extends('layouts.master')
@section('content')
    <!-- Page content -->
    @include('home.carousel')
    <div class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box">
                <div class="hero-box-title">
                  <h2>Esportazioni</h2>
                </div>
                @include('layouts.content', array('key' => 'home_ibi_export_box', 'permesso'=> 'modifica_export'))
                <a href="/ibi-export"><div class="btn btn-primary">Leggi tutto</div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box">
                <div class="hero-box-title">
                  <h2>Ospedale</h2>
                </div>
                @include('layouts.content', array('key' => 'home_ibisqus_ospedale_box', 'permesso'=> 'modifica_ibisqus'))
                <a href="/ibisqus-ospedale"><div class="btn btn-primary">Leggi tutto</div></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box">
                <div class="hero-box-title">
                  <h2>Farmacia</h2>
                </div>
                @include('layouts.content', array('key' => 'home_ibi_italia_box', 'permesso'=> 'modifica_ibi_italia'))
                <a href="/ibi-italia"><div class="btn btn-primary">Leggi tutto</div></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box">
                <div class="hero-box-title">
                  <h2>Sviluppo e produzione conto terzi</h2>
                </div>
                @include('layouts.content', array('key' => 'home_toll_manufacturer_box', 'permesso'=> 'modifica_toll_development'))
                <a href="/ibi-toll-manufacturer"><div class="btn btn-primary">Leggi tutto</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            @include('layouts.content', array('key' => 'home_articolo_principale', 'permesso'=> 'modifica_home'))
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