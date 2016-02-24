<div class="news-container">
@if(count($news))
	@foreach($news as $item)
	<div class="single-news">
		<div class="media">
			<div class="media-left">
                    <a href="/archivio-news/{{$item->id}}/{{$item->slug}}" alt="{{$item->titolo}}" >
                      <span class="media-object news-image" alt="{{$item->titolo}}" style="background: url(@if($item->immagine_path != null) '/images/{{$item->immagine_path}}' @else '/img/news_placeholder.jpg' @endif) no-repeat center center;"></span>
                    </a>
                  </div>
			<div class="media-body">

				<h4><a href="/archivio-news/{{$item->id}}/{{$item->slug}}">{{tokenTruncate($item->titolo, 57)}}</a></h4><span class="date">{{$item->created_at->format('d/m/y')}}</span>
				<a href="/archivio-news/{{$item->id}}/{{$item->slug}}" class="read-more read-more-news">{{$text['azioni']['leggi_tutto']}} ></a>
			</div>
		</div>
	</div>
	@endforeach
	@else
	<p>Non ci sono news</p>
	@endif
</div>