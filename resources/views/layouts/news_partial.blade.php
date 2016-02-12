<div class="news-container">
@if(count($news))
	@foreach($news as $item)
	<div class="single-news">
		<div class="media">
			<div class="media-left"><a href="/archivio-news/{{$item->id}}/{{$item->slug}}"><img @if($item->immagine_path != null) src="/images/{{$item->immagine_path}}" @else src="/img/news_placeholder.jpg" @endif  alt="{{$item->titolo}}" class="media-object news-image"></a></div>
			<div class="media-body">

				<!-- <h4>{{$item->titolo}}</h4><span class="date">{{$item->created_at->format('d/m/y')}}</span> -->
				<h4>{{tokenTruncate($item->titolo, 57)}}</h4><span class="date">{{$item->created_at->format('d/m/y')}}</span>
				<!-- <p> {{tokenTruncate($item->descrizione, 105)}}</p> --><a href="/archivio-news/{{$item->id}}/{{$item->slug}}" class="read-more read-more-news">Leggi tutto ></a>
			</div>
		</div>
	</div>
	@endforeach
	@else
	<p>Non ci sono news</p>
	@endif
</div>