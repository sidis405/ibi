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
                  @include('layouts.content_boxed', array('key' => 'home_ibi_export_box_title', 'permesso'=> 'modifica_export'))
                </div>
                @include('layouts.content_boxed', array('key' => 'home_ibi_export_box', 'permesso'=> 'modifica_export'))
                <a href="/ibi-export"><div class="btn btn-primary">{{$text['azioni']['leggi_tutto']}}</div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box">
                <div class="hero-box-title">
                  @include('layouts.content_boxed', array('key' => 'home_ibisqus_ospedale_box_title', 'permesso'=> 'modifica_ibisqus'))
                </div>
                @include('layouts.content_boxed', array('key' => 'home_ibisqus_ospedale_box', 'permesso'=> 'modifica_ibisqus'))
                <a href="/ibisqus-ospedale"><div class="btn btn-primary">{{$text['azioni']['leggi_tutto']}}</div></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box">
                <div class="hero-box-title">
                  @include('layouts.content_boxed', array('key' => 'home_ibi_italia_box_title', 'permesso'=> 'modifica_ibi_italia'))
                </div>
                @include('layouts.content_boxed', array('key' => 'home_ibi_italia_box', 'permesso'=> 'modifica_ibi_italia'))
                <a href="/ibi-italia"><div class="btn btn-primary">{{$text['azioni']['leggi_tutto']}}</div></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="hero-box">
                <div class="hero-box-title">
                  @include('layouts.content_boxed', array('key' => 'home_toll_manufacturer_box_title', 'permesso'=> 'modifica_toll_development'))
                </div>
                @include('layouts.content_boxed', array('key' => 'home_toll_manufacturer_box', 'permesso'=> 'modifica_toll_development'))
                <a href="/ibi-toll-manufacturer"><div class="btn btn-primary">{{$text['azioni']['leggi_tutto']}}</div></a>
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
              <div class="btn btn-primary">{{$text['azioni']['leggi_tutto']}}</div></a>
          </div>
          <div class="col-md-4">
            @include('layouts.news_sidebar')
          </div>
        </div>
      </div>
    </section>
@stop