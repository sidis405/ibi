@extends('admin.layouts.master')

@section('content')

            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Permessi</h2>
                    
                        <ul class="actions">
                            <li>
                                <a href="/admin/utenti/ruoli">
                                    <i class="zmdi zmdi-format-list-bulleted"></i>
                                </a>
                            </li>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="" class="refresh-page">Aggiorna pagina</a>
                                </li>
                                <li>
                                    <a href="/admin/utenti/permessi">Vai a permessi</a>
                                </li>
                                <li>
                                    <a href="/admin/utenti">Vai a utenti</a>
                                </li>
                            </ul>
                        </ul>
                    </div>

                    
                    <div class="card">
                        
                        <form class="form-horizontal" role="form" method="POST" action="/admin/utenti/ruoli/{{$ruolo->id}}">
                        <input type="hidden" name="_method" value="PUT">

                                {!! csrf_field() !!}

                                <input type="hidden" name="ruolo_id" value="{{$ruolo->id}}">

                                @include('admin.layouts.errors')
    
                            <div class="card-header">
                                <h2>Modifica ruolo </h2>
                            </div>
                            
                            <div class="card-body card-padding">
                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Nome ruolo</label>
                                    <div class="col-sm-10">
                                        <div class="fg-line">
                                            <input type="text" name="name" value="{{$ruolo->name}}" class="form-control input-sm" id="name" placeholder="" required>
                                        </div>
                                    </div>
                                </div>

                                @include('admin.acl.ruoli.permessi_partial', array('ruoli_permesso' => array_pluck($ruolo->permissions, 'id')))

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">Salva</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                    </section>
                    


@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('utenti_menu', 'ruoli');

    </script>    


@stop