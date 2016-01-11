<div class="filter-content" id="filtri_prodotti">
  

  <h3>Filtri <a class="filter prodotti-filter-all" data-filter="*" id="reset_prodotti"> <i class="fa fa-close" ></i>Tutto</a></h3>
  <div class="filter-block">
    <span>Cerca</span>
    <input type="text" id="cerca_prodotti" val="" data-filter="" id="filter--text">
  </div>

  <div class="filter-block">
    <span>Categorie Terapeutiche</span>
    <select name="categoria_terapeutica" id="filtro_categoria">
        <option value="all">Tutto</option>
      @foreach($categorie as $categoria)
        <option value=".ct-{{$categoria->slug}}">{{$categoria->nome}}</option>
      @endforeach
    </select>
  </div>


  <div class="filter-block">
    <span>Principi Attivi</span>
    <select name="categoria_terapeutica" id="filtro_principio">
    <option value="all">Tutto</option>
      @foreach($principi as $principio)
        <option value=".pa-{{$principio->slug}}">{{ucfirst(strtolower($principio->nome))}}</option>
      @endforeach
    </select>
  </div>

  
</div>