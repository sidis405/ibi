@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header ibi-manufacturer">
      <div class="container">
        <div class="main-caption">
          <h1>Toll Development</h1>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8"><img src="/img/ibi-toll-manufacturer-logo.jpg" alt="">
            <div class="tabs manufactoring-tabs">
              <!-- Nav tabs-->
              <ul role="tablist" class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#manufactoring" aria-controls="manufactoring" role="tab" data-toggle="tab">Manufactoring</a></li>
                <li role="presentation"><a href="#development" aria-controls="development" role="tab" data-toggle="tab">Development			</a></li>
              </ul>
              <!-- Tab panes-->
              <div class="tab-content">
                <div id="manufactoring" role="tabpanel" class="tab-pane active">
                  @include('layouts.content', array('key' => 'toll_manufacturing_tab', 'permesso'=> 'modifica_toll_development'))
                </div>
                <div id="development" role="tabpanel" class="tab-pane">								
                  <img src="/img/grafico-development.jpg" class="img-responsive">
                  @include('layouts.content', array('key' => 'toll_development_tab', 'permesso'=> 'modifica_toll_development'))
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            @include('layouts.news_sidebar_toll')
          </div>
        </div>
      </div>
    </section>
    @stop