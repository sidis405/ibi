<div class="contenuto-dinamico-boxed">{!!getTheText($contenuti, $key)!!}
@permessoibi($permesso)
<a href="/admin/singolo-contenuto/{{getKey($contenuti, $key, 'id')}}/modifica" target="_blank" class="modifica-contenuto-boxed"><i class="fa fa-edit"></i></a>
@endpermessoibi
</div>