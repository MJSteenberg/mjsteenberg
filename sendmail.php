<?php
  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "mj@mark1.co.za";
    $subject = "New message from " . $name;
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email\nReply-To: $email";
    mail($to, $subject, $body, $headers);
  }
?>
