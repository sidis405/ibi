@extends('admin.layouts.master')

@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

@stop

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Voci Menu</h2>

                         <ul class="actions">
                            <li>
                                <a href="/admin/voci-menu/crea">
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
                            <h2>Voci Menu <small>Le voci del menu di navigazione, in varie lingue. <strong>PROCEDERE CON CAUTELA</strong></small></h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-identifier="true"  data-type="numeric">ID</th>
                                    <th data-column-id="label">Label</th>
                                    <th data-column-id="slug">Slug</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($menu as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->label}}</td>
                                    <td>{{$item->slug}}</td>
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
        <script src="/adm/js/bootgrid-voci-menu.js"></script>


@stop