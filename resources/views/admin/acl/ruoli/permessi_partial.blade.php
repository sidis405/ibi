<div class="card-body card-padding form-group">

    <p class="c-black f-500 m-b-20 m-t-20">Associa permessi a questo ruolo.</p>
    
    @foreach($permessi as $permesso)
<div class="checkbox m-b-15">
        <label>
            <input type="checkbox" name="permessi[]" value="{{$permesso->id}}" @if(in_array($permesso->id, $ruoli_permesso)) checked @endif>
            <i class="input-helper"></i>
            {{ucfirst(strtolower($permesso->name))}}
        </label>
        </div>

    @endforeach

</div>