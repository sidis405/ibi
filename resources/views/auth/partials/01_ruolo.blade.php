<fieldset>
    <!-- Form Name -->
    <legend>Ruolo</legend>
    <!-- Multiple Radios -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="radios">Ruolo</label>
        <div class="col-md-4">
            <div class="radio">
                <label for="profile[ruolo]">
                    <input type="radio" name="profile[ruolo]" id="radios-0" value="medico" required @if(old('profile.ruolo') == 'medico') checked="" @endif>
                    Medico
                </label>
            </div>
            <div class="radio">
                <label for="profile[ruolo]">
                    <input type="radio" name="profile[ruolo]" id="radios-1" value="farmacista" required @if(old('profile.ruolo') == 'farmacista') checked="" @endif>
                    Farmacista
                </label>
            </div>
        </div>
    </div>
</fieldset>