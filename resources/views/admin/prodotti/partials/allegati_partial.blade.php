<div class="row">
    <div class="col-sm-6">
        <p class="f-500 c-black m-b-20">Foglietto Illustrativo</p>
        
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <span class="btn btn-primary btn-file m-r-10">
                <span class="fileinput-new">Selezione Foglietto</span>
                <span class="fileinput-exists">Cambia Foglietto</span>
                <input type="file" name="foglietto_illustrativo" @if(strlen($prodotto->foglietto_illustrativo) < 2)  @endif>
            </span>
            <span class="fileinput-filename"></span>
            <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
        </div>
    </div>
    <div class="col-sm-6">
        <p class="f-500 c-black m-b-20">Scheda Tecnica</p>
        
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <span class="btn btn-primary btn-file m-r-10">
                <span class="fileinput-new">Seleziona Scheda</span>
                <span class="fileinput-exists">Cambia Scheda</span>
                <input type="file" name="scheda_tecnica" @if(strlen($prodotto->scheda_tecnica) < 2)  @endif>
            </span>
            <span class="fileinput-filename"></span>
            <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        @if(strlen($prodotto->foglietto_illustrativo) > 2)
        <a class="btn btn-success" href="/admin/prodotti/allegati/{{$prodotto->foglietto_illustrativo}}" target="_blank">Vedi Foglietto Illustrativo</a>
        @endif
    </div>
    <div class="col-sm-6">
        @if(strlen($prodotto->scheda_tecnica) > 2)
        <a class="btn btn-success" href="/admin/prodotti/allegati/{{$prodotto->scheda_tecnica}}" target="_blank">Vedi Scheda Tecnica</a>
        @endif
    </div>
</div>