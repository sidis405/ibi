<aside id="sidebar">
    <div class="sidebar-inner c-overflow">
        <div class="profile-menu">
            <a href="">
                <div class="profile-pic">
                    <!-- <img src="/adm/img/profile-pics/1.jpg" alt=""> -->
                </div>
            </a>
            <div class="profile-info">
                <span id="user_nicename">{{$user->present()->niceName()}}</span>
                <i class="zmdi zmdi-arrow-drop-down"></i>
            </div>
            <ul class="main-menu">
            

                <li>
                    <a href="/logout"><i class="zmdi zmdi-time-restore"></i> Esci</a>
                </li>
            </ul>
        </div>
        <ul class="main-menu">
            

            <li class="active"><a href="/admin"><i class="zmdi zmdi-home"></i> Home</a></li>

            <li class="sub-menu @if(!in_array($user_role, ['Dev', 'Segreteria di Direzione', 'Ufficio Estero', 'Uff. Ibisqus', 'Stefania testa', 'Ufficio regolatorio'])) hide @endif" id="prodotti_menu">
                <a href=""><i class="zmdi zmdi-widgets"></i> Prodotti</a>
                <ul>
    
                    <li><a id="prodotti_menu_lista_prodotti" href="/admin/prodotti/ibi-export">Lista Prodotti Export</a></li>
                    <li><a id="prodotti_menu_lista_prodotti" href="/admin/prodotti/ibisqus-germania">Lista Ospedale Germania </a></li>
                    <li><a id="prodotti_menu_lista_prodotti" href="/admin/prodotti/ibisqus-italia">Lista Ospedale Italia</a></li>
                    <li><a id="prodotti_menu_lista_prodotti" href="/admin/prodotti/ibisqus-regno-unito">Lista Ospedale Uk</a></li>
                    <li><a id="prodotti_menu_lista_prodotti" href="/admin/prodotti/ibi-italia">Lista Prodotti Farmacia</a></li>
                    <li><a id="prodotti_menu_lista_prodotti" href="/admin/prodotti">Tutti i Prodotti</a></li>
                    <li><a id="prodotti_menu_aggiungi_prodotto"  href="/admin/prodotti/crea">Aggiungi Prodotto</a></li>
                    <li><a id="prodotti_menu_listini"  href="/admin/prodotti/listini-prodotti">Listini Prodotti</a></li>
                    <li><a id="prodotti_menu_principi_attivi"  href="/admin/principi-attivi">Principi Attivi</a></li>
                    <li><a id="prodotti_menu_categorie_terapeutiche"  href="/admin/categorie-terapeutiche">Categorie Terapeutiche</a></li>
                    <li><a id="prodotti_menu_fascie"  href="/admin/fascie">Fasce</a></li>
                    <li><a id="prodotti_menu_paesi_export"  href="/admin/paesi-export">Paesi Export</a></li>
                </ul>
            </li>
            <li class="sub-menu @if(!in_array($user_role, ['Dev', 'Segreteria di Direzione'])) hide @endif" id="utenti_menu">
                <a href=""><i class="zmdi zmdi-accounts"></i> Utenti</a>
                <ul>
                    <li><a href="/admin/utenti" id="utenti_menu_lista_utenti">Lista Utenti</a></li>
                    <li><a href="/admin/utenti/crea" id="utenti_menu_aggiungi_utenti">Aggiungi Utenti</a></li>
                    <li><a href="/admin/medici-farmacisti" id="utenti_menu_medici_farmacisti">Medici / Farmacisti</a></li>
                    <li><a href="/admin/utenti/ruoli" id="utenti_menu_ruoli">Ruoli</a></li>
                    <li><a href="/admin/utenti/permessi" id="utenti_menu_permessi">Permessi</a></li>
                </ul>
            </li>
            <li @if(!in_array($user_role, ['Dev','Segreteria di Direzione', 'Ufficio del Personale', 'Direzione Medica', 'Farmacovigilanza', 'Uff. Acquisti', 'Biotecnologie', 'R&S'])) hide @endif><a href="/admin/news"  id="lista_news"><i class="zmdi zmdi-remote-control-alt"></i> News</a></li>
            <li class="@if(!in_array($user_role, ['Dev','Segreteria di Direzione', 'Stefania testa', 'Direzione Medica'])) hide @endif"><a href="/admin/trasferimenti-di-valore"  id="lista_trasferimenti"><i class="zmdi zmdi-key"></i> Trasferimenti di valore</a></li>
            <li class="sub-menu @if(!in_array($user_role, ['Dev','Segreteria di Direzione'])) hide @endif" id="lavora_con_noi_menu">
                <a href=""><i class="zmdi zmdi-accounts-list-alt"></i> Lavora con noi</a>
                <ul>
                    <li><a href="/admin/lavora-con-noi" id="lavora_con_noi_menu_lista_posizioni">Lista posizioni aperte</a></li>
                    <li><a href="/admin/lavora-con-noi/crea" id="lavora_con_noi_menu_aggiungi_posizione">Aggiungi Posizione</a></li>
                    <li><a href="/admin/lavora-con-noi/candidature" id="lavora_con_noi_menu_candidature">Candidature</a></li>
                    <li><a href="/admin/lavora-con-noi/percentuale-dipendenti" id="lavora_con_noi_percentuale_dipendenti">Percentuale Dipendenti</a></li>
                </ul>
            </li>
            <li class="sub-menu @if(!in_array($user_role, ['Dev','Segreteria di Direzione', 'Ufficio del Personale'])) hide @endif" id="farmaco_vigilanza_menu">
                <a href=""><i class="zmdi zmdi-hospital"></i> Farmacovigilanza</a>
                <ul>
                    <li><a href="/admin/farmaco-vigilanza/comunicati" id="farmaco_vigilanza_menu_comunicati">Comunicati</a></li>
                    <li><a href="/admin/farmaco-vigilanza/segnalazioni" id="farmaco_vigilanza_menu_segnalazioni">Segnalazioni</a></li>
                    <!-- <li><a href="/admin/farmaco-vigilanza/schede" id="farmaco_vigilanza_menu_schede">Schede di Segnalazione</a></li> -->
                </ul>
            </li>

            <li class="sub-menu @if(!in_array($user_role, ['Dev', 'Segreteria di Direzione'])) hide @endif" id="contenuti_sito_menu">
                <a href=""><i class="zmdi zmdi-comment-edit"></i>Contenuti Sito</a>
                <ul>
                    <li><a href="/admin/modifiche-contenuti-sito" id="contenuti_sito_menu_modifiche">Modifiche</a></li>
                    <li><a href="/admin/slider" id="contenuti_sito_menu_slider">Slider Home</a></li>
                </ul>
            </li>

            <li class="sub-menu @if(!in_array($user_role, ['Dev', 'Segreteria di Direzione'])) hide @endif" id="struttura_menu">
                <a href=""><i class="zmdi zmdi-border-left"></i> Struttura Sito</a>
                <ul>
                    <li><a href="/admin/contenuti" id="struttura_menu_contenuti">Contenuti</a></li>
                    <li><a href="/admin/pagine" id="struttura_menu_pagine">Pagine</a></li>
                    <li><a href="/admin/voci-menu" id="struttura_menu_voci_menu">Voci Menu</a></li>
                </ul>
            </li>
            <li id="lista_impostazioni" class="@if(!in_array($user_role, ['Dev', 'Segreteria di Direzione'])) hide @endif"><a href="/admin/impostazioni"><i class="zmdi zmdi-settings"></i> Impostazioni</a></li>
            <li>
                <a href="/logout"><i class="zmdi zmdi-time-restore"></i> Esci</a>
            </li>
        </ul>
    </div>
</aside>