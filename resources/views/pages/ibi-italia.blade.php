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