<div id="prodotti-container" class="row prodotti-italia">
@foreach($prodotti as $key => $gruppi_prodotti)
  <div class="col-lg-6 col-md-12 col-xs-12 mix ct-{{$gruppi_prodotti[0]->categoria_terapeutica->slug}} pa-{{$gruppi_prodotti[0]->principio_attivo->slug}} {{str_slug($gruppi_prodotti[0]->nome)}} ">
    <div class="product">
      <div class="product-title">
        <h2>{{$key}}</h2>
        <div class="plus-minus"></div>
      </div>
      @foreach($gruppi_prodotti as $prodotto)
      <div class="formulazione">
        <div class="formulazione-title">
          <h5>{{$text['prodotti']['formulazione']}}</h5>
          <span>{{$prodotto->formulazione}}</span><i class="fa fa-caret-right"></i>
        </div>
        <ul class="formulazione-content">
          <li>
            <h5>{{$text['prodotti']['principio_attivo']}}</h5><span>{{ucfirst(strtolower($prodotto->principio_attivo->nome))}}</span>
          </li>
          <li>
            <h5>{{$text['prodotti']['foglietto_illustrativo']}}</h5><a href="/prodotti/allegati/{{$prodotto->foglietto_illustrativo}}" target="_blank"><i class="fa fa-download"></i></a>
          </li>
          <li>
            <h5>{{$text['prodotti']['scheda_tecnica']}}</h5>
            @permessoibi('scarica_allegati')
            <a href="/prodotti/allegati/{{$prodotto->scheda_tecnica}}" target="_blank"><i class="fa fa-download"></i></a>
            @else
            <a href="#area-riservata-modal" class=" open-area-riservata-modal" ><i class="fa fa-download login-tooltip" data-toggle="tooltip" data-placement="top" title="{{$text['prodotti']['scheda_tecnica_warning']}}"></i></a>
            @endpermessoibi
          </li>
          <li>
            <h5>{{$text['prodotti']['fascia']}}</h5><span>{{$prodotto->fascia->nome}}</span>
          </li>
          <li>
            <h5>{{$text['prodotti']['regime_di_dispensazione']}}</h5><span>{{$prodotto->regime_dispensazione}}</span>
          </li>
          <li>
            <h5>{{$text['prodotti']['validita_mesi']}}</h5><span>{{$prodotto->validita_mesi}}</span>
          </li>
          <li>
            <h5>{{$prodotto->categoria_terapeutica->nome}}</h5>
          </li>
        </ul>
      </div>
      @endforeach
    </div>
  </div>
  @endforeach
</div>