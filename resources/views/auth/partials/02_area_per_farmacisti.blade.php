<div class="col-sm-6">
    <fieldset>
        <!-- Form Name -->
        <legend>Area per farmacisti</legend>
        <!-- Text input-->
        
            <label class="control-label" for="profile[farmacia]">Farmacia/Altro:</label>
            <div>
                <input id="textinput" name="profile[farmacia]" type="text" placeholder="Farmacia / Altro" value="{{old('profile.farmacia')}}" class="form-control input-md">
                <!-- <span class="help-block">help</span> -->
            </div>
        
        <!-- Select Basic -->
        
            <label class="control-label" for="profile[farmacia_posizione]">Posizione</label>
            <div>
                <select id="profile[farmacia_posizione]" name="profile[farmacia_posizione]" class="form-control">
                    <option value="proprietario" @if(old('profile.farmacia_posizione') == 'proprietario') selected @endif>Proprietario</option>
                    <option value="collaboratore" @if(old('profile.farmacia_posizione') == 'collaboratore') selected @endif>Collaboratore</option>
                    <option value="altro" @if(old('profile.farmacia_posizione') == 'altro') selected @endif>Altro</option>
                </select>
            </div>
        
    </fieldset>
</div>