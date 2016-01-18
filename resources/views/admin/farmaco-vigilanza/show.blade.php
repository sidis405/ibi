@extends('admin.layouts.master')

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Segnalazioni</h2>

                         <ul class="actions">
                            <li>
                                <a href="/admin/farmaco-vigilanza/segnalazioni">
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
                                    <h2>Mostra Segnalazione</h2>
                                </div>
                                
                                <div class="card-body card-padding">


                                    <div class="form-group fg-line">
                                        <label for="">Nome</label>
                                        <div>{{$segnalazione->nome}}</div>
                                    </div>

                                    <div class="form-group fg-line">
                                        <label for="">Cognome</label>
                                        <div>{{$segnalazione->cognome}}</div>
                                    </div>

                                    <div class="form-group fg-line">
                                        <label for="">Email</label>
                                        <div>{{$segnalazione->email}}</div>
                                    </div>

                                    <div class="form-group fg-line">
                                        <label for="">Data di nascita</label>
                                        <div>{{$segnalazione->dob}}</div>
                                    </div>

                                    <div class="form-group fg-line">
                                        <label for="">Segnalazione</label>
                                        <div>{{$segnalazione->segnalazione}}</div>
                                    </div>

                                    
                                </div>
                            </div>
                            


                </div>
            </section>
        

@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('farmaco_vigilanza_menu', 'segnalazioni');

    </script>   


@stop
