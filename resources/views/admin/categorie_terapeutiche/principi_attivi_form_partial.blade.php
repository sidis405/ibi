<div class="card-body card-padding form-group">

    <p class="c-black f-500 m-b-20 m-t-20">Associa principi attivi a questa categoria terapeutica.</p>
    
    @foreach($principi_attivi as $principio)
<div class="checkbox m-b-15">
        <label>
            <input type="checkbox" name="principi_attivi[]" value="{{$principio->id}}" @if(in_array($principio->id, $principi_categoria)) checked @endif>
            <i class="input-helper"></i>
            {{ucfirst(strtolower($principio->nome))}}
        </label>
        </div>

    @endforeach

</div>