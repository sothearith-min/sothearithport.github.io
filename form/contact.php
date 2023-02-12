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


