<?
// URL: www.freecontactform.com
// Version: FreeContactForm Lite V1.0
// Copyright (c) 2009 Stuart Cochrane <stuartc1@gmail.com>
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
// THE SOFTWARE.
if(isset($_POST['email_address'])) {
	
	include 'lite_settings.php';
	
	if($email_to == "you@yourdomain.com") {
		die("This message is for the Webmaster. Please enter your email address into the file 'lite_settings.php'");
	}
	
	function died($error) {
		echo "Sorry, but there were error(s) found with the form your submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	if(	!isset($_POST['userName']) ||		
		!isset($_POST['email_address']) ||
		!isset($_POST['mobile']) ||
		!isset($_POST['lockdown']) ||
		!isset($_POST['online']) ||
		!isset($_POST['rate']) ||
		!isset($_POST['gaps']) ||
		!isset($_POST['time']) ||
		!isset($_POST['crisis']) ||
		!isset($_POST['activities']) ||
		!isset($_POST['interested']) ||
		!isset($_POST['situation']) ||
		!isset($_POST['actlist']) ||
		!isset($_POST['threethings']) ||
		!isset($_POST['threearea'])) {
		died('We are sorry, but there appears to be a problem with the form your submitted.');		
	}

	//variable declaration required
	
	$userName = $_POST['userName']; // required
	$email_address = $_POST['email_address']; // required
	$mobile = $_POST['mobile']; // required
	$lockdown = $_POST['lockdown']; //required
	$online = $_POST['online']; // required
	$rate = $_POST['rate']; // required
	$gaps = $_POST['gaps']; //required
	$time = $_POST['time']; //required
	$crisis = $_POST['crisis']; // required
	$activities = $_POST['activities']; //required
	$interested = $_POST['interested']; //required
	$situation = $_POST['situation']; //required
	$actlist = $_POST['actlist']; // required
	$threethings = $_POST['threethings']; //required
	$threearea = $_POST['threearea']; //required
		
	$error_message = "";
	$email_from ="";
	$email_exp = "^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$";
    $count="";
  if(!preg_replace($email_exp,$email_from,$count)) {
  	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  /*
  if(strlen($First_Name) < 2) {
  	$error_message .= 'Your Name does not appear to be valid.<br />';
  }
  if(strlen($Special_Needs) < 2) {
  	$error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  
  if(strlen($error_message) > 0) {
  	died($error_message);
  }*/
	$email_message = "Form details below.\r\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	$email_message="";
	$email_message .= "Name : ".clean_string($userName)."\r\n";
	$email_message .= "Email Address : ".clean_string($email_address)."\r\n";
	$email_message .= "Phone : ".clean_string($mobile)."\r\n";
    $email_message .= "1) Will you send your child to school when the authorities allow the schools to open? \r\n Or will you wait to allow things to settle down?  : "."\r\n".clean_string($lockdown)."\r\n";
	$email_message .= "2) Do you think online education is a good substitute until things normalise?"."\r\n".clean_string($online)."\r\n";
    $email_message .= "3) Does your child have access to a computer for online classes that is not being used by another family member? "."\r\n".clean_string($rate)."\r\n";
	$email_message .= "4) Is there sufficient WIFI bandwidth for an online class considering the child’s parents will be working from home? "."\r\n".clean_string($gaps)."\r\n";
    $email_message .= "5) If Innocent Times is operational but an online class option (provided by Innocent Times) 
	                       is also available, would you choose the online option or will you send your child to school? "."\r\n".clean_string($time)."\r\n";
	$email_message .= "6) Based on accessibility to a computer and space/time availability, how long will your child be available per day for online classes? "."\r\n".clean_string($crisis)."\r\n";
    $email_message .= "7) What morning time would you prefer the sessions to start? "."\r\n".clean_string($activities)."\r\n";
	$email_message .= "8) What afternoon time would you prefer the sessions to start?"."\r\n".clean_string($interested)."\r\n";
	
	$email_message .= "9)As the situation is uncertain, we are planning to start the academic year with online classes from May 2020 so that when the situation returns to normal and the school re-opens, the curriculum can continue. Will you enrol your child for the class? "."\r\n".clean_string($situation)."\r\n";
	$email_message .= "10)We are planning to include other fun activities in addition to academics in online classes. If you think this is a good idea, please list any activities that you would like included? "."\r\n".clean_string($actlist)."\r\n";
    $email_message .= "11)What three things do we think we do well at Innocent Times? "."\r\n".clean_string($threethings)."\r\n";
	$email_message .= "12)What three areas do we need to improve at Innocent Times "."\r\n".clean_string($threearea)."\r\n";
	
	//services
	if (isset($_POST["Services"]) && is_array($_POST["Services"])
    && count($_POST["Services"]) > 0)
    {
	    foreach($_POST['Services']  as  $checkFeatures)  {
	    	$email_message .= "Features: $checkFeatures\n";
	    }
    } // END services
$email_from =$email_address;	
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion(). "\r\n";
mail($email_to, $email_subject.$userName, $email_message);
header("Location: $thankyou");
?>
<script>location.replace('<? echo $thankyou;?>')</script>
<?
}
?>
