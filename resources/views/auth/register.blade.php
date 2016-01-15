@extends('layouts.master')
@section('header_scripts')
<script src='https://www.google.com/recaptcha/api.js'></script>
@stop
@section('content')
<div class="main-header registrazione-area-riservata">
    <div class="container">
        <div class="main-caption">
            <h1>Registrazione</h1>
        </div>
    </div>
</div>
<section class="content registrazione-area-riservata-content">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, eaque quas repudiandae incidunt ratione corrupti dolorem sapiente unde ad nesciunt tempora, quod ullam. Fugiat praesentium repellat, quo, doloremque laborum nesciunt!</p>
            </div>

            <div class="col-md-12">
                
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        Ci sono stati dei problemi durante la sua registrazione<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @include('flash::message')
                    @endif

                    <form class="form-horizontal" action="/auth/register" method="POST">
                        {!!csrf_field()!!}
                        <div class="row">
                            @include('auth.partials.01_ruolo')
                            @include('auth.partials.02_area_per_farmacisti')
                        </div>
                        <div class="row">
                            @include('auth.partials.03_informazioni')                            
                            @include('auth.partials.05_dati_personali')
                        </div>
                        <div class="row">
                            @include('auth.partials.06_luogo_di_esercizio')
                            @include('auth.partials.07_profilo_utente')
                        </div>
                        <div class="row">                            
                            @include('auth.partials.09_residenza')
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <fieldset>
                                    <legend>Verifica</legend>
                                    <div class="form-group">
                                        <div>
                                            {!! app('captcha')->display(); !!}
                                        </div>
                                    </div>                                
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-xs-12">
                          <p class="policy-reminder">Cliccando su "invia" dichiari di aver letto e accettato la nostra <a target="_blank" href="/privacy-policy">Privacy policy</a></p>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                             <button type="submit" class="btn btn-primary btn-block">Invia</button>
                            </div>
                         </div>
                    </form>
                   
                </div>
            </div>
            
        </div>
    
</section>
@stop