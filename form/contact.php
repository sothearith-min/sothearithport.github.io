<?php
if(isset($_POST['submit'])){
    $to = "sothearithmin@gmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $header = "From: ".$_POST['email'];
    
    if(mail($to,$subject,$message,$header)){
        echo "Email sent successfully";
    }
    else{
        echo "Email not sent";
    }
}
?>

<form method="post">
    <input type="text" name="subject" placeholder="Subject">
    <br><br>
    <textarea name="message" placeholder="Message"></textarea>
    <br><br>
    <input type="email" name="email" placeholder="Your email">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

