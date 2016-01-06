@extends('admin.layouts.master')

@section('breadcrumbs')

@include('admin.layouts.breadcrumbs', array('segments' => ['Utenti', 'Lista Utenti']))

@stop

@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

@stop

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Utenti</h2>

                         <ul class="actions">
                            <li>
                                <a href="/admin/utenti/crea">
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
                                        <a href="/admin/utenti/permessi">Vai a permessi</a>
                                    </li>
                                    <li>
                                        <a href="/admin/utenti/ruoli">Vai a ruoli</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
  
                    </div>

                    
                    <div class="card">
                        <div class="card-header">
                            <h2>Utenti <small>Lista di tutti gli utenti presenti sul sito.</small></h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-identifier="true"  data-type="numeric">ID</th>
                                    <th data-column-id="nome">Nome</th>
                                    <th data-column-id="cognome">Cognome</th>
                                    <th data-column-id="email">email</th>
                                    <th data-column-id="ruolo">Ruolo</th>
                                    <th data-column-id="ultimo-accesso">Ultimo accesso</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($utenti as $utente)
                                <tr>
                                    <td>{{$utente->id}}</td>
                                    <td>{{$utente->first_name}}</td>
                                    <td>{{$utente->last_name}}</td>
                                    <td>{{$utente->email}}</td>
                                    <td>@if(count($utente->roles) > 0) {{$utente->roles[0]->name}} @else-- @endif</td>
                                    <td>@if($utente->last_login) {{date('d-m-y H:i', strtotime($utente->last_login))}}@endif</td>
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
        <script src="/adm/js/bootgrid-utenti.js"></script>


@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('utenti_menu', 'lista_utenti');

    </script>    


@stop