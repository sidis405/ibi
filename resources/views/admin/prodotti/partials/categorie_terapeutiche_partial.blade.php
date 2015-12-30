<div class="form-group fg-line">
        <p class="f-500 c-black m-b-15">Categorie Terapeutiche</p>
        <select class="selectpicker" data-placeholder="Scegli..." name="categorie_terapeutiche">
             @foreach($categorie_terapeutiche as $categoria)
                <option value="{{$categoria->id}}" @if(in_array($categoria->id, $selected)) selected @endif>{{$categoria->nome}}</option>
                @endforeach
        </select>
</div>