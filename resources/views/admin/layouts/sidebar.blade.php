<aside id="sidebar">
                <div class="sidebar-inner c-overflow">
                    <div class="profile-menu">
                        <a href="">
                            <div class="profile-pic">
                                <img src="/adm/img/profile-pics/1.jpg" alt="">
                            </div>

                            <div class="profile-info">
                                <span id="user_nicename">{{$user->present()->niceName()}}</span>

                                <i class="zmdi zmdi-arrow-drop-down"></i>
                            </div>
                        </a>

                        <ul class="main-menu">
                            <li>
                                <a href="/admin/impostazioni"><i class="zmdi zmdi-settings"></i> Impostazioni</a>
                            </li>
                            <li>
                                <a href="/logout"><i class="zmdi zmdi-time-restore"></i> Esci</a>
                            </li>
                        </ul>
                    </div>

                    <ul class="main-menu">
                        <li class="active"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="sub-menu">
                            <a href=""><i class="zmdi zmdi-widgets"></i> Prodotti</a>

                            <ul>
                                <li><a href="/admin/prodotti">Lista Prodotti</a></li>
                                <li><a class="active" href="/admin/prodotti/crea">Aggiungi Prodotto</a></li>
                                <li><a href="/admin/principi-attivi">Principi Attivi</a></li>
                                <li><a href="/admin/categorie-terapeutiche">Categorie Terapeutiche</a></li>
                                <li><a href="/admin/fascie">Fascie</a></li>
                                <li><a href="/admin/paesi-export">Paesi Export</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href=""><i class="zmdi zmdi-accounts"></i> Utenti</a>

                            <ul>
                                <li><a href="/admin/utenti">Lista Utenti</a></li>
                                <li><a class="active" href="/admin/utenti/crea">Aggiungi Utenti</a></li>
                                <li><a href="/admin/utenti/ruoli">Ruoli</a></li>
                                <li><a href="/admin/utenti/permessi">Permessi</a></li>
                            </ul>
                        </li>
                        <li><a href="/admin/news"><i class="zmdi zmdi-remote-control-alt"></i> News</a></li>
                        <li class="sub-menu">
                            <a href=""><i class="zmdi zmdi-accounts-list-alt"></i> Lavora con noi</a>

                            <ul>
                                <li><a href="/admin/lavora-con-noi">Lista posizioni aperte</a></li>
                                <li><a class="active" href="/admin/lavora-con-noi/crea">Aggiungi Posizione</a></li>
                                <li><a href="/admin/lavora-con-noi/candidature">Candidature</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href=""><i class="zmdi zmdi-hospital"></i> Farmacovigilanza</a>

                            <ul>
                                <li><a href="/admin/farmaco-vigilanza/comunicati">Comunicati</a></li>
                                <li><a href="/admin/farmaco-vigilanza/schede-segnalazione">Schede di Segnalazione</a></li>
                            </ul>
                        </li>
                        <li><a href="/admin/modifiche-contenuti-sito"><i class="zmdi zmdi-comment-edit"></i>Modifiche Contenuti Sito</a></li>
                        <li class="sub-menu">
                            <a href=""><i class="zmdi zmdi-border-left"></i> Struttura Sito</a>

                            <ul>
                                <li><a href="/admin/contenuti">Contenuti</a></li>
                                <li><a href="/admin/pagine">Pagine</a></li>
                            </ul>
                        </li>
                        <li><a href="/admin/impostazioni"><i class="zmdi zmdi-settings"></i> Impostazioni</a></li>
                        <li>
                                <a href="/logout"><i class="zmdi zmdi-time-restore"></i> Esci</a>
                            </li>
                    </ul>
                </div>
            </aside>