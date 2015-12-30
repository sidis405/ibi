@extends('admin.layouts.master')

@section('content')

            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Categorie Terapeutiche</h2>
                    
                        <ul class="actions">
                            <li>
                                <a href="/admin/principi-attivi">
                                    <i class="zmdi zmdi-format-list-bulleted"></i>
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
                                        <a href="/admin/prodotti">Vai a Prodotti</a>
                                    </li>
                                    <li>
                                        <a href="/admin/categorie-terapeutiche">Vai a Categorie Terapeutiche</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    
                    <div class="card">
                        
                        <form class="form-horizontal" role="form" method="POST" action="/admin/principi-attivi/{{$principio_attivo->id}}">
                        <input type="hidden" name="_method" value="PUT">

                                {!! csrf_field() !!}

                                <input type="hidden" name="principio_attivo_id" value="{{$principio_attivo->id}}">

                                @include('admin.layouts.errors')
    
                            <div class="card-header">
                                <h2>Modifica Categoria Terapeutica </h2>
                            </div>
                            
                            <div class="card-body card-padding">
                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Categoria Terapeutica</label>
                                    <div class="col-sm-10">
                                        <div class="fg-line">
                                            <input type="text" name="nome" value="{{$principio_attivo->nome}}" class="form-control input-sm" id="nome" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                @include('admin.principi_attivi.categorie_terapeutiche_form_partial', array('principi_categoria' => array_pluck($principio_attivo->categorie_terapeutiche, 'id')))
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

