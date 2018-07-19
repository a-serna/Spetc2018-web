<?php
  $first_name = $_POST['first_name'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];
  $from = 'capitulospe_med@unal.edu.co';
  $to = 'capitulospe_med@unal.edu.co';
  $subject = 'contacto SPE';
  $body = "From: $first_name\n E-Mail: $email\n Mensaje:\n $mensaje";
  if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
      echo '<!DOCTYPE html>
     <html>
       <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
         <title>Mensaje exitoso</title>
       </head>
        <body>
          <header>
          </header>
          <main class="container">
           <div class="row">
             <div class="col s12 center-align">
               <h6 class="grey-text text-darken-3">Tu mensaje ha sido enviado éxitosamente</h6>
               <p class="grey-text">Responderemos lo antes posible</p>
             </div>
           </div>
          </main>
          <footer>
          </footer>
        </body>
      </html>';
     } else {
      echo '<!DOCTYPE html>
     <html>
       <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
         <title>Mensaje Fallido</title>
       </head>
        <body>
          <header>
          </header>
          <main class="container">
           <div class="row">
             <div class="col s12 center-align">
               <h6 class="grey-text text-darken-3">Tu mensaje ha fallado</h6>
               <p class="grey-text">Responderemos lo antes posible</p>
             </div>
           </div>
          </main>
          <footer>
          </footer>
        </body>
      </html>';
     }
  }
?>
