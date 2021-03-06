@extends('admin.layouts.master')


@section('content')
<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Slider</h2>
            
            <ul class="actions">
                <li>
                    <a href="/admin/voci-menu">
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
                    </ul>
                </li>
            </ul>
        </div>
        <form role="form" method="POST" action="/admin/voci-menu" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="card">
                <div class="card-header">
                    <h2>Inserisci una nuova voce menu</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="form-group fg-line">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control input-sm" placeholder="Slug identificativo" name="slug" required>
                        </div>
                </div>
            </div>
            
            @foreach($lingue as $lingua)

            <div class="card">
                <div class="card-header">
                    <h2>Label {{$lingua->label}}</h2>
                </div>
                
                <div class="card-body card-padding">
                        <div class="form-group fg-line">
                            <label for="label">Titolo</label>
                            <input type="text" class="form-control input-sm"  placeholder="Label" name="menu[{{$lingua->locale}}]" required>
                        </div>
                </div>
            </div>
            @endforeach

         

            <div class="card">
                
                <div class="card-body card-padding">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <button type="reset" class="btn btn-warning btn-sm m-t-10">Abbandona</button>
                        </div>
                        <div class="col-sm-6 text-center">
                            <button type="submit" class="btn btn-primary btn-sm m-t-10">Salva</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</section>
@stop



@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('struttura_menu', 'voci_menu');

    </script>    


@stop
