<?php
//get data from form  
$name = $_POST['userName'];
$phone = $_POST['mobile'];
$email= $_POST['email_address'];
$message= $_POST['message'];
$to = "innocenttimes@gmail.com, design@optimist.co.in, prashant@optimist.co.in";
$subject = "Message from InnocentTimes Contact us form";
$txt =" Full Name - ". $name . "\r\n Phone number - " . $phone . "\r\n Email - " . $email .  "\r\n Message - " . $message;
$headers = "From: " . $email;

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thanks.html");
?>