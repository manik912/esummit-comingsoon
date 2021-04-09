<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>E-Summit 2021</title>


	<link rel="icon" href="./img/favicon.ico">

	<link rel="stylesheet" href="style.css">
	<style>
		@media only screen and (min-width: 768px) {

			#desktop {
				display: block;
			}

			#mobile {
				display: none;
			}
		}

		@media only screen and (max-width: 768px) {

			#desktop {
				display: none;
			}

			#mobile {
				display: block;
			}

			.input-group input {
				position: absolute;
				border: 0;
				box-shadow: none;
				background-color: rgba(255, 255, 255, 0);
				top: 0;
				height: 60px;
				width: 100%;
				padding: 0 0 0 53px;
				border-bottom-left-radius: 41px;
				border-bottom-right-radius: 41px;
				border-top-left-radius: 41px;
				border-top-right-radius: 0;
				margin-top: -22px;
				box-sizing: border-box;
				z-index: 3;
				display: block;
				color: #1a6fc4;
				font-size: 15px;
				font-family: "Poppins", sans-serif;
				transition: top 0.1s ease-in-out;
			}

			.input-group label {
				position: absolute;
				border: 0;
				top: 5px;
				left: 0;
				right: 0;
				bottom: 0;
				z-index: 2;
				display: flex;
				align-items: center;
				padding: 0 53px;
				box-sizing: border-box;
				transition: all 0.1s ease-in-out;
				cursor: text;
			}
		}
	</style>

	<style type="text/css">
		body {
			background-color: #434c50;
			min-height: 100vh;
			font: normal 16px sans-serif;
			padding: 0 0;
		}

		.container.gallery-container {
			background-color: #fff;
			color: #35373a;
			min-height: 100vh;
			padding: 30px 50px;
		}

		.gallery-container h1 {
			text-align: center;
			margin-top: 50px;
			font-family: 'Droid Sans', sans-serif;
			font-weight: bold;
		}

		.gallery-container p.page-description {
			text-align: center;
			margin: 25px auto;
			font-size: 18px;
			color: #999;
		}

		.tz-gallery {
			padding: 40px;
		}

		/* Override bootstrap column paddings */
		.tz-gallery .row>div {
			padding: 2px;
		}

		.tz-gallery .lightbox img {
			width: 100%;
			border-radius: 0;
			position: relative;
		}

		/* .tz-gallery .lightbox:before {
			position: absolute;
			top: 50%;
			left: 50%;
			margin-top: -13px;
			margin-left: -13px;
			opacity: 0;
			color: #fff;
			font-size: 26px;
			font-family: 'Glyphicons Halflings';
			content: '\e003';
			pointer-events: none;
			z-index: 9000;
			transition: 0.4s;
		}


		.tz-gallery .lightbox:after {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			opacity: 0;
			background-color: rgba(46, 132, 206, 0.7);
			content: '';
			transition: 0.4s;
		}

		.tz-gallery .lightbox:hover:after,
		.tz-gallery .lightbox:hover:before {
			opacity: 1;
		} */

		.baguetteBox-button {
			background-color: transparent !important;
		}

		@media(max-width: 768px) {
			body {
				padding: 0;
			}
		}
s
	body {
	    background-color: #434c50;
	    min-height: 100vh;
	    font: normal 16px sans-serif;
	    padding: 0 0;
	}

	.container.gallery-container {
	    background-color: #fff;
	    color: #35373a;
	    min-height: 100vh;
	    padding: 30px 50px;
	}

	.gallery-container h1 {
	    text-align: center;
	    margin-top: 50px;
	    font-family: 'Droid Sans', sans-serif;
	    font-weight: bold;
	}

	.gallery-container p.page-description {
	    text-align: center;
	    margin: 25px auto;
	    font-size: 18px;
	    color: #999;
	}

	.tz-gallery {
	    padding: 40px;
	}

	/* Override bootstrap column paddings */
	.tz-gallery .row > div {
	    padding: 2px;
	}

	.tz-gallery .lightbox img {
	    width: 100%;
	    border-radius: 0;
	    position: relative;
	}

	.tz-gallery .lightbox:before {
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    margin-top: -13px;
	    margin-left: -13px;
	    opacity: 0;
	    color: #fff;
	    font-size: 26px;
	    font-family: 'Glyphicons Halflings';
	    content: '\e003';
	    pointer-events: none;
	    z-index: 9000;
	    transition: 0.4s;
	}


	.tz-gallery .lightbox:after {
	    position: absolute;
	    top: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	    opacity: 0;
	    background-color: rgba(46, 132, 206, 0.7);
	    content: '';
	    transition: 0.4s;
	}

	.tz-gallery .lightbox:hover:after,
	.tz-gallery .lightbox:hover:before {
	    opacity: 1;
	}
	.baguetteBox-button {
	    background-color: transparent !important;
	}

	@media(max-width: 768px) {
	    body {
	        padding: 0;
	    }
	}
	</style>

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
<script type="text/javascript">
	window.onscroll = function(ev) {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        var home = document.getElementById("nav_home")
        console.log(nav_home)
        var contact = document.getElementById("nav_contact")
        console.log(nav_contact)
        home.classList.remove("active")
        contact.classList.add("active")
        console.log("at end")
    }
    else{
        var home = document.getElementById("nav_home")
        console.log(nav_home)
        var contact = document.getElementById("nav_contact")
        console.log(nav_contact)
        home.classList.add("active")
        contact.classList.remove("active")
        console.log(" not at end")
    }
};
</script>
</head>

