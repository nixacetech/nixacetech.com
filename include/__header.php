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
		
	</style>
</head>
<body>
	<!-- Fixed navbar -->
	<div class="contact-header container">
		<div class="col-md-12">
			<div class="info">
				<i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:vishal2332@gmail.com">  vishal2332@gmail.com</a> &nbsp;&nbsp;
				<i class="fa fa-phone" aria-hidden="true"></i><a href="tel:96199 33253">  96199 33253</a> 
			</div>			
		</div>		
	</div>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
					<img src="assets/images/logo.png" alt=""></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav mainNav">
					<li id="li_index" class="li_page"><a href="index.php">Home</a></li>
					<li id="li_about" class="dropdown li_page">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="about-sfm.php">About SFM</a></li>
							<li><a href="about-manish-ramuka.php">About Nixace Technologies</a></li>
							
						</ul>
					</li>
					<li id="li_why-manish-ramuka" class="li_page"><a href="why-manish-ramuka.php">Why Nixace Technologies</a></li>
					<li id="li_our-content" class="dropdown li_page">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Content <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="notes.php">Notes</a></li>
							<li><a href="video-lectures.php">Video Lectures</a></li>
							
						</ul>
					</li>
					
					<li id="li_testimonials" class="li_page"><a href="testimonials.php">Testimonials</a></li>
					<li id="li_contact" class="li_page"><a href="contact.php">Contact Us</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
