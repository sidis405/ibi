<div class="col-sm-6">
    <fieldset>
        <legend>Informazioni sul profilo utente</legend>
        <!-- Text input-->
        
            <label class="control-label" for="email">Email</label>
            <div>
                <input id="email" name="email" required type="email" value="{{old('email')}}" placeholder="Su questo indirizzo verrà spedita la sua password" class="form-control input-md">                
            </div>
       
        <!-- Text input-->
        
            <label class="control-label" for="password">Password</label>
            <div>
                <input id="password" name="password" required type="password" placeholder="Minimo 6 caratteri" class="form-control input-md">                
            </div>
       
        <!-- Text input-->
       
            <label class="control-label" required for="password_confirmation">Ripeti password</label>
            <div>
                <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Ripeti la password" class="form-control input-md">
            </div>
        
    </fieldset>
</div>