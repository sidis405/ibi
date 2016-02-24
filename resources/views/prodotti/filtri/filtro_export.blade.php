<form class="controls filter-content" id="js-filters">
  <h3>{{$text['filtri_prodotti']['filtri']}}</h3> <a class="filter prodotti-filter-all" data-filter="*" id="js-reset"> <i class="fa fa-close" ></i>{{$text['filtri_prodotti']['tutti']}}</a></h3>
  <div class="filter-block">
    <span>{{$text['filtri_prodotti']['cerca']}}</span>
    <input type="text" placeholder="{{$text['filtri_prodotti']['cerca_prodotti']}}" val="" data-filter="" id="filter--text" />
  </div>
  
  <div class="filter-block">
    <label for="filter--categorie">{{$text['filtri_prodotti']['categorie_terapeutiche']}}</label>
    <select name="categorie" id="filter--categorie">
      <option value="" id="ct-all">{{$text['filtri_prodotti']['tutti']}}</option>
      @foreach($categorie as $categoria)
      <option id="ct-{{$categoria->slug}}" value=".ct-{{$categoria->slug}}">{{$categoria->nome}}</option>
      @endforeach
    </select>
  </div>
  


  
</form>