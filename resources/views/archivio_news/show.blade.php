@extends('layouts.master')

@section('content')
<div class="main-header archivio-news-header">
      <div class="container">
        <div class="main-caption">
          <h1>Archivio news</h1>
        </div>
      </div>
    </div>
    <section class="content archivio-news-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2>{{$single_news->titolo}}</h2>
            <span class="date">{{$single_news->created_at->format('d/m/Y')}}</span>
            
                <div class="archivio-news media">
                  <div class="media-left"><a href="/archivio-news/{{$single_news->id}}/{{$single_news->slug}}"><img width="150" src="/images/{{$single_news->immagine_path}}" alt="{{$single_news->titolo}}" class="media-object"></a></div>
                  <div class="media-body">
                    <p>{{$single_news->descrizione}}</p>
                    <br>
                    <p>{!!$single_news->testo!!}</p>

                  </div>
                </div>
  
          </div>
          <div class="col-md-4">
            @include('layouts.news_sidebar')
          </div>
        </div>
      </div>
    </section>

@stop