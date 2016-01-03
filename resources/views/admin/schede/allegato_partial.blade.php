<div class="row">
        
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <span class="btn btn-primary btn-file m-r-10">
                <span class="fileinput-new">Selezione allegato</span>
                <span class="fileinput-exists">Cambia allegato</span>
                <input type="file" name="allegato" @if(strlen($scheda->allegato) < 2) required @endif>
            </span>
            <span class="fileinput-filename"></span>
            <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
        </div>
</div>
<div class="row">
        @if(strlen($scheda->allegato) > 2)
        <a class="btn btn-success" href="/allegati/{{$scheda->allegato}}" target="_blank">Vedi Allegato caricato</a>
        @endif
</div>