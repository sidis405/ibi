@extends('admin.layouts.master')

@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

@stop

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Categorie Terapeutiche</h2>

                         <ul class="actions">
                            <li>
                                <a href="/admin/categorie-terapeutiche/crea">
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
                                        <a href="/admin/principi-attivi">Vai a Principi Attivi</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
  
                    </div>

                    
                    <div class="card">
                        <div class="card-header">
                            <h2>Categorie Terapeutiche <small>Lista di Categorie Terapautiche con numero prodotti e principi attivi.</small></h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-identifier="true"  data-type="numeric">ID</th>
                                    <th data-column-id="categoria-terapeutica">Categoria</th>
                                    <th data-column-id="prodotti" >Prodotti</th>
                                    <th data-column-id="principi-attivi" >Principi attivi</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($categorie_terapeutiche as $categoria)
                                <tr>
                                    <td>{{$categoria->id}}</td>
                                    <td>{{$categoria->nome}}</td>
                                    <td>{{count($categoria->prodotti)}}</td>
                                    <td>{{count($categoria->principi_attivi)}}</td>
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
        <script src="/adm/js/bootgrid-categorie-terapeutiche.js"></script>


@stop

@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('prodotti_menu', 'categorie_terapeutiche');

    </script>    


@stop