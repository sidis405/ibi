@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header benessere-paziente">
      <div class="container">
        <div class="main-caption">
          <h1>Per il benessere del paziente</h1>
        </div>
      </div>
    </div>
    <section class="content benessere-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <!-- <h2>Per il benessere del paziente</h2>
            <h3>Benvenuti nell’area dedicata ai pazienti e a chi ricerca informazioni utili relative a:</h3> -->
            <div class="tabs benessere-paziente-tabs" style="margin-top: 0;">
              <!-- Nav tabs-->
              <ul role="tablist" class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#fegato-grasso" aria-controls="fegato-grasso" role="tab" data-toggle="tab">Fegato grasso o Steatosi epatica</a></li>
                <li role="presentation"><a href="#meteorismo" aria-controls="meteorismo" role="tab" data-toggle="tab">Meteorismo e Aerofagia			</a></li>
              </ul>
              <!-- Tab panes-->
              <div class="tab-content">
                <div id="fegato-grasso" role="tabpanel" class="tab-pane active">
                  <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div id="headingOne" role="tab" class="panel-heading">
                          <h4 class="panel-title">
                            												
                            Steatosi, steatoepatite alcolica e non alcolica
                          </h4>
                          <div class="plus-minus minus">							</div>
                        </div></a>
                      <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
                        <div class="panel-body">																			
                          <p>
                            @include('layouts.content', array('key' => 'benessere_fegato_steatosi', 'permesso'=> 'modifica_prodotti_ibi_italia'))							
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                        <div id="headingTwo" role="tab" class="panel-heading">
                          <h4 class="panel-title">
                            												
                            Epidemiologia, cause e storia naturale
                          </h4>
                          <div class="plus-minus"></div>
                        </div></a>
                      <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                          @include('layouts.content', array('key' => 'benessere_fegato_epidemiologia', 'permesso'=> 'modifica_prodotti_ibi_italia'))     
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                        <div id="headingThree" role="tab" class="panel-heading">											
                          <h4 class="panel-title">
                            												
                            	Sintomatologia e segni clinici
                          </h4>
                          <div class="plus-minus">								</div>
                        </div></a>
                      <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                        <div class="panel-body">
                          @include('layouts.content', array('key' => 'benessere_fegato_sintomatologia', 'permesso'=> 'modifica_prodotti_ibi_italia'))     
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="collapsed">
                        <div id="headingFour" role="tab" class="panel-heading">
                          <h4 class="panel-title">
                            					
                            	Esami clinici e strumentali
                          </h4>
                          <div class="plus-minus">												</div>
                        </div></a>
                      <div id="collapseFour" role="tabpanel" aria-labelledby="headingFour" class="panel-collapse collapse">
                        <div class="panel-body">
                         @include('layouts.content', array('key' => 'benessere_fegato_esami', 'permesso'=> 'modifica_prodotti_ibi_italia'))      
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="collapsed">
                        <div id="headingFive" role="tab" class="panel-heading">
                          <h4 class="panel-title">	Nuovi metodi per monitorare il fegato</h4>
                          <div class="plus-minus"></div>
                        </div></a>
                      <div id="collapseFive" role="tabpanel" aria-labelledby="headingFive" class="panel-collapse collapse">
                        <div class="panel-body">
                          @include('layouts.content', array('key' => 'benessere_fegato_metodi', 'permesso'=> 'modifica_prodotti_ibi_italia'))     
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix" class="collapsed">
                        <div id="headingSix" role="tab" class="panel-heading">
                          <h4 class="panel-title">	Farmaci e terapie</h4>
                          <div class="plus-minus">													</div>
                        </div></a>
                      <div id="collapseSix" role="tabpanel" aria-labelledby="headingSix" class="panel-collapse collapse">
                        <div class="panel-body">
                          @include('layouts.content', array('key' => 'benessere_fegato_farmaci', 'permesso'=> 'modifica_prodotti_ibi_italia'))     
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="meteorismo" role="tabpanel" class="tab-pane">
                  @include('layouts.content', array('key' => 'benessere_meteorismo_tab', 'permesso'=> 'modifica_prodotti_ibi_italia'))
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 sidebar-wrapper">
           @include('layouts.news_sidebar')
          </div>
        </div>
      </div>
    </section>
    <!-- Including footer-->
   @stop