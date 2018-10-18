<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        #Reemplazar este correo por el correo electrónico del destinatario
        $mail_to = "renzo-rc-ar@hotmail.com";
        
        # Envío de datos
        $subject = trim($_POST["subject"]);
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["phone"]);
        $message = trim($_POST["message"]);
        
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($phone) OR empty($subject) OR empty($message)) {
            # Establecer un código de respuesta y salida.
            http_response_code(400);
            echo "Por favor completa el formulario y vuelve a intentarlo.";
            exit;
        }
        
        # Contenido del correo
        $content = '                        <!DOCTYPE html>
                            <html>
                            <head>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                            
                            </head>

                            <body yahoo style="margin: 0; padding: 0; min-width: 100%!important;">
                            <table width="100%" bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                            <td>
                                <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0" style="width: 100%; max-width: 600px; margin-top: 40px;margin-bottom: 40px;">
                                <tr>
                                    <td class="borderbottom">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                        <td style="padding: 15px 0px 15px 0px;">
                                            <img style="width: 140px;" class="fix" src="http://sabaequipamientos.com/alfa/images/logo-saba.svg" width="130" border="0" alt="" height="auto"; />
                                        </td>
                                        </tr>
                                    </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td bgcolor="#000000" class="header" style="padding: 20px 30px 20px 30px;">
                                    <table class="col425" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                        <tr>
                                        <td height="70">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="font-family: sans-serif; font-size: 23px; line-height: 25px; font-weight: bold;  color: #ffffff">
                                                Formulario  de Contacto - Saba Equipamientos
                                                </td>
                                            </tr>
                                            </table>
                                        </td>
                                        </tr>
                                    </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="borderbottom" style="padding: 30px 30px 30px 30px;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                        <td style="font-family: sans-serif; padding: 0 0 15px 0; font-size: 20px; line-height: 22px; font-weight: 400; color: #818181;">
                                            '.$name.',  se ha contactado
                                        </td>
                                        </tr>
                                        <tr>
                                        <td style="font-family: sans-serif; font-size: 15px; line-height: 22px;">
                                            Hemos recibido una consulta desde el formulario web de sabaequipamientos.com
                                        </td>
                                        </tr>
                                    </table>
                                    </td>
                                </tr>
                                                <tr>
                                                <td class="borderbottom"  bgcolor="#f6f6f6" style="padding: 10px 30px;">
                                                    <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <!-- nombre del label -->
                                                        <td style="color:#666666; font-family: sans-serif; font-size: 15px; line-height: 22px;">
                                                        <b>Nombre: </b>'.$name.'
                                                        </td>
                                                        <!-- fin nombre del label -->
                                                    </tr>
                                                    </table>

                                                </td>
                                                </tr>

                                                <tr>
                                                    <td class="borderbottom"  bgcolor="#ffffffff" style="padding: 10px 30px;">
                                                        <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <!-- nombre del label -->
                                                            <td style="color:#666666; font-family: sans-serif; font-size: 15px; line-height: 22px;">
                                                            <b>Teléfono: </b>'.$phone.'
                                                            </td>
                                                            <!-- fin nombre del label -->
                                                        </tr>
                                                        </table>

                                                    </td>
                                                </tr>

                                                <tr>
                                                <td class="borderbottom"  bgcolor="#f6f6f6" style="padding: 10px 30px;">
                                                    <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <!-- nombre del label -->
                                                        <td style="color:#666666; font-family: sans-serif; font-size: 15px; line-height: 22px;">
                                                        <b>Email: </b>'.$email.'
                                                        </td>
                                                        <!-- fin nombre del label -->
                                                    </tr>
                                                    </table>

                                                </td>
                                                </tr>
                                                <tr>
                                                <td class="borderbottom"  bgcolor="#ffffffff" style="padding: 10px 30px;">
                                                    <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <!-- nombre del label -->
                                                        <td style="color:#666666; font-family: sans-serif; font-size: 15px; line-height: 22px;">
                                                        <b>Asunto: </b>'.$subject.'
                                                        </td>
                                                        <!-- fin nombre del label -->
                                                    </tr>
                                                    </table>

                                                </td>
                                                </tr>


                                                <tr>
                                                <td class="borderbottom"  bgcolor="#f6f6f6" style="padding: 10px 30px;">
                                                    <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <!-- nombre del label -->
                                                        <td style="color:#666666; font-family: sans-serif; font-size: 15px; line-height: 22px;">
                                                        <b>Mensaje: </b><br>'.$message.'
                                                        </td>
                                                        <!-- fin nombre del label -->
                                                    </tr>
                                                    </table>

                                                </td>
                                                </tr>



                                <tr>
                                    <td bgcolor="#000000" style="padding: 20px 30px 15px 30px;">

                                    </td>
                                </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                    </td>
                                    </tr>
                                </table>
                                <![endif]-->
                                </td>
                            </tr>
                            </table>

                            </body>
                            </html>';

        # Encabezados de correo electrónico.
        $headers = "From: $name <$email>";
        $headers .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $headers .= "Mime-Version: 1.0 \r\n";
        $headers .= "Content-Type: text/html";
        

        # Envía el correo.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            # Establece un código de respuesta 200 (correcto).
            http_response_code(200);
            echo "¡Gracias! Tu mensaje ha sido enviado.";
        } else {
            # Establezce un código de respuesta 500 (error interno del servidor).
            http_response_code(500);
            echo "Oops! Algo salió mal, no pudimos enviar tu mensaje.";
        }

    } else {
        # No es una solicitud POST, establezce un código de respuesta 403 (prohibido).
        http_response_code(403);
        echo "Hubo un problema con tu envío, intenta de nuevo.";
    }

?>
