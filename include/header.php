<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo @$description; ?>">
    <meta name="keywords" content="<?php echo @$keywords;?>">


	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/sweetalert.css">
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 

    <link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<style>
		a.navbar-brand {
		    margin-top: 0 !important;
		}
	</style>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '281975335985406'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=281975335985406&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119400111-1"></script>
	<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());

  	gtag('config', 'UA-119400111-1');
	</script>

</head>
<body>
	<!-- Fixed navbar -->
	<div class="contact-header container">
		<div class="col-md-12">
			<div class="info-header">
				<i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@nixacetech.com">  enquiry@nixacetech.com</a> &nbsp;&nbsp;
				<i class="fa fa-phone" aria-hidden="true"></i><a href="tel:70214 43794"> 70214 43794 </a> 
			</div>			
		</div>		
	</div>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="/">
					<img src="assets/images/logo1.png" alt=""></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav mainNav">
					<li id="li_index" class="li_page"><a href="/">Home</a></li>
					
					<!-- <li id="li_about-manish-ramuka" class="li_page"><a href="about-manish-ramuka">About MR</a></li> -->
					<!-- <li id="li_why-manish-ramuka" class="li_page"><a href="why-manish-ramuka">Why MR?</a></li> -->
					<!-- <li id="li_our-content" class="dropdown li_page">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Content <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="notes.php">Notes</a></li>
							<li><a href="video-lectures.php">Video Lectures</a></li>
							
						</ul>
					</li> -->
					<li id="li_courses" class="li_page"><a href="courses">Courses</a></li>
					<!-- <li id="li_testimonials" class="li_page"><a href="testimonials">Testimonials</a></li> -->
					<li id="li_about" class="li_page"><a href="about">About Us</a></li>
					<li id="li_contact" class="li_page"><a href="contact">Contact Us</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
