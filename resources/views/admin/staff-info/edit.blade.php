@extends('admin.layouts.master')

@section('header_scripts')

<link href="/adm/vendors/bower_components/summernote/dist/summernote.css" rel="stylesheet">

@stop

@section('content')
<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Percentuale Dipendenti</h2>
            
            <ul class="actions">
                <li>
                    <a href="/admin/lavora-con-noi/percentuale-dipendenti">
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
                </li>
            </ul>
        </div>
        <form role="form" method="POST" action="/admin/lavora-con-noi/percentuale-dipendenti/{{$staff_info->id}}" enctype="multipart/form-data">
        <input type="hidden" name="staff_info_id" value="{{$staff_info->id}}">
        <input type="hidden" name="_method" value="PUT">
            {!! csrf_field() !!}
            <div class="card">
                <div class="card-header">
                    <h2>Modifica Percentuale Dipendenti</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="form-group fg-line">
                        <label for="women">% Donne</label>
                        <input type="text" class="form-control input-sm" value="{{$staff_info->women}}" id="women" name="women" required>
                    </div>

                    <div class="form-group fg-line">
                        <label for="men">% Uomini</label>
                        <input type="text" class="form-control input-sm" value="{{$staff_info->men}}" id="men" name="men" required>
                    </div>

                    <div class="form-group fg-line">
                        <label for="age">Età Media in anni</label>
                        <input type="text" class="form-control input-sm" value="{{$staff_info->age}}" id="age" name="age" required>
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
