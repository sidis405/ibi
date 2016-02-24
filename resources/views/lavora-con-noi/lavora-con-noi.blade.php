@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header lavora-con-noi">
      <div class="container">
        <div class="main-caption">
          <h1>Lavora con noi</h1>
        </div>
      </div>
    </div>
    <section class="content lavora-con-noi-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">            
            @include('layouts.content', array('key' => 'lavora_con_noi_main', 'permesso'=> 'modifica_lavora_con_noi'))

            <a href="/lavora-con-noi/invia-candidatura">
              <div class="btn btn-primary">Invia la tua candidatura</div></a>
          </div>
          <div class="col-md-4">
            <div class="sidebar lavora-con-noi-sidebar">
              @include('lavora-con-noi.posizioni_partial')
            </div>
          </div>
        </div>
      </div>
    </section>
@stop