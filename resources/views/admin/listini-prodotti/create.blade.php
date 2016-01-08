@extends('admin.layouts.master')

@section('header_scripts')

<link href="/adm/vendors/bower_components/summernote/dist/summernote.css" rel="stylesheet">

@stop

@section('content')
<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Listini Prodotti</h2>
            
            <ul class="actions">
                <li>
                    <a href="/admin/prodotti/listini-prodotti">
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
                            <a href="/admin/prodotti"  >Vai a prodotti</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <form role="form" method="POST" action="/admin/prodotti/listini-prodotti" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="card">
                <div class="card-header">
                    <h2>Carica un nuovo listino prodotti</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="form-group fg-line">
                        <label for="titolo">Titolo</label>
                        <input type="text" class="form-control input-sm" id="titolo" placeholder="Un titolo identificativo" name="titolo" required>
                    </div>
                    <div class="form-group fg-line">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <span class="btn btn-primary btn-file m-r-10">
                                <span class="fileinput-new">Seleziona Allegato</span>
                                <span class="fileinput-exists">Cambia Allegato</span>
                                <input type="file" name="allegato" required>
                            </span>
                            <span class="fileinput-filename"></span>
                            <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                        </div>
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
    
    activateSidebar('prodotti_menu', 'listini');

    </script>    


@stop
