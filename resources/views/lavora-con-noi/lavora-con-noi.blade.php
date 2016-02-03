@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header lavora-con-noi">
      <div class="container">
        <div class="main-caption">
          <h1>Lavora con noi</h1>
        </div>
      </div>
    </div>
    <section class="content lavora-con-noi-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">            
            <p style="margin-top: 0;" class="borded">
              Lavorare in IBI significa inserirsi in una realtà imprenditoriale solida e dinamica che associa ad una lunga tradizione storica un forte orientamento al futuro.
              <br><br>
              Per vincere le molteplici sfide prefissate, IBI valorizza le risorse umane, investe nella loro formazione ed offre un ambiente di lavoro stimolante e con buone prospettive di crescita. Particolare attenzione è rivolta ai giovani,  studenti, neolaureati, disoccupati/inoccupati,  che hanno l’opportunità di sviluppare il proprio potenziale attraverso l’inserimento in stage.
            </p>
            <h4>Possibilità per la tua laurea:</h4><img src="/img/lavora-con-noi.jpg" alt="" class="img-responsive borded">
            <p>
              I profili prevalentemente ricercati appartengono alle seguenti aree: tecnico-produttiva (produzione, manutenzione, laboratori controllo qualità), medico scientifica, ricerca e sviluppo, marketing e vendite, amministrazione, finanza e controllo, risorse umane, logistica, acquisti, information technology.
              Entusiasmo, creatività, motivazione, spirito di iniziativa e capacità di lavorare in team sono le caratteristiche fondamentali che il candidato ideale deve possedere.
              I canali di reclutamento preferenziali sono le candidature spontanee, i contatti con le Università ed alcune società di selezione specializzate. 
              <br><br>
              La Direzione Risorse Umane, in collaborazione con i Responsabili di funzione, cura lo screening dei curricula pervenuti ed effettua diversi colloqui individuali al fine di selezionare la candidatura più idonea alle esigenze aziendali.
              La condivisione dei valori aziendali - attenzione alle persone, trasparenza, integrità e correttezza nei rapporti, apertura al cambiamento nel rispetto del passato - è requisito indispensabile per entrare a far parte della squadra IBI ed è ciò che la rende riconoscibile all’esterno come azienda affidabile ed eticamente responsabile.
            </p><a href="/lavora-con-noi/invia-candidatura">
              <div class="btn btn-primary">Invia la tua candidatura</div></a>
          </div>
          <div class="col-md-4">
            <div class="sidebar lavora-con-noi-sidebar">
              @include('lavora-con-noi.posizioni_partial')
            </div>
          </div>
        </div>
      </div>
    </section>
@stop