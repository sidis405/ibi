@extends('admin.layouts.master')

@section('header_scripts')

<link href="/adm/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
<link href="/adm/vendors/bower_components/summernote/dist/summernote.css" rel="stylesheet">
<link href="/adm/vendors/farbtastic/farbtastic.css" rel="stylesheet">
<link href="/adm/vendors/chosen_v1.4.2/chosen.min.css" rel="stylesheet">
@stop

@section('content')
<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Contenuti</h2>
            
            <ul class="actions">
                <li>
                    <a href="/admin/contenuti">
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
                            <a href="/admin/pagine" >Vai a Pagine</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <form role="form" method="POST" action="/admin/contenuti/{{$contenuto->id}}" enctype="multipart/form-data">
            <input type="hidden" name="contenuto_id" value="{{$contenuto->id}}">
            <input type="hidden" name="_method" value="PUT">
            {!! csrf_field() !!}
            <div class="card">
                <div class="card-header">
                    <h2>Modifica contenuto : "{{$contenuto->descrizione}}"</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="form-group fg-line">
                        <label for="descrizione">Breve descrizione</label>
                        <input type="text" class="form-control input-sm" id="descrizione" value="{{$contenuto->descrizione}}" placeholder="La descrizione identificativo del contenuto" name="descrizione" required>
                    </div>
                    <div class="form-group fg-line">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control input-sm" id="slug" value="{{$contenuto->slug}}" placeholder="Lo slug identificativo del contenuto" name="slug" required>
                    </div>
                    <div class="form-group">
                            <label for="pagina_id">Pagina</label>
                            <select class="selectpicker" data-placeholder="Scegli..." name="pagina_id" required>
                            <option disabled selected>Scegli</option>
                                 @foreach($pagine as $pagina)
                                    <option value="{{$pagina->id}}" @if($pagina->id == $contenuto->pagina_id) selected @endif>{{$pagina->name}}</option>
                                    @endforeach
                            </select>
                    </div>
                </div>
            </div>
            
            @foreach($lingue as $lingua)

            <div class="card">
                <div class="card-header">
                    <h2>Testo {{$lingua->label}}</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="row">
                        <textarea name="testi[{{$lingua->locale}}]"  id="body_{{$lingua->locale}}" class="html-editor" required>{{$traduzioni[$lingua->locale]['testo']}}</textarea>
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
                            <button type="submit" class="btn btn-primary btn-sm m-t-10"  id="contenuto_for_submit">Salva</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</section>
@stop
@section('footer_scripts')

<script src="/adm/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
<script src="/adm/vendors/bower_components/summernote/dist/summernote.min.js"></script>
<script src="/adm/vendors/chosen_v1.4.2/chosen.jquery.min.js"></script>


<script>
    
    $('#contenuto_for_submit').on("click", function(e){

    e.preventDefault();

    var form = $(this).parents('form');

        swal({   
            title: "Sei sicuro di voler salvare questo contenuto?",   
            text: "Ricordati di modificare il testo in ITALIANO e in INGLESE",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Si. Salva.",   
            cancelButtonText: "No. Cancella operazione.",   
            closeOnConfirm: false ,
            showLoaderOnConfirm: true
        }, function(isConfirm){   
            if (isConfirm) form.submit();
        });

    });




</script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor({
            language: 'it',
            uiColor: '#ffffff',
        });
        // $('.textarea').ckeditor(); // if class is prefered.

    </script>

@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('struttura_menu', 'contenuti');

    </script>    


@stop
