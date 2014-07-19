<?php

Form::macro('recaptcha', function($errors)
{
       $html = ' <div class="form-group">';
       $html .= Form::captcha();
       $html .= Helpers::displayError("recaptcha_response_field", $errors);
       $html .= '<div class="clearfix"></div></div>';

    return $html;
});

HTML::macro('emailTemplate', function(array $data)
{
    $emailTemp = '<!DOCTYPE html>
                    <html>
                        <head>
                        <meta charset="UTF-8">';

    $emailTemp .= '<title>'.$data['title'].'</title>';

    $emailTemp .= '</head>
                    <body>
                        <div style="background-color:#f2f2f2">
                            <center>
                                <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="background-color:#f2f2f2">
                                    <tbody>
                                    <tr>
                                        <td align="center" valign="top" style="padding:40px 20px">
                                            <table border="0" cellpadding="0" cellspacing="0" style="width:600px">
                                                <tbody>
                                                <tr>
                                                    <td align="center" valign="top">
                                                        <a href="http://aracademia.com" title="Aracademia" style="text-decoration:none" target="_blank">
                                                        <img src="https://ci3.googleusercontent.com/proxy/KRMMioN3adrZWThCRsSvdVqUpC2sZ9_jhA0U-oaoAnM1Hd-ZzsHFZxC37CnJDuTcM78S00yZLynuCLXeclbjNTcyOZeHFk8af99PXJG5gBq4zBGAS9TmFwtPATxMUw=s0-d-e1-ft#http://cdn-images.mailchimp.com/template_images/logo_freddie_newhead.png" alt="Aracademia" height="" width="75" style="border:0;color:#6dc6dd!important;font-family:Helvetica,Arial,sans-serif;font-size:60px;font-weight:bold;min-height:auto!important;letter-spacing:-4px;line-height:100%;outline:none;text-align:center;text-decoration:none">
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" valign="top" style="padding-top:30px;padding-bottom:30px">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color:#ffffff;border-collapse:separate!important;border-radius:4px">
                                                            <tbody>
                                                            <tr>
                                                                <td align="center" valign="top" style="color:#606060;font-family:Helvetica,Arial,sans-serif;font-size:15px;line-height:150%;padding-top:40px;padding-right:40px;padding-bottom:30px;padding-left:40px;text-align:center">';
    $emailTemp .=   '<h1 style="color:#606060!important;font-family:Helvetica,Arial,sans-serif;font-size:40px;font-weight:bold;letter-spacing:-1px;line-height:115%;margin:0;padding:0;text-align:center">'
                    .$data['headerText'].
                    '</h1><br>';

    $emailTemp .= '<h3 style="color:#606060!important;font-family:Helvetica,Arial,sans-serif;font-size:18px;letter-spacing:-.5px;line-height:115%;margin:0;padding:0;text-align:center">'
                    .$data['fullName'].
                    '</h3><br>';

    $emailTemp .= $data['clickBelow1'];
    $emailTemp .= '</td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="middle" style="padding-right:40px;padding-bottom:40px;padding-left:40px">
                                                <table border="0" cellpadding="0" cellspacing="0" style="background-color:#ED591A;border-collapse:separate!important;border-radius:3px">
                                                    <tbody>
                                                    <tr>
                                                        <td align="center" valign="middle" style="color:#ffffff;font-family:Helvetica,Arial,sans-serif;font-size:15px;font-weight:bold;line-height:100%;padding-top:18px;padding-right:15px;padding-bottom:15px;padding-left:15px">
                                                            ';
    $emailTemp .= '<a href="'.$data['buttonUrl'].'" style="color:#ffffff;text-decoration:none" target="_blank">'.$data['buttonText'].'</a>';
    $emailTemp .= '</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                       <tr>
                                            <td align="center" valign="top" style="color:#606060;font-family:Helvetica,Arial,sans-serif;font-size:15px;line-height:150%;padding-top:40px;padding-right:40px;padding-bottom:30px;padding-left:40px;text-align:center">';
    $emailTemp .= $data['clickBelow2'];
    $emailTemp .= '</td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="middle" style="padding-right:40px;padding-bottom:40px;padding-left:40px">
                                                <table border="0" cellpadding="0" cellspacing="0" style="background-color:#ED591A;border-collapse:separate!important;border-radius:3px">
                                                    <tbody>
                                                    <tr>
                                                        <td align="center" valign="middle" style="color:#ffffff;font-family:Helvetica,Arial,sans-serif;font-size:15px;font-weight:bold;line-height:100%;padding-top:18px;padding-right:15px;padding-bottom:15px;padding-left:15px">
                                                            ';
    $emailTemp .= '<a href="'.$data['buttonUrl2'].'" style="color:#ffffff;text-decoration:none" target="_blank">'.$data['buttonText2'].'</a>';
    $emailTemp .= '</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tbody>
                                        <tr>
                                            <td align="center" valign="top" style="color:#606060;font-family:Helvetica,Arial,sans-serif;font-size:13px;line-height:125%">
    © '.date("Y").' Aracademia <span style="font-size:10px!important;vertical-align:super">®</span>,
                                                جميع الحقوق محفوظة
<br>
                                                <a href="http://aracademia.com/contact" style="color:#606060!important;text-decoration:none!important"><span style="color:#606060!important">
    إتصل بالإدارة
</span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top" style="padding-top:30px">
                                                <a href="http://aracademia.com" title="Aracademia" style="text-decoration:none" target="_blank">
                                                <img src="https://ci4.googleusercontent.com/proxy/ORARBqIXruSGHdh396HXrLK_UwPgZbdmW0v4R0zxVBHaQiMSoI5ZFuYGatwL-aRkKNmzn6-Hb-hlFPPpaz6jMcKj8nEv0QjPw2HvvD5kcmt2XfM1ScE7TQ9CWRkpL48=s0-d-e1-ft#http://cdn-images.mailchimp.com/template_images/logo_newscript_footer.png" height="25" width="100" style="border:0;outline:none;text-decoration:none"></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody></table>
                    </td>
                </tr>
                </tbody></table>
        </center>
    </div>
</body>
</html>';

   return $emailTemp;
});

