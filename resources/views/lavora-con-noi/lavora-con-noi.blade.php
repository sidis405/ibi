@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header lavora-con-noi">
      <div class="container">
        <div class="main-caption">
          <h1>{{$text['contatti']['lavora_con_noi']}}</h1>
        </div>
      </div>
    </div>
    <section class="content lavora-con-noi-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">   

             <div class="row workers-percent">
              <div class="col-sm-4" style="text-align: left;">
                <span class="number"><i style="color: #f7bacf; font-style: normal;">{{$staff_info['women']}}</i>%</span>
                <img src="/img/woman.jpg" alt="">
              </div>
              <div class="col-sm-4">
                <div class="average-age">
                <b>{{$text['contatti']['eta_media']}}</b>
                <i class="age">{{$staff_info['age']}}</i>
                <b>{{$text['contatti']['anni']}}</b>
              </div>
              </div>
              
              <div class="col-sm-4" style="text-align: right;">                
                <img src="/img/man.jpg" alt="">
                <span class="number"><i style="color: #b1eaf1; font-style: normal;">{{$staff_info['men']}}</i>%</span>
              </div>
            </div>

            @include('layouts.content', array('key' => 'lavora_con_noi_main', 'permesso'=> 'modifica_lavora_con_noi'))

            <a href="/lavora-con-noi/invia-candidatura">
              <div class="btn btn-primary">{{$text['contatti']['invia_candidatura']}}</div></a>
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