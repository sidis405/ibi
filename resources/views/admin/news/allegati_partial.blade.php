@if(count($news->allegati) > 1)

    @foreach($news->allegati as $allegato)

        <div class="row">
            <a class="btn btn-success" href="/allegati/{{$allegato->news}}" target="_blank">Vedi Allegato caricato</a>
        </div>

    @endforeach

@endif


<div class="row">

<div class="form-group fg-line col-sm-6">

</div>

<div class="form-group fg-line col-sm-6">
    
    <div class="fileinput fileinput-new" data-provides="fileinput">
        <span class="btn btn-primary btn-file m-r-10">
            <span class="fileinput-new">Selezione allegato</span>
            <span class="fileinput-exists">Cambia allegato</span>
            <input type="file" name="allegato" required>
        </span>
        <span class="fileinput-filename"></span>
        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
    </div>

</div>

</div>