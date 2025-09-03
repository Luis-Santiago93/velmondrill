<?php
if(isset($_POST['Correo'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "operaciones@velmondrill.com ,karla.uco@velmondrill.com";
$email_subject = "Velmondrill S.A. de C.V. - Nueva Solicitud de Proceso de Compra de Curso";
$email_from=$_POST['Titulo'];

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['Nombre']) ||
!isset($_POST['Apellidos']) ||
!isset($_POST['Curp']) ||
!isset($_POST['Celular']) ||
!isset($_POST['Titulo'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$html = "<tbody>\n";

   
    foreach($_POST['CarritoCurso'] as $fila)
      {
        $html .= "<tr>\n";
        $html .= "<td>&nbsp;" . $fila["nombre"] . "&nbsp;</td>\n";
        $html .= "<td>&nbsp;" . $fila["precio"] . "&nbsp;</td>\n";

        $html .= "</tr>\n";
      }
$html .= "</tbody>\n";

$email_message = "<html>
<head>
  <title></title>
</head>
<body>
  <h3>Te notificamos que se solicito unos cursos desde la página web, con los siguientes datos " .utf8_decode( $_POST['Nombre']) . " " . utf8_decode($_POST['Apellidos']) . "  con CURP " .utf8_decode( $_POST['Curp']) . "  y correo " .$_POST['Correo'] . "  con celular ".$_POST['Celular'] . "</h3>
  <hr>
  
  <div style='background-color:#fff;width:570px;border:1px solid #e9e6e6;margin:0 auto;padding:15px 30px;font-family:Arial,Helvetica,sans-serif'>
        <div>
            <h2 style='text-align:center;color:#dd3333'> <img border='0' width='200' height='90' src='http://www.velmondrill.com/images/logo.png'></h2>
        </div>
        <div style='background-color:#333;padding:5px 30px;color:white'>
            <h3 style='text-align:center'>¡Posible cliente!</h3>
            <p style='text-align:justify'>
                <strong style='color:#dd3333'><b>Velmondrill</b></strong> le recuerda darle seguimiento a este cliente y asi en un futuro crearle su usuario y contraseña en la plataforma de los cursos.
            </p>
        </div>
        <div style='padding:0 30px'>
            <h2 style='text-align:center;color:#525050'>Detalles de la compra</h2>
            <div style='text-align:center;'>
            <table border='1' style='margin: 0 auto;'>
               <tr bgcolor= '#f2dede'>
                <th>Curso</th>
                <th>Precio Unitario</th>
              </tr>
              " . $html ."
              <tfoot bgcolor= '#eeeeee'>
              <tr>
            	<td style='text-align:right;'><b>Subtotal</b></td>
                  <td>" . $_POST['Subtotal'] . "</td>
                </tr>
                <tr>
              <tr>
            	<td style='text-align:right;'><b>IVA</b></td>
                  <td>" . $_POST['IVA'] . "</td>
                </tr>
                <tr>
            	<td style='text-align:right;'><b>Total</b></td>
                  <td>" . $_POST['Total'] . "</td>
                </tr>
              </tfoot>
              </table>
             </div> 
        </div><br/>
        <div style='background-color:#333;padding:5px 30px;margin-top:10px'>
            <p> <strong style='color:#dd3333'><b>Velmondrill S.A. de C.V.</b></strong></p>
        </div>
    </div>
</body>
</html>";
//$email_message = "Detalles del formulario de contacto:\n\n";
//$email_message .= "Nombre: " . $_POST['Nombre'] . "\n";
//$email_message .= "E-mail: " . $_POST['Email'] . "\n";
//$email_message .= "Telefono: " . $_POST['Celular'] . "\n";
//$email_message .= "Interes: " . $_POST['Interes'] . "\n";
//$email_message .= "Comentarios: " . $_POST['Comentario'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

$Mensaje="Correo enviado con exito";
}
else{
    $Mensaje="Hubo un error al momento de enviar el correo";
}


header('Content-type: application/json; charset=utf-8');
echo json_encode($Mensaje);
exit();

?>