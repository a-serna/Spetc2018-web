<?php
  // llamando los campos
  $name = $post['name'];
  $email = $post['email'];
  $mensaje = $post['mensaje'];

  // datos para el correo
  $destinatario = "capitulospe_med@unal.edu.co";
  $asunto = "Mensaje enviado de spetc2018.com";

  $body = "De: $name \n";
  $body .= "Email: $email \n";
  $body .= "Mensaje: $mensaje";

  //envio Mensaje
  mail($destinatario, $asunto, $body);
  header('Location:sucess.html')
?>
