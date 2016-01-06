@extends('admin.layouts.master')

@section('content')

  
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Candidature</h2>

                         <ul class="actions">
                            <li>
                                <a href="/admin/lavora-con-noi/candidature">
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
                                    <h2>Mostra candidatura</h2>
                                </div>
                                
                                <div class="card-body card-padding">
                                    <div class="form-group fg-line">
                                        <label for="">Posizione</label>
                                        <div>{{$candidatura->posizione->titolo}}</div>
                                    </div>
                                    <div class="form-group fg-line">
                                        <label for="">Sede</label>
                                        <div>{{$candidatura->posizione->sede}}</div>
                                    </div>

                                    <div class="form-group fg-line">
                                        <label for="">Nome</label>
                                        <div>{{$candidatura->nome}}</div>
                                    </div>

                                    <div class="form-group fg-line">
                                        <label for="">Cognome</label>
                                        <div>{{$candidatura->cognome}}</div>
                                    </div>

                                    <div class="form-group fg-line">
                                        <label for="">Email</label>
                                        <div>{{$candidatura->email}}</div>
                                    </div>

                                    <div class="form-group fg-line">
                                        <label for="">Messaggio</label>
                                        <div>{{$candidatura->messaggio}}</div>
                                    </div>

                                    <div class="form-group fg-line">
                                        <a href="/admin/lavora-con-noi/candidature/{{$candidatura->cv_path}}" target="_blank" class="btn btn-primary">Vedi Curriculum</a>
                                    </div>
                                    
                                </div>
                            </div>
                            


                </div>
            </section>
        

@stop


@section('sidebar_scripts')
        
    <script>
    
    activateSidebar('lavora_con_noi_menu', 'candidature');

    </script>    


@stop
