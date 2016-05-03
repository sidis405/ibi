@if(count($comunicati))
    @foreach($comunicati as $comunicato)
        <div class="comunicato">
            <p>{{$comunicato->titolo}}</p><a target = "_blank" class="read-more" href="/allegati/{{$comunicato->allegato}}">{{$text['farmacovigilanza']['scarica']}}</a>
        </div>
    @endforeach
@else
    <div class="comunicato">
        <p>Non ci sono comunicati</p>
    </div>
@endif
