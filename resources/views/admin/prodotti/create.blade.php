@extends('admin.layouts.master')
@section('header_scripts')
<link href="/adm/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
<link href="/adm/vendors/bower_components/summernote/dist/summernote.css" rel="stylesheet">
<link href="/adm/vendors/farbtastic/farbtastic.css" rel="stylesheet">
<link href="/adm/vendors/chosen_v1.4.2/chosen.min.css" rel="stylesheet">
@stop

@section('breadcrumbs')

@include('admin.layouts.breadcrumbs', array('segments' => ['Prodotti', 'Crea']))

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
        <form role="form" method="POST" action="/admin/prodotti" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="card">
                <div class="card-header">
                    <h2>Inserisci un Nuovo Prodotto</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="row">
                        @include('admin.prodotti.partials.sezioni_partial', array('selected' => []))
                        <!-- @include('admin.prodotti.partials.paesi_partial', array('selected' => [])) -->
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2>Denominazione e Formulazione</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="form-group fg-line">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control input-sm" id="nome" placeholder="Il nome del prodotto" name="nome">
                    </div>
                    @foreach($lingue as $lingua)
                    <div class="form-group fg-line">
                        <label for="formulazione">Formulazione {{$lingua->label}}</label>
                        <input type="text" class="form-control input-sm" id="formulazione"  name="formulazioni[{{$lingua->locale}}]"  placeholder="La formulazione completa del prodotto {{$lingua->label}}">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2>Categoria e Principio</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="row">
                        @include('admin.prodotti.partials.principi_attivi_partial', array('selected' => []))
                        @include('admin.prodotti.partials.categorie_terapeutiche_partial', array('selected' => []))
                        @include('admin.prodotti.partials.fascie_partial', array('selected' => []))
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2>Allegati</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="f-500 c-black m-b-20">Foglietto Illustrativo</p>
                            
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <span class="btn btn-primary btn-file m-r-10">
                                    <span class="fileinput-new">Selezione folglietto</span>
                                    <span class="fileinput-exists">Cambia Foglietto</span>
                                    <input type="file" name="foglietto_illustrativo" >
                                </span>
                                <span class="fileinput-filename"></span>
                                <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p class="f-500 c-black m-b-20">Scheda Tecnica</p>
                            
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <span class="btn btn-primary btn-file m-r-10">
                                    <span class="fileinput-new">Seleziona Scheda</span>
                                    <span class="fileinput-exists">Cambia Scheda</span>
                                    <input type="file" name="scheda_tecnica" >
                                </span>
                                <span class="fileinput-filename"></span>
                                <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       <!--      <div class="card">
                <div class="card-header">
                    <h2>Classificazione</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="row">
                        <div class="form-group fg-line col-sm-6">
                            <label for="aic">AIC</label>
                            <input type="text" class="form-control input-sm" id="aic" name="aic" placeholder="AIC" >
                        </div>
                        <div class="form-group fg-line col-sm-6">
                            <label for="atc">ATC</label>
                            <input type="text" class="form-control input-sm" id="atc" name="atc" placeholder="ATC" >
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="card">
                <div class="card-header">
                    <h2>Dettagli Aggiuntivi</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="row">
                        <div class="form-group fg-line col-sm-12">
                            <label for="regime_dispensazione">Regime dispensazione</label>
                            <input type="text"  class="form-control input-sm" id="regime_dispensazione" name="regime_dispensazione" placeholder="Regime dispensazione">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group fg-line col-sm-6">
                            <label for="unita">Unità</label>
                            <input type="text"  class="form-control input-sm" id="unita" name="unita" placeholder="Unità">
                        </div>
                        <div class="form-group fg-line col-sm-6">
                            <label for="validita_mesi">Validità mesi</label>
                            <input type="text"  class="form-control input-sm" name="validita_mesi" id="validita_mesi" placeholder="Validità mesi">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                
                <div class="card-body card-padding">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="active" checked="">
                            <i class="input-helper"></i>
                            Pubblica questo prodotto
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
    
    activateSidebar('prodotti_menu', 'aggiungi_prodotto');

    </script>    


@stop