@extends('layouts.master')
@section('content')
    <div class="main-header ibi-export">
      <div class="container">
        <div class="main-caption">
          <h1><span>ibi </span>Export</h1>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="tabs ibi-export-tabs">
              <!-- Nav tabs-->
              <ul role="tablist" class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#ibi-export" aria-controls="ibi-export" role="tab" data-toggle="tab"><img src="/img/ibi-export-logo.jpg" alt=""></a></li>
                <li role="presentation"><a href="#licensing-out" aria-controls="licensing-out" role="tab" data-toggle="tab">Licensing out						</a></li>
              </ul>
              <!-- Tab panes-->
              <div class="tab-content">
                <div id="ibi-export" role="tabpanel" class="tab-pane active"><a href="prodotti-export" href="/ibi-export">
                    <div class="btn btn-primary btn-products">Elenco prodotti ibi export</div></a>
                   @include('layouts.content', array('key' => 'ibi_export_main_tab', 'permesso'=> 'modifica_export'))
                </div>
                <div id="licensing-out" role="tabpanel" class="tab-pane">
                  @include('layouts.content', array('key' => 'ibi_export_licensing_tab', 'permesso'=> 'modifica_export'))
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="sidebar">
              <div class="row sidebar-hero">
                <div class="col-xs-12"><a href="ricerca-innovazione#biotecnologie">
                    <div class="biotecnologia-sidebar">
                      <h3>Biotecnologie</h3>
                    </div></a></div>
                <div class="col-xs-12"><a href="farmaco-vigilanza">
                    <div class="farmacovigilanza-sidebar">
                      <h3>Farmacovigilanza</h3>
                    </div></a></div>
              </div>
              <div class="row news">
                <div class="col-xs-12">
                  <h3> Ultime News</h3>
                </div>
                <div class="col-xs-12">
                  <div class="single-news">
                    <div class="media">
                      <div class="media-left"><a href="#"><img src="http://placehold.it/100x100" alt="..." class="media-object"></a></div>
                      <div class="media-body">
                        <h4>Media heading</h4><span class="date">12/07/2015</span>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque alias, quo..Doloremque alias, quo..</p><a href="#" class="read-more read-more-news">Leggi tutto ></a>
                      </div>
                    </div>
                  </div>
                  <div class="single-news">
                    <div class="media">
                      <div class="media-left"><a href="#"><img src="http://placehold.it/100x100" alt="..." class="media-object"></a></div>
                      <div class="media-body">
                        <h4>Media heading</h4><span class="date">12/07/2015</span>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque alias, quo..Doloremque alias, quo..</p><a href="#" class="read-more read-more-news">Leggi tutto ></a>
                      </div>
                    </div>
                  </div>
                  <div class="single-news">
                    <div class="media">
                      <div class="media-left"><a href="#"><img src="http://placehold.it/100x100" alt="..." class="media-object"></a></div>
                      <div class="media-body">
                        <h4>Media heading</h4><span class="date">12/07/2015</span>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque alias, quo..Doloremque alias, quo..</p><a href="#" class="read-more read-more-news">Leggi tutto ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
  @stop