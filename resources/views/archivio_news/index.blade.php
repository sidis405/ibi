@extends('layouts.master')

@section('content')
<div class="main-header archivio-news-header">
      <div class="container">
        <div class="main-caption">
          <h1>News</h1>
        </div>
      </div>
    </div>
    <section class="content archivio-news-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            
            @if(count($listing))
              @foreach($listing as $item)
                <div class="archivio-news media">
                  <div class="media-left">
                    <a href="/archivio-news/{{$item->id}}/{{$item->slug}}" alt="{{$item->titolo}}" >
                      <span class="media-object media-news-archive" alt="{{$item->titolo}}" style="background: url(@if($item->immagine_path != null) '/images/{{$item->immagine_path}}' @else '/img/news_placeholder.jpg' @endif) no-repeat center center;"></span>
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="/archivio-news/{{$item->id}}/{{$item->slug}}">{{$item->titolo}}</a></h4><span class="date">{{$item->created_at->format('d/m/Y')}}</span>
                    <p>{{$item->descrizione}}</p><a href="/archivio-news/{{$item->id}}/{{$item->slug}}" class="read-more read-more-news">{{$text['azioni']['leggi_tutto']}} ></a>
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