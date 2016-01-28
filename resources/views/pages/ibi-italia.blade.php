@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header ibi-italia">
      <div class="container">
        <div class="main-caption">
          <h1>Farmacia</h1>
        </div>
      </div>
    </div>
    <section class="content ibi-italia-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
          <h2>Farmacia</h2>
          <a href="prodotti-italia" class="pull-right" href="/prodotti-italia">
              <div class="btn btn-primary btn-products">Elenco prodotti per farmacia</div></a>
            @include('layouts.content', array('key' => 'ibi_italia_main', 'permesso'=> 'modifica_ibi_italia'))
          </div>
          <div class="col-md-4">
            @include('layouts.news_sidebar')
          </div>
        </div>
      </div>
    </section>
    @stop