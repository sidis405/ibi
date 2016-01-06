@extends('admin.layouts.master')

@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

@stop

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Posizioni Aperte</h2>

                         <ul class="actions">
                            <li>
                                <a href="/admin/lavora-con-noi/crea">
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
                                </ul>
                            </li>
                        </ul>
  
                    </div>

                    
                    <div class="card">
                        <div class="card-header">
                            <h2>Posizioni Aperte <small>Lista di posizioni aperte per la sezione Lavora con noi.</small></h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-identifier="true"  data-type="numeric">ID</th>
                                    <th data-column-id="titolo">Titolo</th>
                                    <th data-column-id="sede">Sede</th>
                                    <th data-column-id="candidature">Candidature</th>
                                    <th data-column-id="data-creazione">Data Creazione</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($posizioni as $posizione)
                                <tr>
                                    <td>{{$posizione->id}}</td>
                                    <td>{{$posizione->titolo}}</td>
                                    <td>{{$posizione->sede}}</td>
                                    <td>{{count($posizione->candidature)}}</td>
                                    <td>{{$posizione->created_at->format('d-m-y H:i')}}</td>
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
        <script src="/adm/js/bootgrid-posizioni.js"></script>


@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('lavora_con_noi_menu', 'lista_posizioni');

    </script>    


@stop
