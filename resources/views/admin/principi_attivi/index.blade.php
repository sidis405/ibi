@extends('admin.layouts.master')

@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

@stop

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Principi Attivi</h2>

                         <ul class="actions">
                            <li>
                                <a href="/admin/principi-attivi/crea">
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
                                        <a href="/admin/prodotti">Vai a Prodotti</a>
                                    </li>
                                    <li>
                                        <a href="/admin/categorie-terapeutiche">Vai a Categorie terapeutiche</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
  
                    </div>

                    
                    <div class="card">
                        <div class="card-header">
                            <h2>Principi Attivi <small>Lista di Principi Attivi con numero prodotti e categorie terapeutiche.</small></h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-identifier="true"  data-type="numeric">ID</th>
                                    <th data-column-id="principio-attivo">Principio</th>
                                    <th data-column-id="prodotti" >Prodotti</th>
                                    <th data-column-id="categorie-terapeutiche" >N° Categorie</th>
                                    <th data-column-id="lista-categorie" >Categorie</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($principi_attivi as $principio)
                                <tr>
                                    <td>{{$principio->id}}</td>
                                    <td>{{$principio->nome}}</td>
                                    <td>{{count($principio->prodotti)}}</td>
                                    <td>{{count($principio->categorie_terapeutiche)}}</td>
                                    <td>{{join(', ', array_pluck($principio->categorie_terapeutiche, 'nome'))}}</td>
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
        <script src="/adm/js/bootgrid-principi-attivi.js"></script>


@stop

@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('prodotti_menu', 'principi_attivi');

    </script>    


@stop