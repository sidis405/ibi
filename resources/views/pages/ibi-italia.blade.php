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
          <a href="prodotti-italia" class="" href="/prodotti-italia">
              <div class="btn btn-primary btn-products">Elenco prodotti per farmacia</div></a>
            @include('layouts.content', array('key' => 'ibi_italia_main', 'permesso'=> 'modifica_ibi_italia'))
          </div>
          <div class="col-md-4">
            @include('layouts.news_sidebar_ibi_italia')
            <a href="benessere-del-paziente">
            <div class="benessere-del-paziente meteorismo">
              <h5>Meteorismo e Aerofagia ?</h5>
            </div></a>
            <a href="benessere-del-paziente">
            <div class="benessere-del-paziente fegato-grasso-big">
              <h5>Fegato grasso o Steatosi epatica ?</h5>
            </div></a>
            <a target="_blank" href="http://realsil.it" class="btn btn-primary" style="width: 100%;">Visita il sito Realsil</a>
          </div>
        </div>
      </div>
    </section>
    @stop