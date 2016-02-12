@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header privacy-policy">
      <div class="container">
        <div class="main-caption">
          <h1>Privacy Policy</h1>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            @include('layouts.content', array('key' => 'privacy_policy_main', 'permesso'=> 'modifica_privacy_policy'))
          </div>
          <div class="col-md-4 sidebar-wrapper">
            @include("layouts.news_sidebar")
          </div>
        </div>
      </div>
    </section>
@stop