HTML::macro('contactForm', function($url, $errors)
{
    $contact     = '<hr class="vertical-space1">';
    $contact    .= Form::open(array('url'=>$url,'role'=>'form'));

    $fullName = null;
    $email = null;

    if(Sentry::check())
    {
        $fullName = Session::get('fullName');
        $email = Session::get('email');

        $contact    .= '<div class="form-group">';
        $contact    .= Form::label('fullName',' الإسم الكامل ');
        $contact    .= Form::text('fullName', $fullName, array('class'=>'form-control','placeholder'=>' إسمك ','readonly'));
        $contact    .= Helpers::displayError('fullName', $errors);
        $contact    .= '</div>';

        $contact    .= '<div class="form-group">';
        $contact    .= Form::label('email',' البريد الإلكتروني ');
        $contact    .= Form::email('email', $email, array('class'=>'form-control','readonly','placeholder'=>'  بريدك الإلكتروني '));
        $contact    .= Helpers::displayError('email', $errors);
        $contact    .= '</div>';
    }
    else
    {
        $contact    .= '<div class="form-group">';
        $contact    .= Form::label('fullName',' الإسم الكامل ');
        $contact    .= Form::text('fullName', null, array('class'=>'form-control','placeholder'=>' إسمك '));
        $contact    .= Helpers::displayError('fullName', $errors);
        $contact    .= '</div>';

        $contact    .= '<div class="form-group">';
        $contact    .= Form::label('email',' البريد الإلكتروني ');
        $contact    .= Form::email('email', null, array('class'=>'form-control','placeholder'=>'  بريدك الإلكتروني '));
        $contact    .= Helpers::displayError('email', $errors);
        $contact    .= '</div>';


    }

    $contact    .= '<div class="form-group">';
    $contact    .= Form::label('msg',' الرسالة ');
    $contact    .= Form::textarea('msg', null, array('class'=>'form-control','placeholder'=>'  رسالتك '));
    $contact    .= Helpers::displayError('msg', $errors);
    $contact    .= '</div>';

    $contact    .= Form::recaptcha($errors);
    $contact    .= '<div class="form-group">';
    $contact    .= Form::submit(' إتصل بالإدارة ',array('class'=>'btn btn-primary ','name'=>'submit'));
    $contact    .= '</div>';
    $contact    .= Form::close();

    return $contact;
});

