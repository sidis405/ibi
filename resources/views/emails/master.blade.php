
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>

    <style type="text/css">           
        p {
            color: #6f707b;
            font-size: 18px;
            line-height: 25px;  
        }
        h2 {
            font-family: 'Roboto', Arial, sans-serif;
            font-weight: 300;
            font-size: 25px;
        }
        #emailBody2 a {
            color: #6f707b;
            text-decoration: none;
        }
        #emailBody2 a:hover {            
            text-decoration: underline !important;
        }
        #emailFooter a {
            color: #fff;
            text-decoration: none !important;
        }   
        #emailFooter {
            background: #00509a;
        }
        #emailFooter  p {
            color: #fff;
            font-size: 14px;
            line-height: 18px;
            margin: 0;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 40px 0 0px 0;
        }
        ul li {
            margin: 25px 0;
        }
    </style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
    <tr>
        <td align="center" valign="top">
            <table border="0" cellpadding="20" cellspacing="0" width="600" id="emailContainer">
                <tr>
                    <td align="center" valign="top" style="padding-bottom: 0;">
                        <table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailHeader">
                            <tr>
                                <td align="left" valign="top">
                                    <img src="http://www.ibi-lorenzini.it/img/ibi-lorenzini-logo.png">
                                </td>
                            </tr>                           
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top" style="padding-top: 0; padding-bottom: 0;">
                       @yield("content")                       
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top" style="padding-top: 0;">
                        <table style="font-family: 'Droid Sans', Arial, sans-serif" border="0" cellpadding="20" cellspacing="20" width="95%" id="emailFooter">
                            <tr>
                                <td style="font-family: 'Droid Sans', Arial, sans-serif" align="left" valign="top">                                   
                                   <p>
                                        Istituto Biochimico Italiano<br>
                                        Giovanni Lorenzini S.p.A. <br>
                                        Via Fossignano, 2 <br>
                                        04011 Aprilia (LT)<br>
                                        Italia                                        
                                        
                                   </p>
                                </td>
                                <td style="font-family: 'Droid Sans', Arial, sans-serif" align="left" valign="top">                                   
                                   <p>
                                        Centralino: +39.06.92150.1<br>
                                        Fax: +39.06.92150.500<br>
                                        info@ibi-lorenzini.it<br>
                                        P.IVA 02578030153
                                   </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>