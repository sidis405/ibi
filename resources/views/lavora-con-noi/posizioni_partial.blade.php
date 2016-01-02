<div class="row positions">
  <div class="col-xs-12">
    <h3>Posizioni aperte</h3>
  </div>
  <div class="col-xs-12">
  if(count($posizioni))
    @foreach($posizioni as $posizione)
      <div class="position">
        <h5>{{$posizione->titolo}}</h5>
        <span>{{$posizione->sede}}</span>
        <p>{{$posizione->descrizione}}</p>
        <a href="/lavora-con-noi/{{$posizione->id}}/{{$posizione->slug}}/invia-candidatura" class="read-more">Invia candidatura</a>
      </div>
    @endforeach
  @else
  <p>Non ci sono posizioni aperte</p>
  @endif
  </div>
</div>