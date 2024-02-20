<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
//require_once("./include/fgcontactform.php");
//require_once("./include/captcha-creator.php");

//$formproc = new FGContactForm();
//$captcha = new FGCaptchaCreator('scaptcha');

//$formproc->EnableCaptcha($captcha);

//1. Add your email address here.
//You can add more than one receipients.
//$formproc->AddRecipient('innocenttimes@gmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
//$formproc->SetFormRandomKey('XsHVufPpgD9Epwl');

//$formproc->AddFileUploadField('p1','jpg,jpeg,gif,png,bmp',2024);
//$formproc->AddFileUploadField('resume','jpg,jpeg,gif,png,bmp',2024);
//$formproc->AddFileUploadField('p2','jpg,jpeg,gif,png,bmp',2024);
//$formproc->AddFileUploadField('p3','jpg,jpeg,gif,png,bmp',2024);
//$formproc->AddFileUploadField('a1','jpg,jpeg,gif,png,bmp',2024);
//$formproc->AddFileUploadField('a2','jpg,jpeg,gif,png,bmp',2024);
$_SESSION['contactusForm'] = $_POST;
print_r($_SESSION);
if(isset($_POST['submitted']))
{
  // if($formproc->ProcessForm())
   {
     //   $formproc->RedirectToURL("thanks.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Addmission Form</title>
    <!--  <link rel="STYLESHEET" type="text/css" href="contact.css" />-->
      
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
      
      
      
<link href="fonts/barlow/stylesheet.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="fonts/font-awesome.min.css">
<link rel="stylesheet" href="asset/home/custom.css" type="text/css" >
<link rel="stylesheet" href="asset/lightbox/gallery.css" type="text/css">
<link href="asset/bootstrap/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
<link href="asset/lightbox/jquery.lightbox.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="asset/our-centre/our-centre.css" type="text/css">
<link rel="stylesheet" href="asset/responsive/gallery-responsive.css">
<link rel="stylesheet" href="asset/responsive/testinominal.css">
<link rel="stylesheet" href="asset/responsive/responsive.css">
<link rel="icon" href="images/favicon-1.png">
<link rel="stylesheet" href="asset/admission-form1.css">
      
 <style>
 </style>
<!--<style>
.addmission-title
{
    font-family: 'barlow_semiboldregular';
    font-size: 40px;
    text-align: center;
    padding-top: 2%;
    padding-bottom: 5%;
    color: #fff;
}
.btn-smt {
   font-family: 'barlowregular';
    background: #000;
    color: #fff;
    font-size: 16px;
    padding: 1.5%;
    border: 0;
    padding-left: 4%;
    padding-right: 4%;
}
.addmission-box
{
    background-color: #273684;
    height:100px;
    margin-top:16%;
}
.survey
{
color: #adadad;
    font-size: 80%;
}
.spmhidip
{
    display:none;
}
}
.padd0
{
padding-top:0% !important;
}
.paddright
{
    padding-right: 5%;
}
.tpad
{
padding-bottom:4% !important;
}
.frm-testi1 {
    background-color: transparent;
    border: none;
    font-family: barlowregular;
    width:100%;
    padding: 2%;
    padding-left: 0;
    border-bottom: 1px dotted #bcb8b8;
    margin-top:5%;
}
.addmission-form {
    padding-top: 6%;
    padding-bottom: 5%;
    padding-left: 6%;
    padding-right: 6%;
}
.padd-top{
margin-top:0% !important;
}
</style>-->

<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WHXFP6S');</script>
    <!-- End Google Tag Manager -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-235634990-1"></script>
	<script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-235634990-1');
    </script>
	</head>
<body >
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHXFP6S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="enquir-tab">
	<div class="call-icon">
		<img src="images/home/call.png" alt="call-icon" class="img-fluid call-icon">
	</div>
	<div class="call-us">
			<p><a href="tel:919767788797" style="color: white;">+91 9767788797</a></p>
		</div>
	<div class="call-buttons ml-auto">
		<a href="contact.html"><button type="button" class="btn btn-info">Admission Enquiry</button></a>
		<a href="franchise-enquiry.html"><button type="button" class="btn btn-info">Franchise Enquiry</button></a>
	</div>
</div>
<div class="wrapper">
<div class="container">
	<nav class="navbar fixed-top navbar-expand-lg navbar-light " style="color:rgb(0,0,0,0.4)">
		<a class="navbar-brand" href="index.html"><img src="images/Innocent Times Logo Final.png" alt="innocent times logo" class="img-fluid"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	  
		 <div class="collapse navbar-collapse" id="navbarSupportedContent1">
		<ul class="nav ml-auto">
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" id="navbarDropdown" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OUR CENTRES</a>
			  
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				
				<h5 id="first"><a class="dropdown-item" href="our-centre-safety.html">SELECTING THE RIGHT CENTRE</a></h5>
				
				<h5 id="inside"><a class="dropdown-item dropdown-toggle">INSIDE INNOCENT TIMES</a></h5>
				
				<p id="inside1"><a class="dropdown-subitem" href="food-nutrition.html">FOOD AND NUTRITION</a></p>
				<p id="inside2"><a class="dropdown-subitem" href="childcare-safety.html">CHILDCARE SAFETY</a></p>
				
				<h5 id="second"><a class="dropdown-item dropdown-toggle" href="">TESTIMONIALS</a></h5>
				<p id="two"><a class="dropdown-subitem" href="parent-teacher-testinominal.html">PARENT AND TEACHER TESTIMONIALS</a></p>
				<p id="three"><a class="dropdown-subitem" href="share-your-story.html">SHARE YOUR INNOCENT TIMES STORY</a></p>
			
			<p id="four"><a class="dropdown-item" href="gallery.html">GALLERY</a></p>
<!--			<p id="five"><a class="dropdown-item" href="franchise-enquiry.html">FRANCHISE ENQUIRY</a></p>-->
        	</div>
			  
		  </li>
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" id="navbarDropdown2" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PROGRAMMES AND CURRICULUM</a>
			  <div class="dropdown-menu programmes-item" aria-labelledby="navbarDropdown">
				
				<h5><a class="dropdown-item" href="nursery-school.html">NURSERY SCHOOL</a></h5>
				<h5><a class="dropdown-item" href="infant-care.html">INFANT CARE</a></h5>
				<h5><a class="dropdown-item" href="toddler-care.html">TODDLER CARE</a></h5>
				<h5><a class="dropdown-item" href="online-school.html">ONLINE SCHOOL</a></h5>
				<h5><a class="dropdown-item" href="early-intervention-centre.html">EARLY INTERVENTION CENTRE</a></h5>
				<h5><a class="dropdown-item" href="inclusive-education-center.html">INCLUSIVE EDUCATION</a></h5>
				<h5><a class="dropdown-item" href="before-and-after-school-programme.html">BEFORE AND AFTER SCHOOL PROGRAMME</a></h5>
				<h5><a class="dropdown-item" href="school-break-solutions.html">SCHOOL BREAK SOLUTIONS</a></h5>
				 <h5><a class="dropdown-item" href="teachers-training-programme.html">TEACHERS' TRAINING PROGRAMME</a></h5>
				<h5><a class="dropdown-item" href="upcoming-events.html">UPCOMING EVENTS</a></h5>
        	</div>
		  </li>
		  <li class="nav-item dropdown programmes-item">
			<a class="nav-link dropdown-toggle" id="navbarDropdown1" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT</a>

			<div class="dropdown-menu" aria-labelledby="navbarDropdown">

				<h5 id="about1"><a class="dropdown-item dropdown-toggle" href="">WHO WE ARE</a></h5>

				<p id="about-one"><a class="dropdown-subitem" href="who-we-are.html">OUR PHILOSOPHY</a></p>
				<p id="about-two"><a class="dropdown-subitem" href="leadership-and-expertise.html">LEADERSHIP &amp; EXPERTISE</a></p>
				<p id="about-three"><a class="dropdown-subitem" href="innocent-times-legacy-awards.html">INNOCENT TIMES LEGACY AWARDS</a></p>
				<p id="about-four"><a class="dropdown-subitem" href="team.html">OUR TEAM</a></p>

				<h5 id="about3"><a class="dropdown-item dropdown-toggle" href="">OUR VALUES</a></h5>
				<p id="about-seven"><a class="dropdown-subitem" href="community-service.html">COMMUNITY SERVICE</a></p>
				<p id="about-eight"><a class="dropdown-subitem" href="childcare-advocacy.html">CHILDCARE ADVOCACY</a></p>
				
				<h5 id="about4"><a class="dropdown-item" href="http://innocenttimes.com/blog/">BLOG</a></h5>
			</div>
 
          </li>
			
			<li class="nav-item dropdown programmes-item">
			<a class="nav-link dropdown-toggle" id="navbarDropdown3" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CONNECT WITH US</a>

			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<h5><a class="dropdown-item" href="careers.html">CAREERS</a></h5>
				
				<h5><a class="dropdown-item" href="employer-partnerships.html">EMPLOYER PARTNERSHIPS</a></h5>
				
				<h5><a class="dropdown-item" href="preschool-consultancy-services.html">PRESCHOOL CONSULTANCY</a></h5>
				
				<h5><a class="dropdown-item" href="franchise-enquiry.html">FRANCHISE ENQUIRY</a></h5>
			</div>
 
          </li>
		  <li class="nav-item">
			<a class="nav-link" href="contact.html">CONTACT US</a>
		  </li>
		</ul>
		
		
		<ul class="social ml-auto">
			<li class="social-icon">
			<a href="https://www.facebook.com/innocenttimes/" target="_blank"><img src="images/social/facebook.png" alt="facebook"></a>
		  	</li>
			
			<li class="social-icon">
			<a href="https://www.instagram.com/innocenttimes_pune/" target="_blank"><img src="images/social/instagram.png" alt="instagram"></a>
		  	</li>
		</ul>
      </div>
    </nav>
  </div>


             <div class="addmission-box">
                 <p class="addmission-title">Admission Form</p>
             </div>
         

	 <div class="addmission-form">
     <div class="container-fluid">
         
<!-- Form Code Start -->
<form id='contactus' action='' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

<fieldset >

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='' value=''/>
<input type='text'  class='spmhidip' name='' />

<!--<div class='short_explanation'>* required fields</div>-->

<div><span class='error'></span></div>
<div class="row">
         <!--<div class="col-sm-4"  >
		    <input type="text" name="regno"  class="frm-testi1"  Placeholder="Reg. No." required/>
         </div>-->
         
         <div class="col-sm-6">           
         <input type="text" name="date" placeholder="Date" class="frm-testi1" required />
         </div>
            
    <div class="col-sm-6">
    <input type='text' placeholder="Email" name='email' class="frm-testi1" id='email' value='' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
</div>
      
		 <div class="row">
         <div class="col-sm-6 col-12">
         <input type="text" name="name"  placeholder="Name of child" class="frm-testi1" required />
         </div>
		 
	    <div class="col-12 col-sm-6">
		 <input type="text" name="activity"  placeholder="Class/Activity applied for" class="frm-testi1" required />
		</div>
		<div class="col-12 col-sm-6">
              <input type="text" name="dob"  placeholder="DOB" class="frm-testi1" required />
		</div>
		<div class="col-12 col-sm-6">
              
             <input type="text" name="age"  placeholder="Age" class="frm-testi1" required />
		</div>
		</div>
		
		<div class="row">
			<div class="col-12 col-sm-6">
						<select type="text" name="gender" class="frm-testi1 tpad" required="required">
						<option value="">Gender</option>
							<option>Boy</option>
							<option>Girl</option>
						</select>
		
	    	</div>
			<div class="col-12 col-sm-6">
              <textarea name="current-school"  placeholder="Current School" class="frm-testi1" required rows="1" cols="50"></textarea>
			 
			</div>
		</div>	
			<div class="row">
			<div class="col-12 col-sm-6">
			  <textarea name="home-address"  placeholder="Home Address" class="frm-testi1" required rows="1" cols="50"></textarea>
			 
			</div>
			
			<div class="col-12 col-sm-6">  
			<textarea name="telephone"  placeholder="Telephone Number" class="frm-testi1" required rows="1" cols="50"></textarea>
			</div>
			</div>
			<div class="row">
			<div class="col-12 col-sm-6">
               <input type="text" name="mom-name" placeholder="Mother's Name"  class="frm-testi1 padd0" required />
			</div>
			<div class="col-12 col-sm-6">
               <input type="text" name="mom-present-profession" placeholder="Mother's Present Profession "   class="frm-testi1 padd0" required />
			</div>
			</div>
			<div class="row">
            <div class="col-12 col-sm-6">
               <input type="text" name="mom-area-of-interest"   placeholder="Mother's Area of Interest" class="frm-testi1 padd0" required />
			</div>
			
			<div class="col-12 col-sm-6">
               <input type="text" name="mom-office-address" placeholder="Mother's Office Address "  class="frm-testi1" required />
			</div>
			</div>
			
			<div class="row">
           <div class="col-12 col-sm-6">
               <input type="text" name="mom-tel-number" placeholder="Mother's Telephone Number "  class="frm-testi1" required />
			</div>
			<div class="col-12 col-sm-6">
               <input type="text" name="mom-mob-number" placeholder="Mother's Mobile Number"  class="frm-testi1" required />
			</div>
			</div>
			<div class="row">
			<div class="col-12 col-sm-6">
               <input type="text" name="mom-office-address" placeholder="Mother's Email"  class="frm-testi1" required />
			</div>
			<div class="col-12 col-sm-6">
               <input type="text" name="dad-name"  placeholder="Father's Name" class="frm-testi1" required />
			</div>
           </div>
			
			<div class="row">  
			
			<div class="col-12 col-sm-6">
               <input type="text" name="dad-present-profession" placeholder="Father's Present Profession "  class="frm-testi1" required />
			</div>
            <div class="col-12 col-sm-6">			
               <input type="text" name="dad-area-of-interest" placeholder="Father's Area of Interest"   class="frm-testi1" required />
			</div>
			</div>
			
			<div class="row">
			<div class="col-12 col-sm-6">
               <input type="text" name="dad-office-address"  placeholder="Father's Office Address " class="frm-testi1" required />
			</div>
			 <div class="col-12 col-sm-6">
               <input type="text" name="dad-tel-number" placeholder="Father's Telephone Number"  class="frm-testi1" required />
			</div>
			</div>
			
			<div class="row">
          
           <div class="col-12 col-sm-6">
               <input type="text" name="dad-mob-number" placeholder="Father's Mobile Number"  class="frm-testi1" required />
			</div>
			<div class="col-12 col-sm-6">
               <input type="email" name="dad-office-address" placeholder="Father's Email"  class="frm-testi1" required />
			</div>
</div>

        <!--	<div class="row">
			<div class="col-sm-6">  
               <input type="text" name="siblings"  placeholder="Siblings" class="frm-testi1" required />
			</div>
			
			<div class="col-sm-6">  
               <input type="text" name="siblings-innocent"  placeholder="Siblings who attend Inocent Times" class="frm-testi1" required />
			</div>
			</div>
			
			<div class="row">
			<div class="col-sm-6"><br>
			  <label class="control-label paddright" for="textinput">
              Has the child attended any other programmes
              at other childcare centres(Please give details)</label>  
              <textarea name="other-childcare"  class="frm-testi1 padd-top" required rows="1" cols="20"></textarea>
				
			</div>
			
			<div class="col-sm-6">
              <br>
			<label class="control-label paddright" for="textinput">Any serious illness,handicaps or learning  difficulties</label>
			 <textarea name="any-illness"  class="frm-testi1 padd-top" required rows="2" cols="20"></textarea>
			</div>
			
			</div>
			
			<div class="row">
			<div class="col-sm-6">
              <br>
			<label class="control-label paddright" for="textinput">Any specific allergies?</label>
			<input type="text" name="allergies"   class="frm-testi1 padd-top" required />
			</div>
			
			<div class="col-sm-6">
              <br>
			<label class="control-label paddright" for="textinput">Languages Known(Mother Tongue First)</label>
			<input type="text" name="languages-known"   class="frm-testi1 padd-top" required />
			</div>
			</div>
			<div class="row">
			<div class="col-sm-7">
              <br>
			  <label class="control-label paddright" for="textinput">
              Please briely write why you would like your child to be a part  of Innocent Times</label>  
              <textarea name="child-like"  class="frm-testi1 padd-top" required rows="1" cols="50"></textarea>
				
			</div>
			
			<div class="col-sm-5">
              <br>
			<label class="control-label paddright" for="textinput">Name and address of Local Guardian(if any)
            </label>
			<input type="text" name="address-guardian"   class="frm-testi1 padd-top" required />
			</div>
			</div>
			
			<div class="row">
			 <div class="col-sm-12">
              <br>
			  <label class="control-label" for="textinput"> Fill in the following to help us know more about your 
			  child(Likes and Dislikes)</label>  
              <br>
			 
            </div>
			</div>
			
			<div class="row">
			<div class="col-sm-4">
			 <label class="control-label" for="textinput">Foods</label>
			  <textarea name="child-like-foods"  class="frm-testi1" required rows="1" cols="50"></textarea>
			</div>
			<div class="col-sm-4">
			  <label class="control-label" for="textinput">Colors</label>  
			  <textarea name="child-like-foods"  class="frm-testi1" required rows="1" cols="50"></textarea>
			 </div>
			
			<div class="col-sm-4">
			  <label class="control-label" for="textinput">Sports</label>  
			  <textarea name="child-like-sports"  class="frm-testi1" required rows="1" cols="50"></textarea>
			 </div>
			</div>
			
			<div class="row">
			<div class="col-sm-4">
			  <label class="control-label" for="textinput">Interest</label>  
              <br>
			  <textarea name="child-like-interest"  class="frm-testi1" required rows="2" cols="50"></textarea>
			</div>
			
			<div class="col-sm-4">
			  <label class="control-label" for="textinput">TV</label>  
              <br>
			  <textarea name="child-like-tv"  class="frm-testi1" required rows="2" cols="50"></textarea>
			  
            </div>
			
			</div>
				<div class="row">
			<div class="col-sm-12">
			    <label class="control-label paddright" for="textinput">
				Parent's resource information:<br>
				Please select the following if you wish to offer 
				voluntary support to Innocent Times in any of the
				areas below. </label>
			</div>
			<div class="col-sm-4">
				<select type="text" name="voluntary-support" class="frm-testi1 tpad" required="required">
						<option value="">Art and Craft</option>
							<option>Concert</option>
							<option>Sports</option>
							<option>Field trips</option>
							<option>Events</option>
							<option>Props/Toys Commons</option>
						</select>
				</div>
				</div>-->
			<br>
			<div class="row">
			<div class="col-12">
			<label for='newdoc' >Upload Birth Certification: (jpg, jpeg, gif, png, bmp)</label><br/>
			<input type="file" name='resume' id='resume' /><br/>
			<span id='contactus_resume_errorloc' class='error'></span>
			</div>
			</div>
			<br>
			<div class="row">
			<div class="col-12">
			<label for='newdoc' >Photographs of the child, one each of parents and guardians who
			would be picking up the child from the centre:<br> (jpg, jpeg, gif, png, bmp)</label><br/>

						
				<input type="file" name='p1' id='p1' />
				<span id='contactus_photo_errorloc' class='error'></span>
				
				
				<input type="file" name='p2' id='p2' />
				<span id='contactus_photo_errorloc' class='error'></span>

					<input type="file" name='p3' id='p3' />
				<span id='contactus_photo_errorloc' class='error'></span>
						</div>
			</div>
			<br>
			<div class="row">
			<div class="width-50">
			<label for='newdoc' >Upload Father's Aadhaar Card:<br>(jpg, jpeg, gif, png, bmp)</label><br/>
			<input type="file" name='a1' id='a1' />
				<span id='contactus_photo_errorloc' class='error'></span>
			</div>
			<div class="col-sm-4 desk-view">
			<label for='newdoc' >Upload Mother's Aadhaar Card :<br>(jpg, jpeg, gif, png, bmp)</label><br/>
			<input type="file" name='a2' id='a2' />
				<span id='contactus_photo_errorloc' class='error'></span>
			</div>
			</div>
			
<br>


<br>
   <div class="container-fluid lft-sp">
			<div class="row">
			    <div class="col-sm-12">
			       <input type="checkbox" id="myCheck" name="test" required>&nbsp;DECLARATION: We declare that the information given above is true.We understand and agree that the centre's
decisions on matters of admission and the child's participation at the centre will be final.
                 </div>
			</div>
         </div>
			<br>
<div class="container-fluid lft-sp">
    <div class="row">
        <div class="col-sm-12">
    <input type="submit" class="btn-smt" value="SUBMIT  →">
    
    
    </div>
</div>
</div>
</div>
</div>
</fieldset>
</form>


<section class="footer"> 
	<div class="container">
	<div class="row">
	 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-4">
		<img src="images/footer-logo.png" alt="innocent images footer logo" class="img-fluid logo-footer">
	 </div>
	<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-4">
		<h3 class="footer-title">Get in Touch</h3>
		<p class="footer-para">
		Innocent Times School<br>
		Sai Pratik,<br>
		260/2/4, Ganeshbaug,<br>
		Aundh, Pune - 411045
		<br><br>
		+91 9767788797<br>
		+91 20 25653123
		<br><br>
		info@innocenttimes.com
		</p>
		
	</div>
	<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-4 ">
		<h3 class="footer-title">Useful Links</h3>
		<a href="nursery-school.html" class="footer-link">Nursery School</a>
		<hr class="footer-hr">
		<a href="early-intervention-centre.html" class="footer-link">Early Intervention Centre</a>
		<hr class="footer-hr">
		<a href="before-and-after-school-programme.html" class="footer-link ">After School Programme</a>
		<hr class="footer-hr">
		<a href="franchise-enquiry.html" class="footer-link">Franchise Enquiry</a>
		<hr class="footer-hr">
		<a href="employer-partnerships.html" class="footer-link">Employer Partnerships</a>
		<hr class="footer-hr">
		<a href="who-we-are.html" class="footer-link">About Us</a>
		<hr class="footer-hr">
		<a href="gallery.html" class="footer-link ">Gallery</a>
		<hr class="footer-hr">
	 </div>
	<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-12 d-none d-sm-block">
		<h3 class="footer-title">Opening Hours</h3>
		<a href="#" class="footer-time"><span>Mon-Wed </span>08:00-02:00</a>
		<hr class="footer-hr">
		<a href="#" class="footer-time"><span>Thu-Fri </span>&nbsp;&nbsp;&nbsp;&nbsp; 08:00-02:00</a>
		<hr class="footer-hr">
		<a href="#" class="footer-time"><span>Saturday</span>&nbsp;&nbsp;&nbsp;Closed</a>
		<hr class="footer-hr">
		<a href="#" class="footer-time"><span>Sunday</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Closed</a>
		<hr class="footer-hr">
		
	 </div>
	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 d-none d-sm-block">
		<h3 class="footer-title">Quick Connect</h3>
		 <form action="lite_process.php" method="post" class="space">
         <div class="col-sm-12" style="padding-left: 0px;background-color:transparent;" >
          <input type="text" name="userName" class="frmm" placeholder="Name:" required/>
         </div>
		  
         <div class="col-sm-12" style="padding-left: 0px">
         <input type="text" name="mobile" class="frmm" placeholder="Phone / Mobile No.:" required/>
         </div>
          
         <div class="col-sm-12" style="padding-left: 0px">
         <input type="email" name="email_address" class="frmm" placeholder=" Enter Your E-Mail " required/>
         </div> 
        
         <div class="col-sm-12" style="padding-left: 0px">
         <textarea name="message" cols="" rows="3" class="frmm" placeholder="Message:" required></textarea>
         </div>
         
         <div class="col-sm-12 sumbit-btm-topsp" style="padding-left: 0px">
		 <input type="submit" class="sumbit-btn" value="SUBMIT  &rarr;"  />	
		 </div>
      
      </form>
	 </div>
	</div>
		
	<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<p class="footer-copyright">Copyright © Innocent Times Childcare Pvt. Ltd. All Rights Reserved•
						Designed &amp; Developed by:<a href="https://www.optimist.co.in/"> OPTIMIST BRAND DESIGN
							LLP.</a></p>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 text-right">
					<p class="mt-15"><a href="terms-and-conditions.html" class="footer-copyright">Terms &amp;
							Conditions</a> | <a href="privacy-policy.html" class="footer-copyright">Privacy Policy</a>
					</p>
				</div>
			</div>
	</div>
</section>
</div>

<!--checkbox-->
<script>
function myFunction() {
  var x = document.getElementById("myCheck").required;
  document.getElementById("demo").innerHTML = x;
}
</script>

<script src="asset/bootstrap/bootstrap-4.3.1.js"> </script>
<script src="asset/bootstrap/popper.min.js"></script>

<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");


    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    frmvalidator.addValidation("photo","file_extn=jpg;jpeg;gif;png;bmp","Upload images only. Supported file types are: jpg,gif,png,bmp");

    frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

    document.forms['contactus'].scaptcha.validator
      = new FG_CaptchaValidator(document.forms['contactus'].scaptcha,
                    document.images['scaptcha_img']);

    function SCaptcha_Validate()
    {
        return document.forms['contactus'].scaptcha.validator.validate();
    }

    frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

    function refresh_captcha_img()
    {
        var img = document.images['scaptcha_img'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
    }

// ]]>
</script>


<style>
		.floating-wid {
			position: fixed;
			bottom: 0px;
			right: 0px;
			width: 300px;
			color: #5B4CA7;
			background-color: #FFEE00;
			padding: 20px;
			z-index: 999999;
			border-radius: 20px;
			transform: scale(0.85);
		}

		.floating-wid h4 {
			cursor: pointer;
		}
	</style>
	<div class="floating-wid shadow">
		<h4 class="footer-title text-center" id="getform">Quick Enquiry</h4>
		<form action="lite_process.php" method="post" class="space d-none" id="showform">
			<div class="col-sm-12" style="padding-left: 0px;background-color:transparent;">
				<input type="text" name="userName" class="frmm" placeholder="Name:" required />
			</div>

			<div class="col-sm-12" style="padding-left: 0px">
				<input type="text" name="mobile" class="frmm" placeholder="Phone / Mobile No.:" required />
			</div>

			<div class="col-sm-12" style="padding-left: 0px">
				<input type="email" name="email_address" class="frmm" placeholder=" Enter Your E-Mail " required />
			</div>

			<div class="col-sm-12" style="padding-left: 0px">
				<textarea name="message" cols="" rows="3" class="frmm" placeholder="Message:" required></textarea>
			</div>

			<div class="col-sm-12 sumbit-btm-topsp" style="padding-left: 0px;">
				<input style="background-color: #5B4CA7; color: white !important;" type="submit" class="sumbit-btn"
					value="SUBMIT  &rarr;" />
			</div>

		</form>
	</div>

	<script>
		var getForm = document.getElementById("getform");
		var showForm = document.getElementById("showform");
		getForm.addEventListener("click", () => {
			showForm.classList.toggle("d-none");
		})
	</script>
</body>
</html>