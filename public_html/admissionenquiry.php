<?php
/*echo "<pre>";
	print_r($_GET);
	echo "</pre>";
*/
$ParentsName = $_GET["ParentsName"];
$Parents_mobile = $_GET['Parents_mobile'];
$Parents_email = $_GET['Parents_email'];
$Location = $_GET['Location'];
$Student_Name = $_GET['Student_Name'];
$Student_Class = $_GET['Student_Class'];
$comment = $_GET['comment'];

print "<br /><br />Dear $ParentsName,<br /><br/>Thank you for contacting us.<br><br />
Our Team will get back to you soon.<br><br/>";

$bccmail = 'vtakky@gmail.com';
$ccmail  = 'enquire@innocenttimes.co.in';

$body = "Dear $ParentsName,

Thank you for submitting your enquiry.
Our Team will get back to you soon.

Regards
Innocent Times School
Sai Pratik,
260/2/4, Ganeshbaug,
Aundh, Pune - 411045

Phone : 020 2565 3123

Connect With Us : https://www.facebook.com/innocenttimes/";

$Adminbody  = "Hello,	
Details as follows:

Name : $ParentsName
Phone No : $Parents_mobile
Email : $Parents_email
Location : $Location
Student_Name : $Student_Name
Student_Class : $Student_Class
Comment : $comment";

$sub="Admission Enquiry Submission Acknowledgement from Innocent Times School";
$subadmin="Admission Enquiry Submited by ".$ParentsName;
$emailmanager = 'enquire@innocenttimes.co.in';

mail($Parents_email,$sub,$body,'From: '.$emailmanager);
mail($ccmail,$subadmin,$Adminbody,'From: '.$emailmanager);
mail($bccmail,$subadmin,$Adminbody,'From: '.$emailmanager);	
?>
