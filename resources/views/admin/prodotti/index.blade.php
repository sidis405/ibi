@extends('admin.layouts.master')

@section('breadcrumbs')

@include('admin.layouts.breadcrumbs', array('segments' => ['Prodotti', 'Lista Prodotti']))

@stop

@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

@stop

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Prodotti</h2>

                         <ul class="actions">
                            <li>
                                <a href="/admin/prodotti/crea">
                                    <i class="zmdi zmdi-plus-circle-o"></i>
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
                                        <a href="/admin/categorie-terapeutiche">Vai a Categorie terapeutiche</a>
                                    </li>
                                    <li>
                                        <a href="/admin/principi-attivi">Vai a Principi Attivi</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
  
                    </div>

                    
                    <div class="card">
                        <div class="card-header">
                            <h2>Prodotti <small>Lista di Prodotti presenti nel database.</small></h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-identifier="true"  data-type="numeric">ID</th>
                                    <th data-column-id="prodotto">Prodotto</th>
                                    <th data-column-id="formulazione">Formulazione</th>
                                    <th data-column-id="categoria-terapeutica">Categoria</th>
                                    <th data-column-id="sezioni">Sezione</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($prodotti as $prodotto)
                                <tr>
                                    <td>{{$prodotto->id}}</td>
                                    <td>{{$prodotto->nome}}</td>
                                    <td>{{$prodotto->formulazione}}</td>
                                    <td>{{$prodotto->categoria_terapeutica->nome}}</td>
                                    <td>{{join(',', array_pluck($prodotto->sezioni, 'nome'))}}</td>
                                </tr>
                            @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        

@stop

@section('footer_scripts')
        <!-- Javascript Libraries -->
        
        <script src="/adm/vendors/bootgrid/jquery.bootgrid.js"></script>

        <!-- Data Table -->
        <script src="/adm/js/bootgrid-prodotti.js"></script>


@stop

@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('prodotti_menu', 'lista_prodotti');

    </script>    


@stop
