<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet" type="text/css">
</head>
<body style="margin: 0; padding: 0;">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="550" style="border-collapse: collapse;">
    <tr>
        <td align="center" bgcolor="#ffffff"
            style="padding: 0 20px 0 20px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td align="center" style="padding: 60px 20px 60px 20px; border-bottom: 2px solid #08BE7B;">
                        <img src="{{URL::asset('/images/logo_ohne_header.png')}}" alt="Ohne" width="auto" height="70"
                             style="display: block;"/>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#ffffff" style="padding: 30px 20px 30px 20px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td style="color: #153643; font-family: 'Fira Sans', sans-serif; font-size: 24px;">
                        <b></b>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 20px 0 0 0; color: #8A8A8A; font-family: 'Fira Sans', sans-serif; font-size: 17px; line-height: 20px;">
                        @yield('content')
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#00C57D" style="padding: 30px 30px 30px 30px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td width="50%" align="center"
                        style="color: #153643; font-family: 'Fira Sans', sans-serif; font-size: 16px; line-height: 20px;padding-left: 70px;">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="color: #153643; font-family: 'Fira Sans', sans-serif; font-size: 16px; line-height: 20px;">
                                    <a href="https://www.facebook.com/ohne.br/">
                                        <img src="{{URL::asset('/images/icone_facebook.png')}}" alt="Facebook"
                                             width="34"
                                             height="34" style="display: block;" border="0"/>
                                    </a>
                                </td>
                                <td style="font-size: 0; line-height: 0; color: #153643; font-family: 'Fira Sans', sans-serif; font-size: 16px; line-height: 20px;"
                                    width="20">&nbsp;
                                </td>
                                <td>
                                    <a href="https://www.linkedin.com/company/ohne-br/">
                                        <img src="{{URL::asset('/images/icone_linkedin.png')}}" alt="Linkedin"
                                             width="34"
                                             height="34" style="display: block;" border="0"/>
                                    </a>
                                </td>
                                <td style="font-size: 0; line-height: 0; color: #153643; font-family: 'Fira Sans', sans-serif; font-size: 16px; line-height: 20px;"
                                    width="20">&nbsp;
                                </td>
                                <td>
                                    <a href="https://www.instagram.com/ohne.br/">
                                        <img src="{{URL::asset('/images/icone_instagram.png')}}" alt="Instagram"
                                             width="34"
                                             height="34" style="display: block;" border="0"/>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td align="center"
                        style="color: #ffffff; font-family: 'Fira Sans', sans-serif; font-size: 16px; line-height: 20px; padding-right: 70px; ">
                        <a href="https://www.ohne.com.br/">
                            <img src="{{URL::asset('/images/logo_ohne_rodape.png')}}" alt="Ohne" width="auto"
                                 height="42"
                                 style="display: block;" border="0"/>
                        </a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#08BE7B" align="center" style="color: #ffffff; font-family: 'Fira Sans', sans-serif; font-size: 16px; line-height: 10px;">
            <p><b><a style="color: #ffffff" href="mailto:contato@ohne.com.br" target="_blank">contato@ohne.com.br</a></b></p>
        </td>
    </tr>
</table>
</body>
</html>