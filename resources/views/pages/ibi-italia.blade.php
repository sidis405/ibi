@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header ibi-italia">
      <div class="container">
        <div class="main-caption">
          <h1>{{$text['prodotti']['farmacia']}}</h1>
        </div>
      </div>
    </div>
    <section class="content ibi-italia-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">          
          <a href="prodotti-italia" class="" href="/prodotti-italia">
              <div class="btn btn-primary btn-products" style="margin-bottom: 40px;">{{$text['prodotti']['elenco_prodotti_per']}} {{$text['prodotti']['farmacia']}}</div></a>
            @include('layouts.content', array('key' => 'ibi_italia_main', 'permesso'=> 'modifica_ibi_italia'))
          </div>
          <div class="col-md-4 sidebar-wrapper">
            @include('layouts.news_sidebar_ibi_italia')
            <a href="/benessere-del-paziente#meteorismo">
            <div class="benessere-del-paziente meteorismo">
              <h5>{{$text['prodotti']['meteorismo_aerofagia']}} ?</h5>
            </div></a>
            <a href="/benessere-del-paziente#fegato-grasso">
            <div class="benessere-del-paziente fegato-grasso-big">
              <h5>{{$text['prodotti']['steatosi_epatica']}} ?</h5>
            </div></a>
            <a target="_blank" href="http://realsil.it" class="btn btn-primary" style="width: 100%;">{{$text['prodotti']['sito_realsil']}}</a>
          </div>
        </div>
      </div>
    </section>
    @stop