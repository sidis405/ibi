@extends('admin.layouts.auth_master')

@section('auth_content')


<!-- Forgot Password -->
<div class="lc-block  toggled" id="l-forget-password">

@include('admin.layouts.errors')

    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>
    
    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
        <div class="fg-line">
            <input type="text" class="form-control" placeholder="Email Address">
        </div>
    </div>
    
    <a href="" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>
    
    <ul class="login-navigation">
        <li data-block="#l-login" class="bgm-green">Login</li>
        <li data-block="#l-register" class="bgm-red">Register</li>
    </ul>
</div>

@stop