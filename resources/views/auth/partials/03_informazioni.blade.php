<div class="col-sm-6">
    <fieldset>
        <!-- Form Name -->
        <legend>Informazioni</legend>
        
            <label class="control-label" for="profile[anno_laurea]">Anno di Laurea</label>
            <div>
                <input id="profile[anno_laurea]" required name="profile[anno_laurea]" value="{{old('profile.anno_laurea')}}" type="year" placeholder="Anno" class="form-control input-md">
            </div>
        
        <!-- Text input-->
        
            <label class="control-label" for="profile[numero_albo]">N° Iscr. Albo</label>
            <div>
                <input id="profile[numero_albo]" required name="profile[numero_albo]" type="text" value="{{old('profile.numero_albo')}}" placeholder="N° Iscr. Albo" class="form-control input-md">
            </div>
        
        <!-- Select Basic -->
        
            <label class="control-label" for="profile[provincia_albo]">Provincia di Iscr. Albo</label>
            <div>
                <select id="profile[provincia_albo]" name="profile[provincia_albo]" class="form-control" required>
                    <option disabled="" selected>Scegli</option>
                    
                    @foreach($provincie as $provincia)
                    <option value="{{$provincia->id}}" @if(old('profile.provincia_albo') == $provincia->id) selected @endif>{{$provincia->nome}}</option>
                    @endforeach
                    
                </select>
            </div>
        
        <!-- Select Basic -->
        
            <label class="control-label" for="profile[specializzazione]">Specializzazione</label>
            <div>
                <select id="profile[specializzazione]" name="profile[specializzazione]" required class="form-control">
                    <option disabled="" selected>Scegli</option>
                    
                    @foreach($specializzazioni as $specializzazione)
                    <option value="{{$specializzazione->id}}" @if(old('profile.specializzazione') == $specializzazione->id) selected @endif>{{$specializzazione->nome}}</option>
                    @endforeach
                </select>
            </div>
        
        <!-- Text input-->
        
            <label class="control-label" for="profile[telefono]">Telefono</label>
            <div>
                <input id="profile[telefono]" name="profile[telefono]"  required type="text" value="{{old('profile.telefono')}}" placeholder="Telefono" class="form-control input-md">
            </div>
        
    </fieldset>
</div>