<?php

require_once('vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (isset($_POST['submit'])) {
   $to = "18nrankin@gmail.com";
   $subject = "[Website Message] ".$_POST['subject'];
   $message = 'New message from: '.$_POST['name']."\n".'Reply to: '.$_POST['mail']."\n\nBegin Message:\n".$_POST['message'];
   $from = "me@nathan-rankin.com";
   $headers = "From:" . $from;

   $secretKey = $_ENV['CAPTCHA_SECRET'];
   $responseKey = $_POST['g-recaptcha-response'];
   $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey";
   $response = file_get_contents($url);
   $response = json_decode($response);

   if ($response->success) {
      $sent = mail($to,$subject,$message,$headers);
      header("Location: contact.php?sent=".$sent);
   } else {
      header("Location: contact.php?sent=2");
   }
}

?>