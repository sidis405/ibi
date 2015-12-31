        <select class="selectpicker" data-placeholder="Scegli..." name="ruolo[]" required>
        <option disabled selected>Scegli</option>
             @foreach($ruoli as $ruolo)
                <option value="{{$ruolo->id}}" @if(in_array($ruolo->id, $selected)) selected @endif>{{$ruolo->name}}</option>
                @endforeach
        </select>
