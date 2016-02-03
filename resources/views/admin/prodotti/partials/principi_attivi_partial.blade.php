<div class="form-group fg-line col-sm-4">
    <p class="f-500 c-black m-b-15">Principio Attivo</p>
    <select class="tag-select" data-placeholder="Scegli..." name="principio_attivo_id">
    <option disabled selected>Scegli</option>
        @foreach($principi_attivi as $principio)
        <option value="{{$principio->id}}" @if(in_array($principio->id, $selected)) selected @endif>{{$principio->nome}}</option>
        @endforeach
    </select>
</div>