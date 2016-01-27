<div class="contenuto-dinamico">{!!getTheText($contenuti_footer, $key)!!}
@permessoibi($permesso)
<a href="/admin/singolo-contenuto/{{getKey($contenuti_footer, $key, 'id')}}/modifica" target="_blank" class="modifica-contenuto"><i class="fa fa-edit"></i></a>
@endpermessoibi
</div>