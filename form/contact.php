<?php

if (isset($_POST['submit'])) {
  $to = "sothearithmin@gmail.com"; // Replace with your email address
  $from = $_POST['email'];
  $name = $_POST['name'];
  $subject = "New form submission from $name";
  $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
  $headers = "From:" . $from;

  mail($to,$subject,$message,$headers);
  echo "Your message has been sent. Thank you!";
}

?>
