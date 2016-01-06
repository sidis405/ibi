@extends('layouts.master')

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
                    
                    @include('flash::message')

                </div>
            </div>
            
        </div>
    </div>
</section>
@stop