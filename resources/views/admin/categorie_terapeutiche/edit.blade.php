@extends('admin.layouts.master')

@section('content')

            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Categorie Terapeutiche</h2>
                    
                        <ul class="actions">
                            <li>
                                <a href="/admin/categorie-terapeutiche">
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
                                        <a href="/admin/principi-attivi">Vai a Principi Attivi</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    
                    <div class="card">
                        
                        <form class="form-horizontal" role="form" method="POST" action="/admin/categorie-terapeutiche/{{$categoria_terapeutica->id}}">
                        <input type="hidden" name="_method" value="PUT">

                                {!! csrf_field() !!}

                                <input type="hidden" name="categoria_terapeutica_id" value="{{$categoria_terapeutica->id}}">

                                @include('admin.layouts.errors')
    
                            <div class="card-header">
                                <h2>Modifica Categoria Terapeutica </h2>
                            </div>
                            
                            <div class="card-body card-padding">
                             @foreach($lingue as $lingua)
                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Categoria Terapeutica {{$lingua->label}}</label>
                                    <div class="col-sm-10">
                                        <div class="fg-line">
                                            <input type="text" class="form-control input-sm" value="{{$traduzioni[$lingua->locale]['nome']}}" placeholder="Il titolo della categoria" name="nomi[{{$lingua->locale}}]" required>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                @include('admin.categorie_terapeutiche.principi_attivi_form_partial', array('principi_categoria' => array_pluck($categoria_terapeutica->principi_attivi, 'id')))
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
    
    activateSidebar('prodotti_menu', 'categorie_terapeutiche');

    </script>    


@stop