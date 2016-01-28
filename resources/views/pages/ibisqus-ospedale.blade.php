@extends('layouts.master')
@section('content')
    <div class="main-header ibisqus-ospedale">
      <div class="container">
        <div class="main-caption">
          <h1>ospedale</h1>
        </div>
      </div>
    </div>
    <section class="content ibisqus-ospedale-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8"><!-- <img src="/img/ibisqus-ospedale-logo.jpg" alt=""> -->
              <h2>Ospedale</h2>
              <a href="prodotti-ibisqus" class="pull-right">
                <div class="btn btn-primary btn-products">Elenco prodotti per ospedale</div>
              </a>
              @include('layouts.content', array('key' => 'ibisqus_ospedale_main', 'permesso'=> 'modifica_ibisques'))
            
          </div>
          <div class="col-md-4">
            @include('layouts.news_sidebar')
          </div>
        </div>
      </div>
    </section>
    @stop