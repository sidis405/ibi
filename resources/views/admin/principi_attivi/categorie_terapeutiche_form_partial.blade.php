<div class="card-body card-padding form-group">

    <p class="c-black f-500 m-b-20 m-t-20">Associa Categorie Terapeutiche a questo principio attivo.</p>
    
    @foreach($categorie_terapeutiche as $categoria)
<div class="checkbox m-b-15">
        <label>
            <input type="checkbox" name="categorie_terapeutiche[]" value="{{$categoria->id}}" @if(in_array($categoria->id, $principi_categoria)) checked @endif>
            <i class="input-helper"></i>
            {{ucfirst(strtolower($categoria->nome))}}
        </label>
        </div>

    @endforeach

</div>