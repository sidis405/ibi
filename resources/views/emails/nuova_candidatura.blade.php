@extends('emails.master')

@section("content")

<table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailBody">
    <tr>
        <td style="font-family: 'Droid Sans', Arial, sans-serif; padding-bottom: 0;" align="left" valign="top">
            <h2 style="color: #00509a; font-weight: 100; margin-top: 0;">Nuova candidatura ricevuta per per un posizione aperta</h2>
        </td>
    </tr>
    <tr>
        <td style="font-family: 'Droid Sans', Arial, sans-serif; padding-top: 0;" align="left" valign="top">
            <p style="font-size: 14px;">
                Per visualizzare tutte le informazioni relative a questa canditatura <a href="http://www.ibi-lorenzini.it/admin/lavora-con-noi/candidature/{{$candidatura->id}}">clicca qui</a>
            </p>
        </td>
    </tr>
</table>

@stop