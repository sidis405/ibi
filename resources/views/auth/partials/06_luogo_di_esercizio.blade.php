<fieldset>
    <!-- Form Name -->
    <legend>Luogo di esercizio</legend>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="profile[indirizzo_attivita]">Indirizzo (Attività)</label>
        <div class="col-md-4">
            <input id="profile[indirizzo_attivita]" required name="profile[indirizzo_attivita]" value="{{old('profile.indirizzo_attivita')}}" type="text" placeholder="Indirizzo attività" class="form-control input-md">
        </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="profile[citta_attivita]">Citta (attività)</label>
        <div class="col-md-4">
            <input id="profile[citta_attivita]" required name="profile[citta_attivita]" type="text" value="{{old('profile.citta_attivita')}}" placeholder="placeholder" class="form-control input-md">
        </div>
    </div>
    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="profile[provincia_attivita]">Provincia (attività)</label>
        <div class="col-md-4">
            <select id="profile[provincia_attivita]" name="profile[provincia_attivita]" class="form-control" required>
                <option disabled="" selected>Scegli</option>
                
                @foreach($provincie as $provincia)
                <option value="{{$provincia->id}}" @if($provincia->id == old('profile.provincia_attivita')) selected @endif>{{$provincia->nome}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="profile[cap_attivita]">Cap (Attività)</label>
        <div class="col-md-4">
            <input id="profile[cap_attivita]" required name="profile[cap_attivita]" value="{{old('profile.cap_attivita')}}" type="text" placeholder="Provincia attività" class="form-control input-md">
        </div>
    </div>
</fieldset>