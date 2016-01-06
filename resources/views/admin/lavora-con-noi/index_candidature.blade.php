@extends('admin.layouts.master')

@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

@stop

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Candidature</h2>

                         <ul class="actions">
                            
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="" class="refresh-page">Aggiorna pagina</a>
                                    </li>
                                    <li>
                                        <a href="/admin/lavora-con-noi" >Vai a Posizioni aperte</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
  
                    </div>

                    
                    <div class="card">
                        <div class="card-header">
                            <h2>Candidature <small>Candidature ricevute per le posizioni aperte.</small></h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-identifier="true"  data-type="numeric">ID</th>
                                    <th data-column-id="nome-cognome">Nome Cognome</th>
                                    <th data-column-id="posizione-sede">Posizione / Sede</th>
                                    <th data-column-id="data-invio">Data Creazione</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($candidature as $candidatura)
                                <tr>
                                    <td>{{$candidatura->id}}</td>
                                    <td>{{$candidatura->nome}} {{$candidatura->cognome}}</td>
                                    <td>{{$candidatura->posizione->titolo}} / {{$candidatura->posizione->sede}}</td>
                                    <td>{{$candidatura->created_at->format('d-m-y H:i')}}</td>
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
        <script src="/adm/js/bootgrid-candidature.js"></script>


@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('lavora_con_noi_menu', 'candidature');

    </script>    


@stop
