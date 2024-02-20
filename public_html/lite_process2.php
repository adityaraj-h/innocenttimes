<?php
//get data from form  
$pname = $_POST['ParentsName'];
$pmobile = $_POST['Parents_mobile'];
$pemail= $_POST['Parents_email'];
$location = $_POST['Location'];
$sname = $_POST['Student_Name'];
$sclass = $_POST['Student_Class'];
$message= $_POST['comment'];
$to = "innocenttimes@gmail.com";
$subject = "Message from InnocentTimes Admission Enquiry form";
$txt =" Parents Name - ". $pname . "\r\n Parents Phone number - " . $pmobile . "\r\n Parents Email - " . $pemail . "\r\n Location - " . $location . "\r\n Student Name - " . $sname . "\r\n Student Class - " . $sclass . "\r\n Message - " . $message;
$headers = "From: " . $pemail;

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thanks.html");
?>