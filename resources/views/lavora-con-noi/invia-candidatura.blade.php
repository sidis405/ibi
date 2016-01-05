@extends('layouts.master')

@section('header_scripts')

<script src='https://www.google.com/recaptcha/api.js'></script>

@stop

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
          <div class="col-sm-8">
              @include('layouts.errors')
              @include('flash::message')
            <h2>Invia la tua candidatura</h2>
            <p>
              Compila in tutte le sue parti il curriculum vitae.<br>
              	Attenzione, i campi contrassegnati con * sono obbligatori per processare la tua candidatura.
            </p>
            <form action="/lavora-con-noi/invia-candidatura" method="POST" enctype="multipart/form-data">
              {!! csrf_field() !!}
              <div class="form-group">
                <label for="posizione_id">Scegli la posizione <span class="form-input-danger">*</span></label>
                <select name="posizione_id" class="form-control">
                  <option disabled="">Scegli...</option>
                  @foreach($posizioni as $posizione)
                    <option value="{{$posizione->id}}" @if($posizione->id == $id) selected @endif required>{{$posizione->titolo}} : {{$posizione->sede}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="nome">Nome <span class="form-input-danger">*</span></label>
                <input type="text" name="nome" value="{{old('nome')}}" class="form-control" requried>
              </div>

              <div class="form-group">
                <label for="cognome">Cognome <span class="form-input-danger">*</span></label>
                <input type="text" name="cognome" value="{{old('cognome')}}" class="form-control" requried>
              </div>

              <div class="form-group">
                <label for="email">Email <span class="form-input-danger">*</span></label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" requried>
              </div>


              <div class="form-group">
                <label for="messaggio">Messaggio <span class="form-input-danger">*</span></label>
                <textarea name="messaggio" class="form-control" cols="30" rows="10" required>{{old('messaggio')}}</textarea>
              </div>

              <div class="form-group">
                <label for="cv_path">Il tuo cv <span class="form-input-danger">*</span></label>
                <input type="file" name="cv_path" class="form-control" required>
              </div>

              <div class="form-group">
                <p style="font-size: 12px">
                  Cliccando su invia dichiaro di aver letto ed accettato la <a href="/privacy-policy" target="_blank">Privacy Policy</a>
                </p>
              </div>

              <div class="form-group">
                {!! app('captcha')->display(); !!}
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