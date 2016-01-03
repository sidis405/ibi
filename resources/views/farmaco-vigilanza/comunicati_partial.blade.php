@if(count($comunicati))
    @foreach($comunicati as $comunicato)
        <div class="comunicato">
            <p>{{$comunicato->titolo}}</p><a class="read-more" href="/farmaco-vigilanza/comunicati/{{$comunicato->id}}/{{$comunicato->slug}}">Leggi tutto</a>
        </div>
    @endforeach
@else
    <div class="comunicato">
        <p>Non ci sono comunicati</p>
    </div>
@endif