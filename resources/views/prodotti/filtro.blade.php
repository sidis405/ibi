<div class="filter-content">
  <h3>Filtri</h3>
  <div class="filter-block">
    <span>Categorie Terapeutiche</span>
    <select name="categoria_terapeutica" id="filtro_categoria">
      @foreach($categorie as $categoria)
        <option value=".ct-{{$categoria->slug}}">{{$categoria->nome}}</option>
      @endforeach
    </select>
  </div>
  <div class="filter-block">
    <span>Principi Attivi</span>
    <select name="categoria_terapeutica" id="filtro_principio">
      @foreach($principi as $principio)
        <option value=".pa-{{$principio->slug}}">{{ucfirst(strtolower($principio->nome))}}</option>
      @endforeach
    </select>
  </div>
  <!-- <div class="btn btn-pirmary">Filtra</div> -->
</div>