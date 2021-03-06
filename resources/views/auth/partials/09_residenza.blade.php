<div class="col-sm-6">
    <fieldset>
        <legend>Residenza</legend>
        <!-- Text input-->
       
            <label class="control-label" for="profile[indirizzo_residenza]">Indirizzo</label>
            <div>
                <input id="profile[indirizzo_residenza]" required value="{{old('profile.indirizzo_residenza')}}" name="profile[indirizzo_residenza]" type="text" placeholder="Indirizzo residenza" class="form-control input-md">
            </div>
        
        <!-- Text input-->
        
            <label class="control-label" for="profile[citta_residenza]">Città residenza</label>
            <div>
                <input id="profile[citta_residenza]" required name="profile[citta_residenza]" value="{{old('profile.citta_residenza')}}" type="text" placeholder="placeholder" class="form-control input-md">
            </div>
        
       
            <label class="control-label" for="profile[provincia_residenza]">Provincia</label>
            <div>
                <select id="profile[provincia_residenza]" required name="profile[provincia_residenza]" class="form-control">
                    <option disabled="" selected>Scegli</option>
                    
                    @foreach($provincie as $provincia)
                    <option value="{{$provincia->id}}" @if($provincia->id == old('profile.provincia_residenza')) selected @endif>{{$provincia->nome}}</option>
                    @endforeach
                </select>
            </div>
        
        <!-- Text input-->
        
            <label class="control-label" for="profile[cap_residenza]">Cap</label>
            <div>
                <input id="profile[cap_residenza]" required name="profile[cap_residenza]" value="{{old('profile.cap_residenza')}}" type="text" placeholder="placeholder" class="form-control input-md">
            </div>
        
    </fieldset>
</div>