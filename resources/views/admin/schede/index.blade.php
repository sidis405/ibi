@extends('admin.layouts.master')

@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

@stop

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Schede di segnalazione</h2>

                         <ul class="actions">
                            <li>
                                <a href="/admin/farmaco-vigilanza/schede/crea">
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
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="/admin/farmaco-vigilanza/comunicati" >Vai a comunicati</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
  
                    </div>

                    
                    <div class="card">
                        <div class="card-header">
                            <h2>Schede di segnalazione <small>Lista schede di segnalazione presenti nella sezione Farmacovigilanza.</small></h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-identifier="true"  data-type="numeric">ID</th>
                                    <th data-column-id="titolo">Titolo</th>
                                    <th data-column-id="data-creazione">Data Creazione</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($schede as $scheda)
                                <tr>
                                    <td>{{$scheda->id}}</td>
                                    <td>{{$scheda->titolo}}</td>
                                    <td>{{$scheda->created_at->format('d-m-y H:i')}}</td>
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
        <script src="/adm/js/bootgrid-schede.js"></script>


@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('farmaco_vigilanza_menu', 'schede');

    </script>    


@stop