<body>

	<div id="preloader">
		<div class="loader"></div>
	</div>


	<header class="header-area">
		<div class="classy-nav-container breakpoint-off">
			<div class="container">

				<nav class="classy-navbar justify-content-between" id="conferNav">

					<a class="nav-brand" href="./comingsoon.html"><img src="./img/core-img/EDC WHITE-1.PNG" alt=""
							width="120" height="70"></a>

					<div class="classy-navbar-toggler">
						<span class="navbarToggler"><span></span><span></span><span></span></span>
					</div>

					<div class="classy-menu">

						<div class="classycloseIcon">
							<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
						</div>

						<div class="classynav">
							<ul id="nav">
								<li id="nav_home" class="active"><a href="#">Home</a></li>
								<!--  <li><a href="#">Pages</a>
  <ul class="dropdown"> 
  <li><a href="index.html">- Home</a></li>
  <li><a href="about.html">- About Us</a></li>
  <li><a href="speakers.html">- speakers</a></li>
  <li><a href="schedule.html">- Schedule</a></li>
  <li><a href="tickets.html">- Tickets</a></li>
  <li><a href="blog.html">- Blog</a></li>
  <li><a href="single-blog.html">- Single Blog</a></li>
  <li><a href="contact.html">- Contact</a></li>
  <li><a href="#">- Dropdown</a>
  <ul class="dropdown">
  <li><a href="#">- Dropdown Item</a></li>
  <li><a href="#">- Dropdown Item</a></li>
  <li><a href="#">- Dropdown Item</a></li>
  <li><a href="#">- Dropdown Item</a></li>
  </ul>
  </li>
  </ul>-->

								<li><a href="#gallery">Gallery</a></li>

								<!-- <li><a href="blog.html">Blog</a></li> -->
								<li id="nav_contact" ><a href="#contact">Contact</a></li>
							</ul>

							<a href="https://www.edctiet.com/" target="_blank"
								class=" confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Know More About Us<i
									class="zmdi zmdi-long-arrow-right"></i></a>
						</div>

					</div>
				</nav>
			</div>
		</div>
	</header>


	<section class="welcome-area" id="desktop">
		<div class="welcome-slides owl-carousel">

			<div class="single-welcome-slide bg-img bg-overlay jarallax" style="position: relative;">
				<video autoplay muted loop id="myVideo" style="width: 100%; position: relative; z-index: 0;">
					<source src="vid/Sample-1.m4v" type="video/mp4">
				</video>
				<div class="container h-100" style="position: absolute; top: 10%; right: 10%; z-index: 99;">
					<div class="row h-100 align-items-center">
						<div class="col-12">
							<div class="welcome-text text-right">
								<h2 data-animation="fadeInUp" data-delay="300ms">E-SUMMIT <br>2021</h2>
								

								<!-- <div class="input-group" style="position: absolute; right: 0px;">
									<input type="text" name="email" value="" required="required" placeholder="Email" />
									<label for="text-1542372332072" style="margin-bottom: 0;">Email</label>
									
								</div>
								<br><br><br><br>
								<div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
									<a href="#" class=" confer-btn">Subscribe Now <i
											class="zmdi zmdi-long-arrow-right"></i></a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="icon-scroll" id="scrollDown"></div>
	</section>


	
	<section class="welcome-area" id="mobile">
		<div class="welcome-slides owl-carousel owl-loaded owl-drag">
			<div class="single-welcome-slide bg-img bg-overlay jarallax"
				style="background-image: url(img/bg-img/45.jpg);position: relative;">
				<div class="container h-100">
					<div class="row h-100 align-items-center">

						<div class="col-12">
							<div class="welcome-text text-right" style="margin-top: 40%; margin-bottom: 10%;">
								<h2 data-animation="fadeInUp" data-delay="300ms">E-SUMMIT <br>2021</h2>
								<!-- <h6 data-animation="fadeInUp" data-delay="500ms">Click on the button below to receive
									regular<br>information and not miss any opportunity</h6> -->

								<!-- <div class="input-group"
									style="position: absolute; right: 0px; max-width: 85%; height: 50px;">
									<input type="text" name="email" value="" required="required" placeholder="Email" />
									<label for="text-1542372332072" style="margin-bottom: 0;">Email</label>
									
								</div>
								<br><br><br><br>
								<div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
									<a href="#" class="btn confer-btn">Subscribe Now <i
											class="zmdi zmdi-long-arrow-right"></i></a>
								</div> -->
								<br><br><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="icon-scroll" id="scrollDown"></div>
	</section>


	<section class="about-us-countdown-area section-padding-100-0" id="about">
		<form method="post" action="#">
		<div class="countdown-up-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-md-3">

						<div class="countdown-content-text mb-100 wow fadeInUp" data-wow-delay="300ms">
							<h6>Summit Date</h6>
							<h4>Count Every Second Until the Event</h4>
						</div>
					</div>
					<div class="col-12 col-md-9">
						<div class="countdown-timer mb-100 wow fadeInUp" data-wow-delay="300ms">
							<div id="clockdiv2">
								<div><span id="day"></span><span>Days</span></div>
								<div><span id="hour"></span><span>Hours</span></div>
								<div><span id="minute"></span><span>Minutes</span></div>
								<div><span id="second"></span><span>Seconds</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row align-items-center">
				
				<div class="col-12 col-md-6">
					<div class="about-content-text mb-80">
						<h6 class="wow fadeInUp" data-wow-delay="300ms">About</h6>
						<h3 class="wow fadeInUp" data-wow-delay="300ms">E-SUMMIT 2021</h3>
						<p class="wow fadeInUp" data-wow-delay="300ms">Big things and opportunities come once in a
							while.<br><br>

							All the future Zuckerberg's gear up for the biggest entrepreneurial event of the year.
							Click on the button below to receive regular information and not miss any opportunity</p>
						<br>
						<div class="input-group" style="">
							<input type="text" name="email" value="" required="required" placeholder="Email" />
							<label for="text-1542372332072" style="margin-bottom: 0;">Email</label>
							<!-- <div class="req-mark">!</div> -->
						</div>

						<button name="submit" value="submit" href="#" class=" confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Subscribe Now <i
								class="zmdi zmdi-long-arrow-right"></i></button>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
						<img src="./img/gallery/(12).png" alt="">
					</div>
				</div>
			</div>
		</div>
	</form>
	<?php
    $message = "";
    if(isset($_POST['submit'])){ 
      $email = $_POST['email'];
      $message = "Success! You have been registered ";
      $server = 'localhost';
      $username = 'root';
      $password = '';
      $database = 'esummit';
      $dbcon = mysqli_connect($server, $username, $password, $database);

      if ($dbcon->connect_error) {
          die("Connection failed: " . $dbcon->connect_error);
        }

      $query = "INSERT INTO esummit values ('$email')";
      mysqli_query($dbcon,$query);
      echo $message; 
    }        
  ?>
	</section>



	<section id="gallery">
		<div class="container-fluid gallery-container our-speaker-area bg-img bg-gradient-overlay section-padding-100-60"
			style="background-image: url(img/bg-img/3.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
							<p>Gallery</p>
							<h4>E-Summit 2020</h4>
						</div>
					</div>
				</div>
				<div class="tz-gallery">
					<div class="row">

						<div class="col-sm-12 col-md-4">
							<a class="lightbox" href="./img/gallery/ (1).jpg">
								<img src="./img/gallery/ (1).jpg" alt="Bridge" style="width: 100%;">
							</a>
						</div>
						<div class="col-sm-6 col-md-4">
							<a class="lightbox" href="./img/gallery/(2).jpg">
								<img src="./img/gallery/(2).jpg" alt="Park" style="height:  100%;">
							</a>
						</div>
						<div class="col-sm-6 col-md-4">
							<a class="lightbox" href="./img/gallery/(3).JPG">
								<img src="./img/gallery/(3).JPG" alt="Tunnel" style="height:  100%;">
							</a>
						</div>
						<div class="col-sm-12 col-md-8">
							<a class="lightbox" href="./img/gallery/(9).JPG">
								<img src="./img/gallery/(9).JPG" alt="Traffic" style="height:  100%;">
							</a>
						</div>
						<div class="col-sm-6 col-md-4">
							<a class="lightbox" href="./img/gallery/ (5).jpg">
								<img src="./img/gallery/ (5).jpg" alt="Coast" style="height:  100%;">
							</a>
						</div>
						<div class="col-12 text-center mt-50">
							<div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
								<a href="gallery.html" class="confer-btn" style="text-decoration: none; font-weight: bold;">View All <i
										class="zmdi zmdi-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

	<footer id="contact" class="footer-area bg-img bg-overlay-2 section-padding-100-0">

		<div class="main-footer-area">
			<div class="container">
				<div class="row">

					<div class="col-12 col-sm-6 col-lg-6">
						<div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">

							<!-- <a href="#" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a> -->
							<h5 class="widget-title">About Us</h5>
							<p> EDC, TIET has been established with an aim to foster and nurture talented young minds
								with a vision. We believe that entrepreneurship is the key to unlock India's talent and
								untapped potential and thus we are striving to create, foster and promote
								entrepreneurship.
							</p>

							<div class="social-info">
								<a target="_blank" href="https://www.linkedin.com/school/entrepreneurship-development-cell-thapar-university/"><i class="zmdi zmdi-linkedin"></i></a>
								<a target="_blank" href="https://www.instagram.com/edc_tiet/"><i class="zmdi zmdi-instagram"></i></a>
								<a target="_blank" href="https://www.facebook.com/tuedcell/"><i class="zmdi zmdi-facebook"></i></a>
								<a target="_blank" href="https://mobile.twitter.com/edctiet"><i class="zmdi zmdi-twitter"></i></a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-4">
						<div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">

							<h5 class="widget-title">Contact</h5>

							<div class="footer-contact-info">
								<p><i class="zmdi zmdi-map"></i><a style="color: #9293bc;" href="https://g.page/ThaparInstitute?share" target="_blank"> Thapar Institute of Engineering<br> and Technology,
									Patiala</a> </p>
								<p><i class="zmdi zmdi-phone"></i> Animesh Bisen: <a style="color: #9293bc;" href="tel:9140470096">+91 91404-70096</a></p>
								<p><i class="zmdi zmdi-phone"></i> Anmol Jindal: <a style="color: #9293bc;" href="tel:8264245458">+91 82642-45458</a></p>
								<p><i class="zmdi zmdi-email"></i><a href="mailto:tuedcell@gmail.com"
										style="color: #9293bc">tuedcell@gmail.com</a></p>
								<p><i class="zmdi zmdi-globe"></i><a href="https://www.edctiet.com"
										style="color: #9293bc;">www.edctiet.com/</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-2">
						<div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">

							<h5 class="widget-title">Events</h5>

							<ul class="footer-nav">
								<li><a href="#">UNWIND</a></li>
								<li><a href="#">ELEVATE</a></li>
								<li><a href="#">INTERNSHIP FAIR</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="copywrite-content">
				<div class="row">

					<div class="col-12 col-md-12">
						<div class="copywrite-text">
							<p>
								Copyright &copy;
								<script data-cfasync="false"
									src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
								<script>document.write(new Date().getFullYear());</script> All rights reserved | This
								website is made
								with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
									href="https://www.edctiet.com/" target="_blank">Technical Team, EDC-TIET</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script>
		function countdown() {
			var now = new Date();
			var over_time = new Date("April 23, 2021 12:00:01");

			var now_time = now.getTime();
			var over = over_time.getTime();
			var end_time = over - now_time;

			var days = Math.floor(end_time / (1000 * 60 * 60 * 24));
			var hours = Math.floor((end_time % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((end_time % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((end_time % (1000 * 60)) / 1000);
			if (hours < "10") { hours = "0" + hours; }
			if (minutes < "10") { minutes = "0" + minutes; }
			if (seconds < "10") { seconds = "0" + seconds; }

			console.log(days)

			document.getElementById("day").innerHTML = days;
			document.getElementById("hour").innerHTML = hours;
			document.getElementById("minute").innerHTML = minutes;
			document.getElementById("second").innerHTML = seconds;

			setTimeout(countdown, 1000);

		}
		countdown();
	</script>

<script>
	$('a[onclick]').each(function(){
	  $(this).data('onclick', this.onclick);
  
	  this.onclick = function(event) {
		if($(this).attr('disabled')) { // HERE
		  return false;
		};
  
		$(this).data('onclick').call(this, event || window.event);
	  };
	});
	</script>

	<script src="js/jquery.min.js"></script>

	<script src="js/popper.min.js"></script>

	<script src="js/bootstrap.min.js"></script>

	<script src="js/confer.bundle.js"></script>

	<script src="js/default-assets/active.js"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
</body>

</html>