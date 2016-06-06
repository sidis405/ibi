@extends('emails.master')

@section("content")

<table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailBody">
	<tr>
		<td style="font-family: 'Droid Sans', Arial, sans-serif; padding-bottom: 0;" align="left" valign="top">
			<h2 style="color: #00509a; font-weight: 100; margin-top: 0;">Una nuova Segnalazione Farmaco Vigilanza ibi-lorenzini.it</h2>
			<ul style="text-align: justify; font-family: 'Droid Sans', Arial, sans-serif;">
				<li>
					<b>Nome: {{$segnalazione['nome']}}</b>
				</li>
				<li>
					<b>Cognome: {{$segnalazione['cognome']}}</b>
				</li>
				<li>
					<b>Email:  {{$segnalazione['email']}}</b>
				</li>
				<li>
					<b>Data di nascita: {{$segnalazione['dob']}}</b>
				</li>
				<li>
					<b>Segnalazione: {{$segnalazione['segnalazione']}}</b>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td style="font-family: 'Droid Sans', Arial, sans-serif; padding-top: 0;" align="left" valign="top">
			<p style="font-size: 14px;">
				Per visualizzare tutte le informazioni relative a questa segnalazione <a href="http://www.ibi-lorenzini.it/admin/farmaco-vigilanza/segnalazioni/{{$segnalazione['id']}}">clicca qui</a>
			</p>
		</td>
	</tr>
</table>

@stop