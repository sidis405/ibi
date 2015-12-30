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
                            </ul>
                        </li>
                        <li><a href="/admin/contenuti"><i class="zmdi zmdi-comment-edit"></i> Contenuti sito</a></li>
                        <li><a href="/admin/impostazioni"><i class="zmdi zmdi-settings"></i> Impostazioni</a></li>
                        <li>
                                <a href="/logout"><i class="zmdi zmdi-time-restore"></i> Esci</a>
                            </li>
                    </ul>
                </div>
            </aside>