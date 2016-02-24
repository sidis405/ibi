@extends('admin.layouts.master')

@section('header_scripts')

<link href="/adm/vendors/bower_components/summernote/dist/summernote.css" rel="stylesheet">

@stop

@section('content')
<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>News</h2>
            
            <ul class="actions">
                <li>
                    <a href="/admin/news">
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
        <form role="form" method="POST" action="/admin/news/{{$news->id}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="news_id" value="{{$news->id}}">
            {!! csrf_field() !!}
            <div class="card">
                <div class="card-header">
                    <h2>Modifica news : '{{$news->titolo}}'</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="form-group fg-line">
                        <label for="titolo">Titolo</label>
                        <input type="text" class="form-control input-sm" id="titolo" placeholder="Il titolo della news" name="titolo" value="{{$news->titolo}}" required>
                    </div>
                    <div class="form-group fg-line">
                        <label for="formulazione">Breve descrizione</label>
                        <textarea class="form-control"  rows="5" id="descrizione"  name="descrizione"  placeholder="La descrizione della news" required>{{$news->descrizione}}</textarea>
                    </div>
                    <div class="form-group fg-line">
                        <label for="formulazione">Data news</label>
                        <input type="date" name="created_at" class="form-control" value="{{$news['created_at']->format('Y-m-d')}}">
                    </div>
                    <div class="form-group fg-line">
                        @include('admin.news.immagine_partial')
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h2>Testo news</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="row">
                        <textarea name="testo"  class="html-editor" required>{{$news->testo}}</textarea>
                    </div>
                </div>
            </div>


            <div class="card">
                
                <div class="card-body card-padding">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="on" name="active" @if($news->active == 1) checked @endif>
                            <i class="input-helper"></i>
                            Pubblica questa News
                        </label>
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
<script src="/adm/vendors/bower_components/summernote/dist/summernote.min.js"></script>
<script src="/adm/vendors/fileinput/fileinput.min.js"></script>
<script src="/adm/vendors/input-mask/input-mask.min.js"></script>
<script src="/adm/vendors/farbtastic/farbtastic.min.js"></script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('.html-editor').ckeditor({
            language: 'it',
            uiColor: '#ffffff',
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
        });
        // $('.textarea').ckeditor(); // if class is prefered.

    </script>
@stop