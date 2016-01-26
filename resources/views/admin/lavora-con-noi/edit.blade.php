@extends('admin.layouts.master')

@section('content')
<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>News</h2>
            
            <ul class="actions">
                <li>
                    <a href="/admin/lavora-con-noi">
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
        <form role="form" method="POST" action="/admin/lavora-con-noi/{{$posizione->id}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="posizione_id" value="{{$posizione->id}}">
            {!! csrf_field() !!}
            <div class="card">
                <div class="card-header">
                    <h2>Modifica news : '{{$posizione->titolo}} / {{$posizione->sede}}'</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="form-group fg-line">
                        <label for="titolo">Titolo</label>
                        <input type="text" class="form-control input-sm" id="titolo" value="{{$posizione->titolo}}" placeholder="Il titolo della posizione" name="titolo" required>
                    </div>

                   <!--  <div class="form-group fg-line">
                        <label for="sede">Sede</label>
                        <input type="text" class="form-control input-sm" id="sede" value="{{$posizione->sede}}" placeholder="La sede per la posizine aperta" name="sede" required>
                    </div> -->

                    <div class="form-group fg-line">
                        <label for="formulazione">Breve descrizione</label>
                        <textarea class="form-control"  rows="5" id="descrizione"  name="descrizione"  placeholder="La descrizione della posizione" required>{{$posizione->descrizione}}</textarea>
                    </div>
                </div>
            </div>
            

            <div class="card">
                
                <div class="card-body card-padding">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="on" name="active" @if($posizione->active == 1) checked @endif>
                            <i class="input-helper"></i>
                            Pubblica questa Posizione
                        </label>
                    </div>
                </div>
            </div>
            <div class="card">
                
                <div class="card-body card-padding">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <button type="reset" class="btn btn-warning btn-sm m-t-10">Abbandona</button>
                        </div>
                        <div class="col-sm-6 text-center">
                            <button type="submit" class="btn btn-primary btn-sm m-t-10">Salva</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</section>
@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('lavora_con_noi_menu', 'aggiungi_posizione');

    </script>    


@stop
