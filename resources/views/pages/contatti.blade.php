@extends('layouts.master')
@section('content')
<!-- Page content -->
<div class="main-header contatti">
      <div class="container">
        <div class="main-caption">
          <h1>Contatti</h1>
        </div>
      </div>
    </div>
    <section class="content contatti-content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="loghi"><img src="/img/ibi-lorenzini-logo.png"></div>
                   @include('layouts.content', array('key' => 'contatti_main', 'permesso'=> 'modifica_contatti'))
                </div>
              </div>
              <div class="col-md-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2983.621283220953!2d12.616033927143896!3d41.59907506768937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1325976707d09bbb%3A0x62e00c106979d665!2sIstituto+Biochimico+Italiano+Giovanni+Lorenzini+Spa!5e0!3m2!1sit!2sit!4v1453302971988" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-8">
                <div class="loghi contatti-ibisqus-logo"><img src="/img/ibisqus-ospedale-logo.jpg" alt=""></div>
                <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
                  <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <div id="headingOne" role="tab" class="panel-heading">
                        <h4 class="panel-title">Sede in Italia</h4><span class="caret caret-rotate"></span>
                      </div></a>
                    <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <div class="row">
                          @include('layouts.content', array('key' => 'contatti_ibisqus_italia', 'permesso'=> 'modifica_contatti'))
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                      <div id="headingTwo" role="tab" class="panel-heading">
                        <h4 class="panel-title">Sede in Germania</h4><span class="caret"></span>
                      </div></a>
                    <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="row">
                          @include('layouts.content', array('key' => 'contatti_ibisqus_germania', 'permesso'=> 'modifica_contatti'))
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                      <div id="headingThree" role="tab" class="panel-heading">
                        <h4 class="panel-title">Sede in Inghiterra</h4><span class="caret"></span>
                      </div></a>
                    <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                      <div class="panel-body">
                         @include('layouts.content', array('key' => 'contatti_ibisqus_uk', 'permesso'=> 'modifica_contatti'))
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2983.621283220953!2d12.616033927143896!3d41.59907506768937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1325976707d09bbb%3A0x62e00c106979d665!2sIstituto+Biochimico+Italiano+Giovanni+Lorenzini+Spa!5e0!3m2!1sit!2sit!4v1453302971988" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@stop