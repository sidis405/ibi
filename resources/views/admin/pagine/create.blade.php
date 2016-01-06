@extends('admin.layouts.master')


@section('content')
<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>News</h2>
            
            <ul class="actions">
                <li>
                    <a href="/admin/pagine">
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
                            <a href="/admin/contenuti" >Vai a contenuti</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <form role="form" method="POST" action="/admin/pagine" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="card">
                <div class="card-header">
                    <h2>Inserisci una Nuova News</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="form-group fg-line">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control input-sm" id="name" placeholder="Nome pagina" name="name" required>
                    </div>
                    <div class="form-group fg-line">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control input-sm" id="slug" placeholder="Slug pagina" name="slug" required>
                    </div>
                </div>
            </div>
            

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

@section('footer_scripts')

<script>
    // Convert to Slug
    $("#name").keyup(function(){
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
            $("#slug").val(Text);
    });
</script>
@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('struttura_menu', 'pagine');

    </script>    


@stop
