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
            <h2>Archivio news</h2>
            
            @if(count($listing))
              @foreach($listing as $item)
                <div class="archivio-news media">
                  <div class="media-left"><a href="/archivio-news/{{$item->id}}/{{$item->slug}}"><img width="150" src="/images/{{$item->immagine_path}}" alt="{{$item->titolo}}" class="media-object"></a></div>
                  <div class="media-body">
                    <h4 class="media-heading">{{$item->titolo}}</h4><span class="date">{{$item->created_at->format('d/m/Y')}}</span>
                    <p>{{$item->descrizione}}</p><a href="/archivio-news/{{$item->id}}/{{$item->slug}}" class="read-more read-more-news">Leggi tutto ></a>
                  </div>
                </div>
              @endforeach
            @else
            <p>Non ci sono news</p>
            @endif
          </div>
          <div class="col-md-4">
            @include('layouts.news_sidebar')
          </div>
        </div>
      </div>
    </section>

@stop