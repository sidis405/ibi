@extends('admin.layouts.master')

@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

@stop

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Permessi</h2>

                         <ul class="actions">
                            <li>
                                <a href="/admin/utenti/permessi/crea">
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
                                        <a href="/admin/utenti/ruoli">Vai a ruoli</a>
                                    </li>
                                    <li>
                                        <a href="/admin/utenti">Vai a utenti</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
  
                    </div>

                    
                    <div class="card">
                        <div class="card-header">
                            <h2>PERMESSI <small>Permessi assegnati ai vari ruoli assegnati ad utenti.</small></h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-identifier="true"  data-type="numeric">ID</th>
                                    <th data-column-id="permesso">Permesso</th>
                                    <th data-column-id="ruoli">Ruoli</th>
                                    <th data-column-id="utenti">utenti</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($permessi as $permesso)
                                <tr>
                                    <td>{{$permesso->id}}</td>
                                    <td>{{$permesso->name}}</td>
                                    <td>{{count($permesso->roles)}}</td>
                                    <td>{{count(array_pluck($permesso->roles, 'users'))}}</td>
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
        <script src="/adm/js/bootgrid-permessi.js"></script>


@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('utenti_menu', 'permessi');

    </script>    


@stop

