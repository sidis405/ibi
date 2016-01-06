@extends('admin.layouts.master')

@section('header_scripts')

<link href="/adm/vendors/farbtastic/farbtastic.css" rel="stylesheet">
<link href="/adm/vendors/chosen_v1.4.2/chosen.min.css" rel="stylesheet">
@stop

@section('content')
<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Slider</h2>
            
            <ul class="actions">
                <li>
                    <a href="/admin/slider">
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
        <form role="form" method="POST" action="/admin/slider" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="card">
                <div class="card-header">
                    <h2>Inserisci un nuovo slider</h2>
                </div>
                
                <div class="card-body card-padding">

                    <div class="form-group fg-line">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                            <div>
                                <span class="btn btn-info btn-file">
                                    <span class="fileinput-new">Seleziona immagine</span>
                                    <span class="fileinput-exists">Cambia</span>
                                    <input type="file" name="immagine" required>
                                </span>
                                <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group fg-line">
                            <label for="link">Link</label>
                            <input type="text" class="form-control input-sm" placeholder="Link dove punterà lo slider" name="link" required>
                        </div>
                </div>
            </div>
            
            @foreach($lingue as $lingua)

            <div class="card">
                <div class="card-header">
                    <h2>Titolo e sottotitolo {{$lingua->label}}</h2>
                </div>
                
                <div class="card-body card-padding">
                        <div class="form-group fg-line">
                            <label for="descrizione">Titolo</label>
                            <input type="text" class="form-control input-sm"  placeholder="Il titolo slider" name="titoli[{{$lingua->locale}}]" required>
                        </div>
                        <div class="form-group fg-line">
                            <label for="descrizione">Sottotitolo</label>
                            <input type="text" class="form-control input-sm" placeholder="Sottotitolo slider" name="sottotitoli[{{$lingua->locale}}]" required>
                        </div>
                </div>
            </div>
            @endforeach

            <div class="card">
                
                <div class="card-body card-padding">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="active" checked="">
                            <i class="input-helper"></i>
                            Pubblica questo slider
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

<script src="/adm/vendors/fileinput/fileinput.min.js"></script>
<script src="/adm/vendors/input-mask/input-mask.min.js"></script>
<script src="/adm/vendors/farbtastic/farbtastic.min.js"></script>


@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('contenuti_sito_menu', 'slider');

    </script>    


@stop
