@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header farmacovigilanza">
      <div class="container">
        <div class="main-caption">
          <h1>Farmacovigilanza</h1>
        </div>
      </div>
    </div>
    <section class="content farmacovigilanza-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
           
            @include('layouts.content', array('key' => 'farmaco-vigilanza-main', 'permesso'=> 'modifica_farmacovigilanza'))
            <a href="/farmaco-vigilanza/segnalazione" class="btn btn-primary">Invia segnalazione</a>
          </div>
          <div class="col-md-4">
            <div class="sidebar farmacovigilanza-sidebar">
              <div class="row comunicati">
                <div class="col-xs-12">
                  <h3>Comunicati</h3>
                </div>
                <div class="col-xs-12">
                 @include('farmaco-vigilanza.comunicati_partial')
                </div> 
              </div>
              <div class="row news">
                <div class="col-xs-12">
                  <h3> Ultime News</h3>
                </div>
                <div class="col-xs-12">
                  @include('layouts.news_partial')
                </div>
                <div class="col-xs-12"><a href="/archivio-news" class="archivio-news-link">Archivio news</a></div>
              </div>
            </div>
          
            </div>
          </div>
        </div>
     
    </section>
    @stop