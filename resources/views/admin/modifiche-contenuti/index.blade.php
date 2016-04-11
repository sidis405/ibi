@extends('admin.layouts.master')



@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

@stop

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Modifiche Contenuti Sito</h2>

                         <ul class="actions">
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
                            <h2>Modifiche contenuti sito <small>Lista delle modifiche in attesa di conferma.</small></h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-identifier="true"  data-type="numeric">ID</th>
                                    <th data-column-id="pagina">Pagina</th>
                                    <th data-column-id="locale">Lingua</th>
                                    <th data-column-id="utente">Utente</th>
                                    <th data-column-id="data-modifica">Modificato il</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($modifiche as $mod)
                                <tr>
                                    <td>{{$mod['version_id']}}</td>
                                    <td>{{$mod['base_contenuto_translation']['contenuto']['pagina']['name']}}</td>
                                    <td>{{$mod['base_contenuto_translation']['locale']}}</td>
                                    <td>{{$mod['user']['first_name']}} {{$mod['user']['last_name']}}</td>
                                    <td>@if($mod['created_at']) {{date('d-m-y H:i', strtotime($mod['created_at']))}}@endif</td>
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
        <script src="/adm/js/bootgrid-modifiche.js"></script>


@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('contenuti_sito_menu', 'modifiche');

    </script>    


@stop