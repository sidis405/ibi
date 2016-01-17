@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header farmacovigilanza">
      <div class="container">
        <div class="main-caption">
          <h1>Farmacovigilanza</h1>
        </div>
      </div>
    </div>
    <section class="content farmacovigilanza-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h2>Farmacovigilanza</h2>
            <h3>La sicurezza prima di tutto</h3><img src="/img/home-content-img.jpg" class="img-responsive">
            <p>
              Il servizio di Farmacovigilanza all’interno dell’Industria Farmaceutica ha il compito di raccogliere tutte le informazioni sulla sicurezza dei principi attivi dei farmaci di cui è titolare dell’Autorizzazione all’Immissione in Commercio (AIC), per migliorare le modalità d’impiego e ridurre, quando possibile, il rischio di effetti indesiderati.<br>
              A tal fine il Servizio di Farmacovigilanza raccoglie, valuta e analizza le segnalazioni di reazioni avverse pervenute spontaneamente e fornisce tali informazioni alle Autorità Competenti, in modo tale da fornire informazioni utili alla salvaguardia della salute dei pazienti.
              <br><br>
              Inoltre il Servizio di Farmacovigilanza assicura che tutte le informazioni relative alla sicurezza dei farmaci siano portate rapidamente a conoscenza del personale sanitario.
            </p>
            <h4>Chi può segnalare?</h4>
            <p>La Farmacovigilanza coinvolge a diversi livelli tutta la comunità: pazienti, proscrittori, operatori sanitari, aziende farmaceutiche, istituzioni ed accademia e la segnalazione può essere effettuata non solo dall’operatore sanitario ma anche dai cittadini.</p>
            <h4>Come si effettua la segnalazione spontanea?</h4>
            <p>
              A partire dal 21 luglio 2012, gli operatori sanitari e/o i cittadini possono  effettuare  segnalazione spontanea di sospetta reazione avversa direttamente ad AIFA, mediante la compilazione della scheda cartacea o della scheda elettronica.
              <br><br>
              Le modalità di segnalazione sono descritte nel sito internet AIFA (Agenzia Italiana del Farmaco), al seguente link:
              http://www.agenziafarmaco.gov.it/it/content/modalit%C3%A0-di-segnalazione-delle-sospette-reazioni-avverse-ai-medicinali
              <br><br>
              In caso di reazioni avverse a prodotti a base di piante officinali e integratori alimentari,  è possibile effettuare una segnalazione di sospetta reazione avversa al seguente link: 
              http://www.epicentro.iss.it/focus/erbe/fitosorveglianza.asp
            </p>
            <h4>Quando segnalare?</h4>
            <p>
              Quando si sospetta che il farmaco sia causa dell’effetto indesiderato (anche in caso di dubbio)
              <br><br>
              Il Servizio di Farmacovigilanza per i prodotti medicinali distribuiti dalla società Ibisqus (concessionario di vendita), viene svolto dai rispettivi Titolari delle AIC (Autorizzazione all’Immissione in Commercio).
            </p>
          </div>
          <div class="col-md-4">
            <div class="sidebar farmacovigilanza-sidebar">
              <div class="row comunicati">
                <div class="col-xs-12">
                  <h3>Comunicati</h3>
                </div>
                <div class="col-xs-12">
                 @include('farmaco-vigilanza.comunicati_partial')
                </div>
              </div>
          
            </div>
          </div>
        </div>
      </div>
    </section>
    @stop