@extends('admin.layouts.master')

@section('header_scripts')

<link href="/adm/vendors/bower_components/summernote/dist/summernote.css" rel="stylesheet">

@stop

@section('content')
<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Comunicati</h2>
            
            <ul class="actions">
                <li>
                    <a href="/admin/farmaco-vigilanza/comunicati">
                        <i class="zmdi zmdi-format-list-bulleted"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="" data-toggle="dropdown">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>
                    
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="" class="refresh-page">Aggiorna pagina</a>
                        </li>
                    </ul>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="/admin/farmaco-vigilanza/comunicati" >Vai a comunicati</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <form role="form" method="POST" action="/admin/farmaco-vigilanza/schede/{{$scheda->id}}" enctype="multipart/form-data">
        <input type="hidden" name="scheda_id" value="{{$scheda->id}}">
        <input type="hidden" name="_method" value="PUT">
            {!! csrf_field() !!}
            <div class="card">
                <div class="card-header">
                    <h2>Modifica scheda</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="form-group fg-line">
                        <label for="titolo">Titolo</label>
                        <input type="text" class="form-control input-sm" value="{{$scheda->titolo}}" id="titolo" placeholder="Il titolo del scheda" name="titolo" required>
                    </div>
                  

                    <div class="form-group fg-line">
                        @include('admin.schede.allegato_partial')
                    </div>
                </div>
            </div>
            

            <div class="card">
                
                <div class="card-body card-padding">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="active" @if($scheda->active == 1) checked @endif>
                            <i class="input-helper"></i>
                            Pubblica questa scheda
                        </label>
                    </div>
                </div>
            </div>
            <div class="card">
                
                <div class="card-body card-padding">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <button type="reset" class="btn btn-warning btn-sm m-t-10">Abbandona</button>
                        </div>
                        <div class="col-sm-6 text-center">
                            <button type="submit" class="btn btn-primary btn-sm m-t-10">Salva</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</section>
@stop
@section('footer_scripts')
<script src="/adm/vendors/bower_components/summernote/dist/summernote.min.js"></script>
<script src="/adm/vendors/fileinput/fileinput.min.js"></script>
<script src="/adm/vendors/input-mask/input-mask.min.js"></script>
<script src="/adm/vendors/farbtastic/farbtastic.min.js"></script>
@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('farmaco_vigilanza_menu', 'schede');

    </script>    


@stop
