@extends('admin.layouts.auth_master')

@section('auth_content')

<div class="admin-logo">
    <img src="/img/ibi-lorenzini-logo.png" alt="">
</div>

<!-- Login -->
<div class="lc-block toggled" id="l-login">
<form  method="POST" action="/auth/login">

{!! csrf_field() !!}



@include('admin.layouts.errors')

     <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
        <div class="fg-line">
            <input style="padding: 5px;"  type="text"  name="email"  value="{{ old('email') }}"  class="form-control" placeholder="Email">
        </div>
    </div>
    
    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
        <div class="fg-line">
            <input style="padding: 5px;" type="password"  name="password"  class="form-control" placeholder="Password">
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <div class="checkbox">
        <label>
            <input type="checkbox" value="">
            <i class="input-helper"></i>
            Ricorda la mia password
        </label>
    </div>
    
    <button type="submit" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
    
    <ul class="login-navigation">
        <!-- <li  class="bgm-red"><a href="/auth/register">Register</a></li> -->
        <li class="bgm-orange"><a href="/auth/password">Password Smarrita?</a></li>
    </ul>
</form>
</div>


@stop