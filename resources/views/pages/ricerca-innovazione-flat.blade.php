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
    <section class="content ricerca-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">					
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
                </div>
                <div id="biotecnologie" role="tabpanel" class="tab-pane">
                  @include('layouts.content', array('key' => 'ricerca_innovazione_biotecnologie_tab', 'permesso'=> 'modifica_ricerca_innovazione'))                  
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
          <div class="col-md-4">
            @include('layouts.news_sidebar_ricerca_innovazione')
          </div>
        </div>
      </div>
    </section>
@stop