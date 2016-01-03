<ul>
    <li>
        Schede per la segnalazione
        di sospetta reazione avversa:
    </li>
    @if(count($schede))
        @foreach($schede as $scheda)
            <li><a href="/allegati/{{$scheda->allegato}}" target="_blank">{{$scheda->titolo}}</a></li>
        @endforeach
    @else
        <li>Non ci sono schede</li>
    @endif
</ul>