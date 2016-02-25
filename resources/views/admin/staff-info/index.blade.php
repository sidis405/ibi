@extends('admin.layouts.master')

@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

@stop

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Percentuale Dipendenti</h2>

                         <ul class="actions">
                           <!--  <li>
                                <a href="/admin/trasferimenti-di-valore/crea">
                                    <i class="zmdi zmdi-plus-circle-o"></i>
                                </a>
                            </li> -->
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
                            <h2>Percentuale Dipendenti</h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-identifier="true"  data-type="numeric">ID</th>
                                    <th data-column-id="donne">% Donne</th>
                                    <th data-column-id="uomini">% Uomini</th>
                                    <th data-column-id="eta_media">Eta Media in Anni</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($staff_info as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->women}}</td>
                                    <td>{{$item->men}}</td>
                                    <td>{{$item->age}}</td>
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
        <script src="/adm/js/bootgrid-staff-info.js"></script>


@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('lavora_con_noi_menu', 'percentuale_dipendenti');

    </script>    


@stop
