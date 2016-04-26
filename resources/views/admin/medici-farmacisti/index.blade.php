@extends('admin.layouts.master')



@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

@stop

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Medici /Farmacisti</h2>

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
                            <h2>Medici / Farmacisti <small>Lista di tutti gli utenti presenti sul sito, registrati come Medici of Farmacisti.</small></h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-identifier="true"  data-type="numeric">ID</th>
                                    <th data-column-id="nome">Nome</th>
                                    <th data-column-id="cognome">Cognome</th>
                                    <th data-column-id="email">Email</th>
                                    <th data-column-id="ruolo">Ruolo</th>
                                    <th data-column-id="provincia-albo">Provincia Albo</th>
                                    <th data-column-id="numero-albo">N° iscr. Albo</th>
                                    <th data-column-id="specializzazione">Specializzazione</th>
                                    <th data-column-id="data-registrazione">Registrato il</th>
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
                                    <td>{{$utente->profile[0]->provincia_albo_rel->nome}}</td>
                                    <td>{{$utente->profile[0]->numero_albo}}</td>
                                    <td>{{$utente->profile[0]->specializzazione_rel->nome}}</td>
                                    <td>@if($utente->created_at) {{date('d-m-y H:i', strtotime($utente->created_at))}}@endif</td>
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
        <script src="/adm/js/bootgrid-medici-farmacisti.js"></script>


@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('utenti_menu', 'medici_farmacisti');

    </script>    


@stop