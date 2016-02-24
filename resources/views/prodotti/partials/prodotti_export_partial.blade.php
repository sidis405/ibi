<div id="prodotti-container" class="row prodotti-italia">
@foreach($prodotti as $key => $gruppi_prodotti)
  <div class="col-lg-6 col-md-12 col-xs-12 mix ct-{{$gruppi_prodotti[0]->categoria_terapeutica->slug}}  {{str_slug($gruppi_prodotti[0]->nome)}} ">
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
            <h5>{{$text['prodotti']['unita']}}</h5><span>{{$prodotto->unita}}</span>
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