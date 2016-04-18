@extends('emails.master')

@section("content")

<table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailBody">
	<tr>
		<td style="font-family: 'Droid Sans', Arial, sans-serif; padding-bottom: 0;" align="left" valign="top">
			<h2 style="color: #00509a; font-weight: 100; margin-top: 0;">Richiesta di iscrizione all'area riservata</h2>
			<ul style="text-align: justify; font-family: 'Droid Sans', Arial, sans-serif;">
				<li>
					<b>Nome: {{$utente['first_name']}}</b>
				</li>
				<li>
					<b>Cognome: {{$utente['last_name']}}</b>
				</li>
				<li>
					<b>Ruolo:  {{$utente->profile[0]->ruolo}}</b>
				</li>
				<li>
					<b>N° Iscr.Albo: {{$utente->profile[0]->numero_albo}}</b>
				</li>
				<li>
					<b>Specializzazione: {{$utente->profile[0]->specializzazione_rel->nome}}</b>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td style="font-family: 'Droid Sans', Arial, sans-serif; padding-top: 0;" align="left" valign="top">
			<p style="font-size: 14px;">
				Per visualizzare tutte le informazioni relative a questa registrazione <a href="http://demo.ibi-lorenzini.com/admin/medici-farmacisti/{{$utente['id']}}">clicca qui</a>
			</p>
		</td>
	</tr>
</table>

@stop