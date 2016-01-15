@extends('layouts.master')

@section('content')
    <div class="main-header area-riservata">
      <div class="container">
        <div class="main-caption">
          <h1>Area Riservata</h1>
        </div>
      </div>
    </div>
    <section class="content area-riservata-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">                     
                    
                    
                    <div class="row">                                                
                        <div class="col-md-4 col-md-offset-4">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    Ci sono stati dei problemi con il login.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="area-riservata-hero">
                                <form class="form-horizontal" role="form" method="POST" action="">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <div>
                                            <input type="email" class="form-control fields" name="email" value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <div>
                                            <input type="password" class="form-control fields" name="password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember"> Ricorda la mia password
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <a href="{{ url('/auth/register') }}">Registrati</a>
                                            <br>                           
                                            <a href="{{ url('/password/email') }}">Hai smarrito la password</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>

                    
                </div>
          
        </div>
      </div>
    </section>

@stop


