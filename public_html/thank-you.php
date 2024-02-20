<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Thank you!</title>
      <link rel="STYLESHEET" type="text/css" href="contact.css">
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

<h2>Thanks for contacting us!</h2>

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
