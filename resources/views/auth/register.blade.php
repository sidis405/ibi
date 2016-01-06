@extends('layouts.master')
@section('header_scripts')
<script src='https://www.google.com/recaptcha/api.js'></script>
@stop
@section('content')
<div class="main-header header-registrazione">
    <div class="container">
        <div class="main-caption">
            <h1>Registrazione</h1>
        </div>
    </div>
</div>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                
                <div class="col-sm-12">
                    <div class="col-md-6 col-md-offset-4">
                        
                        <h3>Registrazione</h3>
                    </div>
                </div>
                
                <div class="col-sm-8 col-sm-offset-2">
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
                        @include('auth.partials.01_ruolo')
                        @include('auth.partials.02_area_per_farmacisti')
                        @include('auth.partials.03_informazioni')
                        @include('auth.partials.04_informativa')
                        @include('auth.partials.05_dati_personali')
                        @include('auth.partials.06_luogo_di_esercizio')
                        @include('auth.partials.07_profilo_utente')
                        @include('auth.partials.08_privacy')
                        @include('auth.partials.09_residenza')

                        
                        <fieldset>
                            <legend>Verifica</legend>
                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-3">
                                    {!! app('captcha')->display(); !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block">Invia</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>
@stop