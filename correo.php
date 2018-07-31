<?php
  // $first_name = $_POST['first_name'];
  // $email = $_POST['email'];
  // $texto = $_POST['texto'];
  // $from = 'From: www.spetc2018.com';
  // $to = 'capitulospe_med@unal.edu.co';
  // $subject = 'contacto SPE';
  // $body = "From: $first_name\n E-Mail: $email\n Texto:\n $texto";
  // if ($_POST['submit']) {
  //   if (mail ($to, $subject, $body, $from)) {
  //     echo 'Logrado';
  //    } else {
  //     echo 'Fallido';
  //    }
  // }
  header("Content-type: text/html;charset=\"utf-8\"");
  $first_name = $_POST['first_name'];
  $email = $_POST['email'];
  $texto = $_POST['texto'];

  $header = 'From: ' . $email . " \r\n";
  $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
  $header .= "Mime-Version: 1.0 \r\n";
  $header .= "Content-Type: text/plain";

  $mensaje = "Este mensaje fue enviado por " . $first_name . ",\r\n";
  $mensaje .= "Su e-mail es: " . $email . " \r\n";
  $mensaje .= "Mensaje: " . $texto . " \r\n";
  $mensaje .= "Enviado el " . date('d/m/Y', time());

  $para = 'capitulospe_med@unal.edu.co';
  $asunto = 'Mensaje de SPETC2018';

  if (mail($para, $asunto, utf8_decode($mensaje), $header))
  echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
  echo "<script type='text/javascript'>window.location.href='http://spetc2018.com';</script>";
?>
