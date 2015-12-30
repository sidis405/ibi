@extends('admin.layouts.master')
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
            <h2>Prodotti</h2>
            
            <ul class="actions">
                <li>
                    <a href="/admin/prodotti">
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
                            <a href="/admin/principi-attivi">Vai a Principi Attivi</a>
                        </li>
                        <li>
                            <a href="/admin/categorie-terapeutiche">Vai a Categorie Terapeutiche</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>Inserisci un Nuovo Prodotto</h2>
            </div>
            
            <div class="card-body card-padding">
                <form role="form">
                    @include('admin.prodotti.partials.sezioni_partial', array('selected' => []))
                    <div class="form-group fg-line">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control input-sm" id="nome" placeholder="Il nome del prodotto">
                    </div>
                    <div class="form-group fg-line">
                        <label for="formulazione">Formulazione</label>
                        <input type="text" class="form-control input-sm" id="formulazione" placeholder="La formulazione completa del prodotto">
                    </div>
                    @include('admin.prodotti.partials.principi_attivi_partial', array('selected' => []))
                    @include('admin.prodotti.partials.categorie_terapeutiche_partial', array('selected' => []))
                    @include('admin.prodotti.partials.fascie_partial', array('selected' => []))
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="active" checked="">
                            <i class="input-helper"></i>
                            Pubblica questo prodotto
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-sm m-t-10">Salva</button>
                </form>
            </div>
        </div>
        
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