<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $subject = trim($_POST["subject"]);
  $message = trim($_POST["message"]);

  $smtp = array(
    'host' => 'smtp-mail.outlook.com',
    'username' => '',
    'password' => '',
    'port' => 587,
  );


  $to = 'joasdiaz98@gmail.com';

  $email_message = "Name: $name\n";
  $email_message .= "Email: $email\n";
  $email_message .= "Subject: $subject\n";
  $email_message .= "Message:\n$message";

  $headers = "From: $email\n";
  $headers .= "Reply-To: $email\n";

  if (mail($to, $subject, $email_message, $headers)) {
    echo 'OK';
  } else {
    echo 'Error al enviar el correo';
  }
}
?>
