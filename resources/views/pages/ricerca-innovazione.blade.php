@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header ricerca-innovazione">
      <div class="container">
        <div class="main-caption">
          <h1>Ricerca e innovazione</h1>
        </div>
      </div>
    </div>
    <section class="content benessere-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">					
            <div class="tabs ricerca-tabs">
              <!-- Nav tabs-->
              <ul role="tablist" class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#innovativi" aria-controls="innovativi" role="tab" data-toggle="tab">Sviluppo formulativo</a></li>
                <li role="presentation"><a href="#biotecnologie" aria-controls="biotecnologie" role="tab" data-toggle="tab">Biotecnologie	</a></li>
                <li role="presentation"><a href="#collaborazioni" aria-controls="collaborazioni" role="tab" data-toggle="tab">Collaborazioni	</a></li>                
              </ul>
              <!-- Tab panes-->
             <div class="tab-content">
                <div id="innovativi" role="tabpanel" class="tab-pane active">
                  <p>
                    @include('layouts.content', array('key' => 'ricerca_innovazione_delivery_tab', 'permesso'=> 'modifica_ricerca_innovazione'))                  
                  </p>


                  

                  <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
                    
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="collapsed">
                        <div id="headingFour" role="tab" class="panel-heading">
                          <h4 class="panel-title">
                                                    
                            Equipment
                          </h4>
                          <div class="plus-minus"></div>
                        </div></a>
                      <div id="collapseFour" role="tabpanel" aria-labelledby="headingFour" class="panel-collapse collapse">
                        <div class="panel-body">
                                                  
                          @include('layouts.content', array('key' => 'ricerca_innovazione_sviluppo_tab_accordion', 'permesso'=> 'modifica_ricerca_innovazione'))             
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="biotecnologie" role="tabpanel" class="tab-pane">
                          @include('layouts.content', array('key' => 'ricerca_innovazione_biotecnologie_about', 'permesso'=> 'modifica_ricerca_innovazione'))       

                          <br>                          
                  <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
                    
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                        <div id="headingOne" role="tab" class="panel-heading">
                          <h4 class="panel-title">
                                                    
                            Equipment
                          </h4>
                          <div class="plus-minus"></div>
                        </div></a>
                      <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse">
                        <div class="panel-body">
                                                  
                          @include('layouts.content', array('key' => 'ricerca_innovazione_biotecnologie_equipment', 'permesso'=> 'modifica_ricerca_innovazione'))             
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                        <div id="headingTwo" role="tab" class="panel-heading">
                          <h4 class="panel-title">
                                      
                              Progetti
                          </h4>
                          <div class="plus-minus">                        </div>
                        </div></a>
                      <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
                        <div class="panel-body">                        
                          @include('layouts.content', array('key' => 'ricerca_innovazione_biotecnologie_projects', 'permesso'=> 'modifica_ricerca_innovazione'))             
                        </div>
                      </div>
                    </div>
                   
                    <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                        <div id="headingThree" role="tab" class="panel-heading">
                          <h4 class="panel-title">  Pubblicazioni</h4>
                          <div class="plus-minus">                          </div>
                        </div></a>
                      <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                        <div class="panel-body">
                          @include('layouts.content', array('key' => 'ricerca_innovazione_biotecnologie_partnership', 'permesso'=> 'modifica_ricerca_innovazione'))             
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- @include('layouts.content', array('key' => 'ricerca_innovazione_biotecnologie_tab', 'permesso'=> 'modifica_ricerca_innovazione'))                   -->
                </div>
                <div id="collaborazioni" role="tabpanel" class="tab-pane">
                  @include('layouts.content', array('key' => 'ricerca_innovazione_pubblicazioni_tab', 'permesso'=> 'modifica_ricerca_innovazione'))  

                  


                </div>

                <!-- <div id="progetti" role="tabpanel" class="tab-pane">
                  @include('layouts.content', array('key' => 'ricerca_innovazione_progetti_tab', 'permesso'=> 'modifica_ricerca_innovazione'))  
                </div> -->
              </div>
            </div>
          </div>
          <div class="col-md-4 sidebar-wrapper">
            @include('layouts.news_sidebar_ricerca_innovazione')
          </div>
        </div>
      </div>
    </section>
@stop