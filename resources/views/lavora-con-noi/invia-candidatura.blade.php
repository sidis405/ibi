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
            <h2>Invia la tua candidatura</h2>
            <p>
              Compila in tutte le sue parti il curriculum vitae.<br>
              	Attenzione, i campi contrassegnati con * sono obbligatori per processare la tua candidatura.
            </p>
            <p style="color: red;">Qui ci sarà un modulo con campi da compilare per l'utente che desidera inviare la candidatura</p>
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