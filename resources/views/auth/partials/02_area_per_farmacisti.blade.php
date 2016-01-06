<fieldset>
    <!-- Form Name -->
    <legend>Area per farmacisti</legend>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="profile[farmacia]">Farmacia/Altro:</label>
        <div class="col-md-4">
            <input id="textinput" name="profile[farmacia]" type="text" placeholder="Farmacia / Altro" value="{{old('profile.farmacia')}}" class="form-control input-md">
            <!-- <span class="help-block">help</span> -->
        </div>
    </div>
    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="profile[farmacia_posizione]">Posizione</label>
        <div class="col-md-4">
            <select id="profile[farmacia_posizione]" name="profile[farmacia_posizione]" class="form-control">
                <option value="proprietario" @if(old('profile.farmacia_posizione') == 'proprietario') selected @endif>Proprietario</option>
                <option value="collaboratore" @if(old('profile.farmacia_posizione') == 'collaboratore') selected @endif>Collaboratore</option>
                <option value="altro" @if(old('profile.farmacia_posizione') == 'altro') selected @endif>Altro</option>
            </select>
        </div>
    </div>
</fieldset>