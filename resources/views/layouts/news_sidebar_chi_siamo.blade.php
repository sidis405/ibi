<div class="sidebar theiaStickySidebar">

  <div class="row sidebar-hero">
    <div class="col-md-12 col-sm-6"><a href="/ricerca-innovazione">
      <div class="biotecnologia-sidebar">
        <h3>{{$text['rnd']['tabs']['ricerca_innovazione']}}</h3>
      </div></a></div>
      <div class="col-md-12 col-sm-6"><a href="/farmaco-vigilanza">
        <div class="farmacovigilanza-sidebar">
          <h3>{{$text['rnd']['tabs']['farmacovigilanza']}}</h3>
        </div></a></div>
      </div>
      <div class="row news">
        <div class="col-xs-12">
          <h3> {{$text['azioni']['ultime_news']}}</h3>
          
        </div>
        <div class="col-xs-12">
          @include('layouts.news_partial')
        </div>
        <div class="col-xs-12"><a href="/archivio-news" class="archivio-news-link">{{$text['azioni']['archivio_news']}}</a></div>
      </div>
      
    </div>