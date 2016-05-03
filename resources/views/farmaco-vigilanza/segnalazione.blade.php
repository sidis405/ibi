@extends('layouts.master')


@section('content')
    <!-- Page content -->
    <div class="main-header farmacovigilanza">
      <div class="container">
        <div class="main-caption">
          <h1>{{$text['farmacovigilanza']['segnalazione_farmacovigilanza']}}</h1>
        </div>
      </div>
    </div>
    <section class="content segnalazione-farmacovigilanza-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
              @include('layouts.errors')
              @include('flash::message')
            <h2>{{$text['farmacovigilanza']['segnalazione_farmacovigilanza']}}</h2>
            <h3>{{$text['farmacovigilanza']['slogan']}}</h3>
            <div class="row">
              <form class="form-horizontal"  method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="col-sm-6">
                  <label for="nome" class="control-label">{{$text['farmacovigilanza']['nome']}}               </label>
                  <input name="nome" type="text" placeholder="Nome" value="{{old('nome')}}" class="form-control" required>
                </div>
                <div class="col-sm-6">
                  <label for="cognome" class="control-label">{{$text['farmacovigilanza']['cognome']}}               </label>
                  <input name="cognome" type="text" placeholder="Cognome" value="{{old('cognome')}}" class="form-control" required>
                </div>
                <div class="col-sm-6">
                  <label for="dob" class="control-label">{{$text['farmacovigilanza']['dob']}}</label>
                  <input name="dob" type="date" placeholder="Data di nascita" value="{{old('dob')}}" class="form-control" required>
                </div>
                <div class="col-sm-6">
                  <label for="email" class="control-label">Email               </label>
                  <input name="email" type="email" placeholder="Email" value="{{old('email')}}" class="form-control" required>
                </div>
                <div class="col-xs-12">
                  <label for="messaggio" class="control-label">{{$text['farmacovigilanza']['segnalazione']}}                </label>
                  <textarea name="messaggio" placeholder="Segnalazione" rows="10" class="form-control">{{old('messaggio')}}</textarea>
                </div>
                <div class="col-xs-12">
                  <p class="policy-reminder">{{$text['farmacovigilanza']['disclaimer']}} <a target="_blank" href="/privacy-policy">Privacy policy</a></p>
                </div>
                <div style="margin-bottom: 20px;" class="col-xs-12">
                  @include('layouts.captcha')
                </div>
                <div class="col-xs-12">               
                  <button type="submit" class="btn btn-primary">{{$text['farmacovigilanza']['invia_segnalazione']}}</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="sidebar farmacovigilanza-sidebar">
              <div class="row comunicati">
                <div class="col-xs-12">
                  <h3>{{$text['farmacovigilanza']['comunicati']}}</h3>
                </div>
                <div class="col-xs-12">
                 @include('farmaco-vigilanza.comunicati_partial')
                </div>
              </div>
          
            </div>
          </div>
        </div>
      </div>
    </section>
    @stop