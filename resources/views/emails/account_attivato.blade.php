@extends('emails.master')

@section("content")

<table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailBody">
	<tr>
		<td style="font-family: 'Droid Sans', Arial, sans-serif; padding-bottom: 0;" align="left" valign="top">
			<h2 style="color: #00509a; font-weight: 100; margin-top: 0;">Il tuo account su ibi-lorenzini.it è attivo	</h2>
			
			</ul>
		</td>
	</tr>
	<tr>
		<td style="font-family: 'Droid Sans', Arial, sans-serif; padding-top: 0;" align="left" valign="top">
			<p style="font-size: 14px;">
				Non rispondere a questo messaggio automatico perché le informazioni andranno perse. 
				<br><br>Do not replay this automated message because the information will be lost
			</p>
		</td>
	</tr>
	<tr>
		<td style="font-family: 'Droid Sans', Arial, sans-serif; padding-top: 0;" align="left" valign="top">
			<p style="font-size: 14px;">
				Per effettuare subito l'accesso <a href="http://www.ibi-lorenzini.it/?login=true">clicca qui</a>
			</p>
		</td>
	</tr>
</table>

@stop