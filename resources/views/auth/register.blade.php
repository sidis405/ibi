@extends('admin.layouts.auth_master')

@section('auth_content')


<div class="lc-block  toggled" id="l-register">
<form  method="POST" action="/auth/register">

{!! csrf_field() !!}

<!-- Register -->

@include('admin.layouts.errors')

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
        <div class="fg-line">
            <input type="text" name="first_name"  value="{{ old('first_name') }}" class="form-control" placeholder="Nome">
        </div>
    </div>

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
        <div class="fg-line">
            <input type="text"  name="last_name"  value="{{ old('last_name') }}"  class="form-control" placeholder="Cognome">
        </div>
    </div>
    
    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
        <div class="fg-line">
            <input type="text"  name="email"  value="{{ old('email') }}"  class="form-control" placeholder="Email">
        </div>
    </div>
    
    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
        <div class="fg-line">
            <input type="password"  name="password"  class="form-control" placeholder="Password">
        </div>
    </div>

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
        <div class="fg-line">
            <input type="password"  name="password_confirmation" class="form-control" placeholder="Conferma Password">
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <div class="checkbox">
        <label>
            <input type="checkbox" value="">
            <i class="input-helper"></i>
            Accetto <a href="#">Termini e condizioni d'uso</a>
        </label>
    </div>
    
    <button type="submit" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
    
    <ul class="login-navigation">
        <li class="bgm-green"><a href="/auth/login">Login</a></li>
        <li class="bgm-orange"><a href="/auth/password">Password Smarrita?</a></li>
    </ul>
</form>
</div>


@stop