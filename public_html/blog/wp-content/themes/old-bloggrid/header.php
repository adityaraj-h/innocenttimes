<?php
/**
 * The header for our theme
 *
 * @package BlogGrid
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Innocent times</title>
	<link href="http://innocenttimes.com/blog/wp-content/themes/bloggrid/asset/bootstrap/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
	<link href="http://innocenttimes.com/blog/wp-content/themes/bloggrid/fonts/barlow/stylesheet.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://innocenttimes.com/blog/wp-content/themes/bloggrid/asset/home/custom.css" type="text/css">
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://innocenttimes.com/blog/wp-content/themes/bloggrid/asset/responsive/responsive.css" type="text/css">
	<link rel="icon" href="http://innocenttimes.com/blog/wp-content/themes/bloggrid/images/favicon-1.png">
	<script src="http://innocenttimes.com/blog/wp-content/themes/bloggrid/js/jquery-3.4.1.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bloggrid' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<div class="">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$bloggrid_description = get_bloginfo( 'description', 'display' );
						if ( $bloggrid_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $bloggrid_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div>
				</div>

				<div class="flex-grow-1">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
							</svg>
						</button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav>
				</div>
			</div>
		</div>
	</header> -->
	<div class="enquir-tab">
	<div class="call-icon">
		<img src="http://innocenttimes.com/blog/wp-content/themes/bloggrid/images/home/call.png" alt="call-icon" class="img-fluid call-icon">
	</div>
	<div class="call-us">
		<p>+91 9767788797</p>
	</div>
	<div class="call-buttons ml-auto">
		<a href="http://innocenttimes.com/contact.html"><button type="button" class="btn btn-info">Admission Enquiry</button></a>
		<a href="http://innocenttimes.com/franchise-enquiry.html"><button type="button" class="btn btn-info">Franchise Enquiry</button></a>
	</div>
</div>
<div class="wrapper">
  <div class="container">
	<nav class="navbar fixed-top navbar-expand-lg navbar-light " style="color:rgb(0,0,0,0.4)">
		<a class="navbar-brand" href="http://innocenttimes.com/index.html"><img src="http://innocenttimes.com/blog/wp-content/themes/bloggrid/images/Innocent Times Logo Final.png" alt="innocent times logo" class="img-fluid"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	  
		 <div class="collapse navbar-collapse" id="navbarSupportedContent1">
		<ul class="nav ml-auto">
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" id="navbarDropdown" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OUR CENTRES</a>
			  
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				
				<h5 id="first"><a class="dropdown-item" href="http://innocenttimes.com/our-centre-safety.html">SELECTING THE RIGHT CENTRE</a></h5>
				
				<h5 id="inside"><a class="dropdown-item dropdown-toggle">INSIDE INNOCENT TIMES</a></h5>
				
				<p id="inside1"><a class="dropdown-subitem" href="http://innocenttimes.com/food-nutrition.html">FOOD AND NUTRITION</a></p>
				<p id="inside2"><a class="dropdown-subitem" href="http://innocenttimes.com/childcare-safety.html">CHILDCARE SAFETY</a></p>
				
				<h5 id="second"><a class="dropdown-item dropdown-toggle" href="">TESTIMONIALS</a></h5>
				<p id="two"><a class="dropdown-subitem" href="http://innocenttimes.com/parent-teacher-testinominal.html">PARENT AND TEACHER TESTIMONIALS</a></p>
				<p id="three"><a class="dropdown-subitem" href="http://innocenttimes.com/share-your-story.html">SHARE YOUR INNOCENT TIMES STORY</a></p>
			
			<p id="four"><a class="dropdown-item" href="http://innocenttimes.com/gallery.html">GALLERY</a></p>
<!--			<p id="five"><a class="dropdown-item" href="franchise-enquiry.html">FRANCHISE ENQUIRY</a></p>-->
        	</div>
			  
		  </li>
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" id="navbarDropdown2" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PROGRAMMES AND CURRICULUM</a>
			  <div class="dropdown-menu programmes-item" aria-labelledby="navbarDropdown">
				
				<h5><a class="dropdown-item" href="http://innocenttimes.com/nursery-school.html">NURSERY SCHOOL</a></h5>
				<h5><a class="dropdown-item" href="http://innocenttimes.com/infant-care.html">INFANT CARE</a></h5>
				<h5><a class="dropdown-item" href="http://innocenttimes.com/toddler-care.html">TODDLER CARE</a></h5>
				<h5><a class="dropdown-item" href="http://innocenttimes.com/early-intervention-centre.html">EARLY INTERVENTION CENTRE</a></h5>
				<h5><a class="dropdown-item" href="http://innocenttimes.com/inclusive-education-center.html">INCLUSIVE EDUCATION</a></h5>
				<h5><a class="dropdown-item" href="http://innocenttimes.com/before-and-after-school-programme.html">BEFORE AND AFTER SCHOOL PROGRAMME</a></h5>
				<h5><a class="dropdown-item" href="http://innocenttimes.com/school-break-solutions.html">SCHOOL BREAK SOLUTIONS</a></h5>
				 <h5><a class="dropdown-item" href="http://innocenttimes.com/teachers-training-programme.html">TEACHERS' TRAINING PROGRAMME</a></h5>
				<h5><a class="dropdown-item" href="http://innocenttimes.com/upcoming-events.html">UPCOMING EVENTS</a></h5>
        	</div>
		  </li>
		  <li class="nav-item dropdown programmes-item">
			<a class="nav-link dropdown-toggle" id="navbarDropdown1" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT</a>

			<div class="dropdown-menu" aria-labelledby="navbarDropdown">

				<h5 id="about1"><a class="dropdown-item dropdown-toggle" href="">WHO WE ARE</a></h5>

				<p id="about-one"><a class="dropdown-subitem" href="http://innocenttimes.com/who-we-are.html">OUR PHILOSOPHY</a></p>
				<p id="about-two"><a class="dropdown-subitem" href="http://innocenttimes.com/leadership-and-expertise.html">LEADERSHIP &amp; EXPERTISE</a></p>
				<p id="about-three"><a class="dropdown-subitem" href="http://innocenttimes.com/innocent-times-legacy-awards.html">INNOCENT TIMES LEGACY AWARDS</a></p>
				<p id="about-four"><a class="dropdown-subitem" href="http://innocenttimes.com/team.html">OUR TEAM</a></p>

				<h5 id="about3"><a class="dropdown-item dropdown-toggle" href="">OUR VALUES</a></h5>
				<p id="about-seven"><a class="dropdown-subitem" href="http://innocenttimes.com/community-service.html">COMMUNITY SERVICE</a></p>
				<p id="about-eight"><a class="dropdown-subitem" href="http://innocenttimes.com/childcare-advocacy.html">CHILDCARE ADVOCACY</a></p>
				
				<h5 id="about4"><a class="dropdown-item" href="http://innocenttimes.com/blog/">BLOG</a></h5>
			</div>
 
          </li>
			
			<li class="nav-item dropdown programmes-item">
			<a class="nav-link dropdown-toggle" id="navbarDropdown3" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CONNECT WITH US</a>

			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<h5><a class="dropdown-item" href="http://innocenttimes.com/careers.html">CAREERS</a></h5>
				
				<h5><a class="dropdown-item" href="http://innocenttimes.com/employer-partnerships.html">EMPLOYER PARTNERSHIPS</a></h5>
				
				<h5><a class="dropdown-item" href="http://innocenttimes.com/preschool-consultancy-services.html">PRESCHOOL CONSULTANCY</a></h5>
				
				<h5><a class="dropdown-item" href="http://innocenttimes.com/franchise-enquiry.html">FRANCHISE ENQUIRY</a></h5>
			</div>
 
          </li>
		  <li class="nav-item">
			<a class="nav-link" href="http://innocenttimes.com/contact.html">CONTACT US</a>
		  </li>
		</ul>
		
		
		<ul class="social ml-auto">
			<li class="social-icon">
			<a href="https://www.facebook.com/innocenttimes/" target="_blank"><img src="http://innocenttimes.com/blog/wp-content/themes/bloggrid/images/social/facebook.png" alt="facebook"></a>
		  	</li>
			
			<li class="social-icon">
			<a href="https://www.instagram.com/innocenttimes_pune/" target="_blank"><img src="http://innocenttimes.com/blog/wp-content/themes/bloggrid/images/social/instagram.png" alt="instagram"></a>
		  	</li>
		</ul>
      </div>
    </nav>
  </div>
