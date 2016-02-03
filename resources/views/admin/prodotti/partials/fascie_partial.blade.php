<div class="form-group fg-line col-sm-4">
        <p class="f-500 c-black m-b-15">Fascia</p>
        <select class="selectpicker" data-placeholder="Scegli..." name="fascia_id">
        <option disabled selected>Scegli</option>
             @foreach($fascie as $fascia)
                <option value="{{$fascia->id}}" @if(in_array($fascia->id, $selected)) selected @endif>{{$fascia->nome}}</option>
                @endforeach
        </select>
</div>