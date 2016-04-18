@extends('admin.layouts.master')



@section('content')
<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Impostazioni</h2>
 
        </div>
        <form role="form" method="POST" action="/admin/impostazioni">
        <input type="hidden" name="_method" value="PUT">
            {!! csrf_field() !!}
            <div class="card">
                <div class="card-header">
                    <h2>Modifica Impostazioni</h2>
                </div>
                
                <div class="card-body card-padding">
                    <div class="form-group fg-line">
                        <label for="external_user_mail">Invia mail di notifica per nuovi medici/farmacisti a</label>
                        <input type="text" class="form-control input-sm" value="{{$impostazioni->external_user_mail}}" id="external_user_mail" name="external_user_mail" required>
                    </div>

                    <div class="form-group fg-line">
                        <label for="contenuto_update_mail">Invia mail per conferma modifiche di contenuti pagine a</label>
                        <input type="text" class="form-control input-sm" value="{{$impostazioni->contenuto_update_mail}}" id="contenuto_update_mail" name="contenuto_update_mail" required>
                    </div>

                    <div class="form-group fg-line">
                        <label for="segnalazione_farmacovigilanza_mail">Invia mail per segnalazioni di farmacovigilanza a </label>
                        <input type="text" class="form-control input-sm" value="{{$impostazioni->segnalazione_farmacovigilanza_mail}}" id="segnalazione_farmacovigilanza_mail" name="segnalazione_farmacovigilanza_mail" required>
                    </div>

                    <div class="form-group fg-line">
                        <label for="candidatura_mail">INvia mail per nuove canditarure ricevute a </label>
                        <input type="text" class="form-control input-sm" value="{{$impostazioni->candidatura_mail}}" id="candidatura_mail" name="candidatura_mail" required>
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
    
    activateMenuItem('lista_impostazioni');

    </script>    


@stop
