<fieldset>
    <legend>Informazioni sul profilo utente</legend>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="email">Email</label>
        <div class="col-md-4">
            <input id="email" name="email" required type="email" value="{{old('email')}}" placeholder="Indirizzo email" class="form-control input-md">
            <span class="help-block">Su questo indirizzo verrà spedita la sua password</span>
        </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="password">Password</label>
        <div class="col-md-4">
            <input id="password" name="password" required type="password" placeholder="Inserire password" class="form-control input-md">
            <span class="help-block">Minimo 6 caratteri</span>
        </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" required for="password_confirmation">Ripeti password</label>
        <div class="col-md-4">
            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Ripeti la password" class="form-control input-md">
        </div>
    </div>
</fieldset>