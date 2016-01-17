{!!getTheText($contenuti, $key)!!}
@permessoibi($permesso)
<a href="/admin/singolo-contenuto/{{getKey($contenuti, $key, 'id')}}/modifica" target="_blank" class="pull-right ">Modifica contenuto</a>
@endpermessoibi