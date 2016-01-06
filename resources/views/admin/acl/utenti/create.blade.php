@extends('admin.layouts.master')

@section('breadcrumbs')

@include('admin.layouts.breadcrumbs', array('segments' => ['Utenti', 'Crea']))

@stop

@section('header_scripts')
<link href="/adm/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
<link href="/adm/vendors/bower_components/summernote/dist/summernote.css" rel="stylesheet">
<link href="/adm/vendors/farbtastic/farbtastic.css" rel="stylesheet">
<link href="/adm/vendors/chosen_v1.4.2/chosen.min.css" rel="stylesheet">
@stop
@section('content')
<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>UTENTI</h2>
            
            <ul class="actions">
                <li>
                    <a href="/admin/utenti">
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
                        <li>
                            <a href="/admin/utenti/ruoli">Vai a Ruoli</a>
                        </li>
                        <li>
                            <a href="/admin/utenti/permessi">Vai a Permessi</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <form role="form" method="POST" action="/admin/utenti" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="card">
                <div class="card-header">
                    <h2>Crea utente <small>Crea un nuovo utente e assegna un ruolo.</small></h2>
                </div>
                
                <div class="card-body card-padding">
                    <form role="form">
                        <div class="form-group fg-line">
                            <label for="first_name">Nome</label>
                            <input type="text" class="form-control input-sm" name="first_name" id="first_name" placeholder="" required>
                        </div>
                        <div class="form-group fg-line">
                            <label for="last_name">Cognome</label>
                            <input type="text" class="form-control input-sm" name="last_name" id="last_name" placeholder="" required>
                        </div>
                        <div class="form-group fg-line">
                            <label for="email">Email</label>
                            <input type="email" class="form-control input-sm" name="email" id="email" placeholder="" required>
                        </div>


                        <div class="form-group fg-line">
                            <label for="password">Password</label>
                            <input type="password" class="form-control input-sm" name="password" id="password" placeholder="" required>
                        </div>

                        <div class="form-group fg-line">
                            <label for="password">Ruolo</label>
                            @include('admin.acl.utenti.ruoli_partial', array('selected' => []))
                        </div>


                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="active">
                                <i class="input-helper"></i>
                                Attiva questo utente immediatamente
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-sm m-t-10">Submit</button>
                    </form>
                </div>
            </div>
        </form>
        
    </div>
</section>
@stop
@section('footer_scripts')
<script src="/adm/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
<script src="/adm/vendors/bower_components/summernote/dist/summernote.min.js"></script>
<script src="/adm/vendors/chosen_v1.4.2/chosen.jquery.min.js"></script>
<script src="/adm/vendors/fileinput/fileinput.min.js"></script>
<script src="/adm/vendors/input-mask/input-mask.min.js"></script>
<script src="/adm/vendors/farbtastic/farbtastic.min.js"></script>
<script src="/adm/vendors/bower_components/autosize/dist/autosize.min.js"></script>
@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('utenti_menu', 'aggiungi_utenti');

    </script>    


@stop