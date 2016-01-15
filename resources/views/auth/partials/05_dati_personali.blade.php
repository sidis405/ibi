<div class="col-sm-6">
    <fieldset>
        <!-- Form Name -->
        <legend>Dati Personali</legend>
        <!-- Text input-->
        
            <label class="control-label" for="first_name">Nome</label>
            <div>
                <input id="first_name" required name="first_name" value="{{old('first_name')}}" type="text" placeholder="Nome" class="form-control input-md">
            </div>
        
        <!-- Text input-->
        
            <label class="control-label" for="last_name">Cognome</label>
            <div>
                <input id="last_name" required name="last_name" type="text" value="{{old('last_name')}}" placeholder="Cognome" class="form-control input-md">
            </div>
        
        <!-- Text input-->
       
            <label class="control-label" for="profile[luogo_nascita]">Luogo di nascita</label>
            <div>
                <input id="profile[luogo_nascita]" required name="profile[luogo_nascita]" value="{{old('profile.luogo_nascita')}}" type="text" placeholder="Luogo di nascita" class="form-control input-md">
            </div>
        
        <!-- Text input-->
        
            <label class="control-label" for="profile[data_nascita]">Data di nascita</label>
            <div>
                <input id="profile[data_nascita]" required name="profile[data_nascita]" type="date" value="{{old('profile.data_nascita')}}" placeholder="Data di nascita" class="form-control input-md">
            </div>
        
    </fieldset>
</div>