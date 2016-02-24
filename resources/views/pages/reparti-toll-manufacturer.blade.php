@extends('layouts.master')
@section('content')
    <div class="main-header reparti">
      <div class="container">
        <div class="main-caption">
          <h1>{{$text['toll']['reparti']}}</h1>
        </div>
      </div>
    </div>
    <section class="content reparti-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            @include('layouts.content', array('key' => 'toll_reparti_main', 'permesso'=> 'modifica_toll_development'))
          </div>
          <div class="col-md-4 sidebar-wrapper">
            @include('layouts.news_sidebar_reparti')
          </div>
        </div>
      </div>
    </section>
    <!-- Including footer-->
    @stop