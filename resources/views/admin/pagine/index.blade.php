@extends('admin.layouts.master')

@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

@stop

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Pagine</h2>

                         <ul class="actions">
                            <li>
                                <a href="/admin/pagine/crea">
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
                                        <a href="/admin/contenuti" >Vai a contenuti</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
  
                    </div>

                    
                    <div class="card">
                        <div class="card-header">
                            <h2>Pagine <small>Le pagine che costruiscono il sito. <strong>PROCEDERE CON CAUTELA</strong></small></h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-identifier="true"  data-type="numeric">ID</th>
                                    <th data-column-id="pagina">Pagina</th>
                                    <th data-column-id="slug">Slug</th>
                                    <th data-column-id="contenuti">Blocchi contenuto</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($pagine as $pagina)
                                <tr>
                                    <td>{{$pagina->id}}</td>
                                    <td>{{$pagina->name}}</td>
                                    <td>{{$pagina->slug}}</td>
                                    <td>{{count($pagina->contenuti)}}</td>
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
        <script src="/adm/js/bootgrid-pagine.js"></script>


@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('struttura_menu', 'pagine');

    </script>    


@stop
