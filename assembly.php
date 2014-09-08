<?php
function heads($title){
echo '
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Local Congress | '. $title .'</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="./images/favicon.png"/>
	<link rel="stylesheet" href="./normalize.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="./navbar.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="./bootstrap_files/css/bootstrap.min.css" media="all" type="text/css" />
	<link rel="stylesheet" href="./style.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="./style.responsive.css" media="screen" type="text/css" />
	<script type="text/javascript" src="./jquery.js"></script>
	<script type="text/javascript" src="./bootstrap_files/js/bootstrap.js"></script>
	<script type="text/javascript" src="./dev.js"></script>
</head>
<body>
	<div class="which"></div>
	<a class="sr-only sr-only-focusable" tabindex="1" href="#content">Skip to main content</a>
	<div class="container">
		<header class="row">
			<div id="logo" class="col-md-2 col-xs-12">
				<img src="./images/logo.png" class="img-responsive" />
			</div>

			<!-- normal nav for large devices -->
			<nav id="cssmenu" class="col-md-10 col-xs-12">
				<ul>
					<li class="active"><a href="index.html">Home</a></li>
					<li class="has-sub"><a href="#">Products</a>
					<ul>
						<li class="has-sub"><a href="#">Audience Response Voting</a>
							<ul>
								<li><a href="#">Basic Audience Response System</a></li>
								<li><a href="#">Audience Response Voting Solutions</a></li>
								<li><a href="#">Audience Response Case Studies: Swiss re-insurance</a></li>
								<li><a href="#">Audience Response / Silent Audction Reference Gallery</a></li>
								<li><a href="#">Smartphone Audience Response</a></li>
							</ul>
						</li>
						<li class="has-sub"><a href="#">Conference microphones</a>
							<ul>
								<li><a href="#">Wireless Conference Microphones</a></li>
								<li><a href="#">DCN NG Wired Conference Microphones</a></li>
								<li><a href="#">Software Control</a></li>
								<li><a href="#">Dome Camera Video-Microphone Integration</a></li>
								<li><a href="#">Conference Microphone Reference Gallery</a></li>
							</ul>
						</li>
						<li class="has-sub"><a href="#">Product Sales &amp; Service</a>
							<ul>
								<li><a href="#">CCS900 Conference Microphones</a></li>
								<li><a href="#">DCN NG Interpretation and Microphone System</a></li>
								<li><a href="#">Intergrus - Digital Infra Red</a></li>
								<li><a href="#">Product Service and Support</a></li>
							</ul>
						</li>
						<li class="has-sub"><a href="#">Silent Auction</a>
							<ul>
								<li><a href="#">Silent Auction Details</a></li>
								<li><a href="#">Silent Auction Pledging</a></li>
								<li><a href="#">Silent Auction Sponsorship</a></li>
								<li><a href="#">Silent Auction Case Studies Special Olympics</a></li>
								<li><a href="#">Silent Auction Case Studies: Pistorio Foundation</a></li>
							</ul>
						</li>
						<li><a href="#">Silent PA - Exhibition Audio</a></li>
						<li class="has-sub"><a href="#">Simultaneous Interpretation Equipment</a>
							<ul>
								<li><a href="#">Interpreters</a></li>
								<li><a href="#">Interpretation Equipment Reference Gallery</a></li>
							</ul>
						</li>
						<li><a href="#">Simultaneous Translation Equipment</a></li>
						<li><a href="#">Tour Guide / Whisper Systems</a></li>
					</ul>
					</li>
					<li class="has-sub"><a href="#">Our Work</a>
						<ul>
							<li><a href="#">Reference Gallery</a></li>
							<li><a href="#">Testimonials</a></li>
						</ul>
					</li>
					<li class="has-sub"><a href="#">About</a>
						<ul>
							<li><a href="#">Company Bio</a></li>
							<li><a href="#">Our Team</a></li>
							<li><a href="#">Partners</a></li>
						</ul>
					</li>
						<li><a href="#">Terms &amp; Conditions</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<li class="nav-menu-collapsed-button"><a><span class="glyphicon glyphicon-list"></span></a></li><!-- the little button when your screen is small -->
			</nav>

			<!-- bootstrap nav for small devices -->
			<nav class="navbar navbar-default nav-small-device" role="navigation">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">Brand</a>
			    </div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#" rel="#">Home</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" rel="#">Products<span class="caret"></span></a>
							<ul role="menu" class="dropdown-menu">
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" rel="#">Audience Response Voting</a>
									<!-- <li><a href="#" rel="#">Basic Audience Response System</a></li> -->
									<!-- <li><a href="#" rel="#">Audience Response Voting Solutions</a></li> -->
									<!-- <li><a href="#" rel="#">Audience Response Case Studies: Swiss re-insurance</a></li> -->
									<!-- <li><a href="#" rel="#">Audience Response / Silent Audction Reference Gallery</a></li> -->
									<!-- <li><a href="#" rel="#">Smartphone Audience Response</a></li> -->
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" rel="#">Conference microphones</a>
									<!-- <li><a href="#" rel="#">Wireless Conference Microphones</a></li> -->
									<!-- <li><a href="#" rel="#">DCN NG Wired Conference Microphones</a></li> -->
									<!-- <li><a href="#" rel="#">Software Control</a></li> -->
									<!-- <li><a href="#" rel="#">Dome Camera Video-Microphone Integration</a></li> -->
									<!-- <li><a href="#" rel="#">Conference Microphone Reference Gallery</a></li> -->
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" rel="#">Product Sales &amp; Service</a>
									<!-- <li><a href="#" rel="#">CCS900 Conference Microphones</a></li> -->
									<!-- <li><a href="#" rel="#">DCN NG Interpretation and Microphone System</a></li> -->
									<!-- <li><a href="#" rel="#">Intergrus - Digital Infra Red</a></li> -->
									<!-- <li><a href="#" rel="#">Product Service and Support</a></li> -->
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" rel="#">Silent Auction</a>
									<!-- <li><a href="#" rel="#">Silent Auction Details</a></li> -->
									<!-- <li><a href="#" rel="#">Silent Auction Pledging</a></li> -->
									<!-- <li><a href="#" rel="#">Silent Auction Sponsorship</a></li> -->
									<!-- <li><a href="#" rel="#">Silent Auction Case Studies Special Olympics</a></li> -->
									<!-- <li><a href="#" rel="#">Silent Auction Case Studies: Pistorio Foundation</a></li> -->
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" rel="#">Silent PA - Exhibition Audio</a>
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" rel="#">Simultaneous Interpretation Equipment</a>
									<!-- <li><a href="#" rel="#">Interpreters</a></li> -->
									<!-- <li><a href="#" rel="#">Interpretation Equipment Reference Gallery</a></li> -->
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" rel="#">Simultaneous Translation Equipment</a>
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" rel="#">Tour Guide / Whisper Systems</a>
							</ul>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" rel="#">Our Work<span class="caret"></span></a>
							<ul role="menu" class="dropdown-menu">
								<li><a href="#" rel="#">Reference Gallery</a></li>
								<li><a href="#" rel="#">Testimonials</a></li>
							</ul>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" rel="#">About<span class="caret"></span></a>
							<ul role="menu" class="dropdown-menu">
								<li><a href="#" rel="#">Company Bio</a></li>
								<li><a href="#" rel="#">Our Team</a></li>
								<li><a href="#" rel="#">Partners</a></li>
							</ul>
						<li><a href="#" rel="#">Terms &amp; Conditions</a></li>
						<li><a href="#" rel="#">Contact</a></li>
					</ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

		</header>
	</div>


';
}




?>