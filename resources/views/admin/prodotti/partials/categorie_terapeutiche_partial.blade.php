<div class="form-group fg-line col-sm-4">
        <p class="f-500 c-black m-b-15">Categorie Terapeutiche</p>
        <select class="selectpicker" data-placeholder="Scegli..." name="categoria_terapeutica_id" required>
        <option disabled selected>Scegli</option>
             @foreach($categorie_terapeutiche as $categoria)
                <option value="{{$categoria->id}}" @if(in_array($categoria->id, $selected)) selected @endif>{{$categoria->nome}}</option>
                @endforeach
        </select>
</div>