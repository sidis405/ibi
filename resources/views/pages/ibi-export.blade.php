@extends('layouts.master')
@section('content')
    <div class="main-header ibi-export">
      <div class="container">
        <div class="main-caption">
          <h1>Esportazioni</h1>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="tabs ibi-export-tabs">
              <!-- Nav tabs-->
              <ul role="tablist" class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#ibi-export" aria-controls="ibi-export" role="tab" data-toggle="tab">Esportazioni<!-- <img src="/img/ibi-export-logo.jpg" alt=""> --></a></li>
                <li role="presentation"><a href="#licensing-out" aria-controls="licensing-out" role="tab" data-toggle="tab">Licensing out						</a></li>
              </ul>
              <!-- Tab panes-->
              <div class="tab-content" style="margin-top: 0;">
                <div id="ibi-export" role="tabpanel" class="tab-pane active"><a href="prodotti-export" href="/ibi-export">
                    <div class="btn btn-primary btn-products" style="margin-top: 0;">Elenco prodotti per esportazioni</div></a>
                   @include('layouts.content', array('key' => 'ibi_export_main_tab', 'permesso'=> 'modifica_export'))
                  
                    <div class="mappa">
                        <div id="dots-1">
                          <div class="dot"></div>
                          <div class="pulse"></div>
                        </div>
                        <div id="dots-2">
                          <div class="dot"></div>
                          <div class="pulse"></div>
                        </div>
                        <div id="dots-3">
                          <div class="dot"></div>
                          <div class="pulse"></div>
                        </div>
                        <div id="dots-4">
                          <div class="dot"></div>
                          <div class="pulse"></div>
                        </div>
                        <div id="dots-5">
                          <div class="dot"></div>
                          <div class="pulse"></div>
                        </div>                        


                    </div>

                   @include('layouts.content', array('key' => 'ibi_export_main_tab2', 'permesso'=> 'modifica_export'))
                </div>
                <div id="licensing-out" role="tabpanel" class="tab-pane">
                  @include('layouts.content', array('key' => 'ibi_export_licensing_tab', 'permesso'=> 'modifica_export'))
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 sidebar-wrapper">
            @include('layouts.news_sidebar_esportazioni')
          </div>
        </div>
      </div>
    </section>
   
  @stop