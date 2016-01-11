<form class="controls filter-content" id="js-filters">
  <h3>Filtri <a class="filter prodotti-filter-all" data-filter="*" id="js-reset"> <i class="fa fa-close" ></i>Tutto</a></h3>
  <div class="filter-block">
    <span>Cerca</span>
    <input type="text" placeholder="Enter Name" val="" data-filter="" id="filter--text" />
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
  
  <div class="filter-block">
    <label for="filter--principi">Principi Attivi</label>
    <select name="principi" id="filter--principi">
      <option value="">Tutti</option>
      @foreach($principi as $principio)
        <option id="pa-{{$principio->slug}}" value=".pa-{{$principio->slug}}">{{ucfirst(strtolower($principio->nome))}}</option>
      @endforeach
    </select>
  </div>

  
</form>