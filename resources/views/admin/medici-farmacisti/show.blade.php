@extends('admin.layouts.master')
@section('content')
<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Medici / Farmacisti</h2>
            <ul class="actions">
                <li>
                    <a href="/admin/medici-farmacisti">
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
                        <li>
                            <a href="/admin/lavora-con-noi" >Vai a Posizioni aperte</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
        </div>
        
        <div class="card">
            <div class="card-header">
                <h2>Mostra Medico / Farmacista</h2>
            </div>
            
            <div class="card-body card-padding">
                <!-- Form Name -->
                <fieldset>
                    <legend>Ruolo</legend>
                    <!-- Multiple Radios -->
                    <div class="form-group fg-line">
                        <div class="col-sm-6">
                            {{$utente->roles[0]->name}} <br><br>
                            @if($utente->roles[0]->name == 'Medico')
                            <a href="http://application.fnomceo.it/Fnomceo/public/ricercaProfessionisti.public" class="btn btn-primary" target="_blank">Vedi albo Medici</a>
                            @elseif($utente->roles[0]->name == 'Farmacista')
                            <a href="https://www.intranet-fofi.it/SitoFOFI/AlboUnicoNazionale.aspx" class="btn btn-primary" target="_blank">Vedi albo Farmacisti</a>
                            @endif
                            <br><br>
                        </div>
                    </div>
                    <!-- Form Name -->
                    <legend>Dati Personali</legend>
                    <!-- Text input-->
                    <div class="form-group fg-line">
                        <div class="col-sm-6">
                            {{$utente->first_name}}  {{$utente->last_name}} <br>
                            {{$utente->email}} <br><br>
                            Luogo di nascita: {{$utente->profile[0]->luogo_nascita}} il {{$utente->profile[0]->data_nascita}} <br>
                            Telefono: {{$utente->profile[0]->telefono}} <br><br>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    
                    <legend>Area per farmacisti</legend>
                    <!-- Text input-->
                    <div class="form-group fg-line">
                        <label class="col-sm-6 control-label" >Farmacia/Altro:</label>
                        <div class="col-sm-6">
                            {{$utente->profile[0]->farmacia}}
                        </div>
                    </div>
                    <!-- Select Basic -->
                    <div class="form-group fg-line">
                        <label class="col-sm-6 control-label" >Posizione</label>
                        <div class="col-sm-6">
                            {{$utente->profile[0]->farmacia_posizione}}
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    
                    <legend>Informazioni</legend>
                    <div class="form-group fg-line">
                        <div class="col-sm-6">
                            Anno di Laurea : {{$utente->profile[0]->anno_laurea}} <br>
                            N° Iscr. Albo: {{$utente->profile[0]->numero_albo}} <br>
                            Provincia di Iscr. Albo: {{$utente->profile[0]->provincia_albo_rel->nome}} <br>
                            Specializzazione: {{$utente->profile[0]->specializzazione_rel->nome}} <br><br>
                        </div>
                    </div>
                    
                    
                </fieldset>
                <fieldset>
                    <!-- Form Name -->
                    <legend>Luogo di esercizio</legend>
                    <!-- Text input-->
                    <div class="form-group fg-line">
                        <div class="col-sm-6">
                            {{$utente->profile[0]->indirizzo_attivita}} <br>
                            {{$utente->profile[0]->citta_attivita}} <br>
                            {{$utente->profile[0]->provincia_attivita_rel->nome}} <br>
                            {{$utente->profile[0]->cap_attivita}} <br><br>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Residenza</legend>
                    <!-- Text input-->
                    <div class="form-group fg-line">
                        <div class="col-sm-6">
                            {{$utente->profile[0]->indirizzo_residenza}} <br>
                            {{$utente->profile[0]->citta_residenza}} <br>
                            {{$utente->profile[0]->provincia_residenza_rel->nome}} <br>
                            {{$utente->profile[0]->cap_attivita}} <br>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="card">
            
            <div class="card-body card-padding">
                <div class="form-group fg-line">
                    <div class="col-sm-6">
                        <form action="/admin/medici-farmacisti/{{$utente->id}}" method="POST">
                            {!!csrf_field()!!}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="user_id" value="{{$utente->id}}">
                            @if($utente->active == 1)
                            <input type="hidden" name="active" value="off">
                            <button type="submit" class="btn btn-danger">Disattiva questo utente</button>
                            @else
                            <input type="hidden" name="active" value="on">
                            <button type="submit" class="btn btn-success">Attiva questo utente</button>
                            @endif
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
activateSidebar('utenti_menu', 'medici_farmacisti');
</script>
@stop