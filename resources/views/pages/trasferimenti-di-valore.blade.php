@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header lavora-con-noi">
      <div class="container">
        <div class="main-caption">
          <h1>Trasferimenti di valore</h1>
        </div>
      </div>
    </div>
    <section class="content lavora-con-noi-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">            
             @include('layouts.content', array('key' => 'trasferimenti_di_valore', 'permesso'=> 'modifica_tutti_prodotti'))
              <div class="evidence-box"><a href="/trasferimenti-di-valore/documento" target="_blank">Documento sui Trasferimenti di Valore</a></div>
          </div>
          <div class="col-md-4 sidebar-wrapper">
            
              @include('layouts.news_sidebar_chi_siamo')

           
          </div>
        </div>
      </div>
    </section>
@stop

@section('footer_scripts')
<script>
  $(document).ready(function() {
    $(document).bind('keydown', 'ctrl+s', function(){$('#save').click(); return false;});
    $(document).bind('keydown', 'command+s', function(){$('#save').click(); return false;});
    $(document).on("contextmenu",function(){
       return false;
    }); 
  }); 
</script>
@stop