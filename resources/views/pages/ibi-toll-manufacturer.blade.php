@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header ibi-manufacturer">
      <div class="container">
        <div class="main-caption">
          <h1>Sviluppo e produzione conto terzi</h1>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-8"><!-- <img src="/img/ibi-toll-manufacturer-logo.jpg" alt=""> -->
            <div class="tabs manufactoring-tabs">
              <!-- Nav tabs-->
              <ul role="tablist" class="nav nav-tabs">                
                <li role="presentation"  class="active"><a href="#development" aria-controls="development" role="tab" data-toggle="tab">Sviluppo			</a></li>
                <li role="presentation"><a href="#manufactoring" aria-controls="manufactoring" role="tab" data-toggle="tab">Produzione</a></li>
              </ul>
              <!-- Tab panes-->
              <div class="tab-content">
                <div id="manufactoring" role="tabpanel" class="tab-pane">
                  @include('layouts.content', array('key' => 'toll_manufacturing_tab', 'permesso'=> 'modifica_toll_development'))
                </div>
                <div id="development" role="tabpanel" class="tab-pane active">								
                  @include('layouts.content', array('key' => 'toll_development_tab', 'permesso'=> 'modifica_toll_development'))
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4  sidebar-wrapper">
            @include('layouts.news_sidebar_toll')
          </div>
        </div>
      </div>
    </section>
    @stop