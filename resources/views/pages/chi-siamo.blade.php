@extends('layouts.master')
@section('content')
<!-- Page content -->
<div class="main-header chi-siamo">
  <div class="container">
    <div class="main-caption">
      <h1>Chi siamo</h1>
    </div>
  </div>
</div>
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="tabs chi-siamo-tabs">
          <!-- Nav tabs-->
          <ul role="tablist" class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#chisiamo" aria-controls="chisiamo" role="tab" data-toggle="tab">{{$text['chi-siamo']['chi_siamo']}}</a></li>
            <li role="presentation"><a href="#gruppo" aria-controls="gruppo" role="tab" data-toggle="tab">{{$text['chi-siamo']['il_gruppo']}}</a></li>
            <li role="presentation"><a href="#storia" aria-controls="messages" role="tab" data-toggle="tab">{{$text['chi-siamo']['la_storia']}}</a></li>
            <li role="presentation"><a href="#codice-etico" aria-controls="codice-etico" role="tab" data-toggle="tab">{{$text['chi-siamo']['codice_etico']}}</a></li>
            <li role="presentation"><a href="#quality" aria-controls="quality" role="tab" data-toggle="tab">{{$text['chi-siamo']['qus']}}</a></li>
            <li role="presentation"><a href="#politica" aria-controls="politica" role="tab" data-toggle="tab">{{$text['chi-siamo']['politica_integrata']}}</a></li>
            
          </ul>
          <!-- Tab panes-->
          <div class="tab-content">
            <div id="chisiamo" role="tabpanel" class="tab-pane active">
              @include('layouts.content', array('key' => 'chi_siamo_tab', 'permesso'=> 'modifica_home'))
            </div>
            <div id="gruppo" role="tabpanel" class="tab-pane">
              @include('layouts.content', array('key' => 'chi_siamo_il_gruppo_tab', 'permesso'=> 'modifica_home'))
            </div>
            <div id="storia" role="tabpanel" class="tab-pane">
              @include('layouts.content', array('key' => 'chi_siamo_la_storia_tab', 'permesso'=> 'modifica_home'))
            </div>
            <div id="codice-etico" role="tabpanel" class="tab-pane">
              @include('layouts.content', array('key' => 'chi_siamo_codice_etico_tab', 'permesso'=> 'modifica_home'))
            </div>
            <div id="quality" role="tabpanel" class="tab-pane">
              @include('layouts.content', array('key' => 'chi_siamo_quality_unit_tab', 'permesso'=> 'modifica_home'))
            </div>
            <div id="politica" role="tabpanel" class="tab-pane">
              @include('layouts.content', array('key' => 'chi_siamo_politica_integrata_tab', 'permesso'=> 'modifica_home'))
            </div>
           
          </div>
        </div>
      </div>
      <div class="col-md-4">
        @include('layouts.news_sidebar_chi_siamo')
      </div>
    </section>
    @stop