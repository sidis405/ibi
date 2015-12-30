<div class="form-group fg-line">
        <p class="f-500 c-black m-b-15">Principio Attivo</p>
        <select class="selectpicker" data-placeholder="Scegli..." name="principio_attivo_id">
             @foreach($principi_attivi as $principio)
                <option value="{{$principio->id}}" @if(in_array($principio->id, $selected)) selected @endif>{{$principio->nome}}</option>
                @endforeach
        </select>
</div>