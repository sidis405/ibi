@extends('admin.layouts.master')
@section('content')
<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Modifiche Contenuti Sito</h2>
            <ul class="actions">
                <li>
                    <a href="/admin/modifiche-contenuti-sito">
                        <i class="zmdi zmdi-format-list-bulleted"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="" data-toggle="dropdown">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>
                    
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="" class="refresh-page">Aggiorna pagina</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
        </div>
        
        <div class="card">
            <div class="card-header">
                <h2>Modifiche Contenuti Sito</h2>
            </div>
            
            <div class="card-body card-padding">
      
                <fieldset>
                    <?php $curr_mod = $mod->getModel();?>
                    <legend>Info</legend>
                    <!-- Text input-->
                    <div class="form-group fg-line">
                        <label class="col-sm-6 control-label" >Pagina:</label>
                        <div class="col-sm-6">
                            {{$curr_mod->contenuto->pagina->name}} ({{$curr_mod->locale}})
                        </div>
                    </div>
                    <div class="form-group fg-line">
                        <label class="col-sm-6 control-label" >Modificato da:</label>
                        <div class="col-sm-6">
                            {{$mod->user->first_name}} {{$mod->user->last_name}}, {{$mod->created_at->format('d m Y, h:i')}}
                        </div>
                    </div>
                    <!-- Select Basic -->
              
                </fieldset>
                <fieldset>
                    
                    <legend>Testo</legend>
                    <div class="form-group fg-line">
                        <div class="col-sm-6">
                            {!! unserialize($mod['model_data'])['testo'] !!}
                        </div>
                    </div>
                    
                    
                </fieldset>
           
         
            </div>
        </div>
        <div class="card">
            
            <div class="card-body card-padding">
                <div class="form-group fg-line">
                    <div class="col-sm-6">
                        <form action="/admin/modifiche-contenuti-sito/{{$mod->version_id}}/conferma" method="POST">
                            {!!csrf_field()!!}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="user_id" value="{{$mod->id}}">
  
                            <button type="submit" class="btn btn-success">Attiva questa modifica</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('sidebar_scripts')
<script>
activateSidebar('contenuti_sito_menu', 'modifiche');
</script>
@stop