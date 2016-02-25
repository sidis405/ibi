@extends('layouts.master')
@section('content')
    <div class="main-header ibisqus-ospedale">
      <div class="container">
        <div class="main-caption">
          <h1>{{$text['prodotti']['ospedale']}}</h1>
        </div>
      </div>
    </div>
    <section class="content ibisqus-ospedale-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8"><!-- <img src="/img/ibisqus-ospedale-logo.jpg" alt=""> -->              
              <a href="prodotti-ibisqus" class="">
                <div class="btn btn-primary btn-products">{{$text['prodotti']['elenco_prodotti_per']}} {{$text['prodotti']['ospedale']}}</div>
              </a>
              @include('layouts.content', array('key' => 'ibisqus_ospedale_main', 'permesso'=> 'modifica_ibisqus'))
            
          </div>
          <div class="col-md-4 sidebar-wrapper">
            @include('layouts.news_sidebar_ricerca_innovazione')
          </div>
        </div>
      </div>
    </section>
    @stop