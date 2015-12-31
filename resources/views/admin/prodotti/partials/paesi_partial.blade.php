<div class="form-group fg-line col-sm-6">
    <p class="f-500 c-black m-b-15">Paesi</p>
    
    <select class="tag-select" name="paesi[]" multiple data-placeholder="Paesi export" >
        @foreach($paesi as $paese)
        <option value="{{$paese->id}}" @if(in_array($paese->id, $selected)) selected @endif>{{$paese->nome}}</option>
        @endforeach
    </select>
</div>


