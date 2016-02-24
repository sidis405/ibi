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
              @include('layouts.errors')
              @include('flash::message')
            <h2>{{$text['contatti']['invia_candidatura']}}</h2>
            <p>
              {{$text['contatti']['invia_candidatura_label1']}}<br>
              	{{$text['contatti']['invia_candidatura_label2']}}
            </p>
            <form action="/lavora-con-noi/invia-candidatura" method="POST" enctype="multipart/form-data">
              {!! csrf_field() !!}
              <div class="form-group">
                <h3 class="form-title">{{$text['contatti']['posizione']}}</h3>
                <label for="posizione_id">{{$text['contatti']['posizione_label']}} <span class="form-input-danger">*</span></label>
                <select name="posizione_id" class="form-control">
                  <option>{{$text['contatti']['scegli']}}...</option>
                  @foreach($posizioni as $posizione)
                    <option value="{{$posizione->id}}" @if($posizione->id == $id) selected @endif required>{{$posizione->titolo}}</option>
                  @endforeach
                </select>
              </div>
              
                <div class="row">
                <div class="col-xs-12">
                  <h3 class="form-title">{{$text['contatti']['dati_personali']}}</h3>
                </div>
                <div class="col-sm-6">
                  <label for="nome">{{$text['contatti']['nome']}} <span class="form-input-danger">*</span></label>
                  <input type="text" name="nome" value="{{old('nome')}}" class="form-control fields" required>
                </div>

                <div class="col-sm-6">
                  <label for="cognome">{{$text['contatti']['cognome']}} <span class="form-input-danger">*</span></label>
                  <input type="text" name="cognome" value="{{old('cognome')}}" class="form-control fields" required>
                </div>
              

                <div class="col-xs-12">
                  <label for="email">Email <span class="form-input-danger">*</span></label>
                  <input type="email" name="email" value="{{old('email')}}" class="form-control fields" required>
                </div>


                <div class="col-xs-12">
                  <label for="messaggio">{{$text['contatti']['messaggio']}} <span class="form-input-danger">*</span></label>
                  <textarea name="messaggio" class="form-control fields" cols="30" rows="6" required>{{old('messaggio')}}</textarea>
                </div>

                <div class="col-xs-12">
                  <h3 class="form-title">{{$text['contatti']['carica_cv']}}</h3>
                </div>

                <div class="col-xs-12">                
                  <label for="cv_path">{{$text['contatti']['your_cv']}} <span class="form-input-danger">*</span></label>
                  <input type="file" name="cv_path" class="form-control fields" required>
                </div>

                <div class="col-xs-12">
                  <p style="font-size: 12px">
                    {{$text['contatti']['disclaimer']}} <a href="/privacy-policy" target="_blank">Privacy Policy</a>
                  </p>
                </div>
              </div>
              <div class="form-group">
                @include('layouts.captcha')
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-block">Invia</button>
              </div>

            </form>
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