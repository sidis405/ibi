<div class="sidebar theiaStickySidebar">

  <div class="row sidebar-hero">
    <div class="col-xs-12"><a href="/ricerca-innovazione#biotecnologie">
      <div class="biotecnologia-sidebar">
        <h3>Biotecnologie</h3>
      </div></a></div>
      <div class="col-xs-12"><a href="/farmaco-vigilanza">
        <div class="farmacovigilanza-sidebar">
          <h3>Farmacovigilanza</h3>
        </div></a></div>
      </div>
      <div class="row news">
        <div class="col-xs-12">
          <h3> Ultime News</h3>
        </div>
        <div class="col-xs-12">
          @if(count($news))
          @foreach($news as $item)
          <div class="single-news">
            <div class="media">
              <div class="media-left"><a href="/archivio-news/{{$item->id}}/{{$item->slug}}"><img src="/images/{{$item->immagine_path}}" alt="{{$item->titolo}}" class="media-object news-image"></a></div>
              <div class="media-body">
                <h4>{{$item->titolo}}</h4><span class="date">{{$item->created_at->format('d/m/y')}}</span>
                <p> {{$item->descrizione}}</p><a href="/archivio-news/{{$item->id}}/{{$item->slug}}" class="read-more read-more-news">Leggi tutto ></a>
              </div>
            </div>
          </div>
          @endforeach
          @else
          <p>Non ci sono news</p>
          @endif
        </div>
        <div class="col-xs-12"><a href="/archivio-news" class="archivio-news-link">Archivio news</a></div>
      </div>
      
    </div>