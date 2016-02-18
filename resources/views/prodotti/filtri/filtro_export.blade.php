<form class="controls filter-content" id="js-filters">
  <h3>Filtri <a class="filter prodotti-filter-all" data-filter="*" id="js-reset"> <i class="fa fa-close" ></i>Tutto</a></h3>
  <div class="filter-block">
    <span>Cerca</span>
    <input type="text" placeholder="Cerca prodotti" val="" data-filter="" id="filter--text" />
  </div>
  
  <div class="filter-block">
    <label for="filter--categorie">Categorie Terapeutiche</label>
    <select name="categorie" id="filter--categorie">
      <option value="" id="ct-all">Tutti</option>
      @foreach($categorie as $categoria)
      <option id="ct-{{$categoria->slug}}" value=".ct-{{$categoria->slug}}">{{$categoria->nome}}</option>
      @endforeach
    </select>
  </div>
  


  
</form>