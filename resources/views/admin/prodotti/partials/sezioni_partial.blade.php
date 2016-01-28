<div class="form-group fg-line col-sm-12">
    <p class="f-500 c-black m-b-15">Sezioni</p>
    <select class="tag-select" name="sezioni[]" multiple data-placeholder="Sezioni nelle quali apparirà il prodotto" required>
        @foreach($sezioni as $sezione)
        <option value="{{$sezione->id}}" @if(in_array($sezione->id, $selected)) selected @endif>{{$sezione->nome}}</option>
        @endforeach
    </select>
</div>