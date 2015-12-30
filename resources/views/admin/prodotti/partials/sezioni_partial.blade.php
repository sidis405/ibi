<div class="form-group fg-line">
    <p class="f-500 c-black m-b-15">Sezioni</p>
    
    <select class="selectpicker" name="sezioni[]" multiple>
        @foreach($sezioni as $sezione)
        <option value="{{$sezione->id}}" @if(in_array($sezione->id, $selected)) selected @endif>{{$sezione->nome}}</option>
        @endforeach
    </select>
</div>


