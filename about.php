<?php
	session_start();
	include 'connect.php';
	if(isset($_SESSION['username']))
		$username= $_SESSION['username'];
	else 
		$username = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>		
.dropbtn {
  background-color: 6f42c1;
  color: white;
  padding: 16px;
  font-size: 17px;
  font-weight: 800;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: 131a2f;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #131a2f;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #FFFFFF;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
<title>About us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/about_styles.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center justify-content-start">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<!--<div>Andaman & Nicobar Island</div>
								<div>Tourism Portal</div>-->
								<div class="logo_image"><img src="images/tourism-logo.png" alt=""></div>
							</div>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">Home</a></li>
								<li class="main_nav_item active"><a href="about.php">About Us</a></li>
								
								<div class="dropdown">
									<li onclick="placeFunction()" class="dropbtn" >Places</li>
									<div id="placeDropdown" class="dropdown-content">
										<a href="northandaman.php">NORTH ANDAMAN</a>
										<a href="middleandaman.php">MIDDLE ANDAMAN</a>
										<a href="southandaman.php">SOUTH ANDAMAN</a>
										<a href="littleandaman.php">LITTLE ANDAMAN</a>
									</div>
								</div>

								<div class="dropdown">
									<li onclick="planFunction()" class="dropbtn" >Plan your Trip</li>
									<div id="planDropdown" class="dropdown-content">
										<a href="howtoreach.php">HOW TO REACH</a>
										<a href="budgetplans.php">BUDGET PLANS</a>
										<a href="placestostay.php">PLACES TO STAY</a>
										<a href="transport.php">TRANSPORT</a>										
										<a href="ferries.php">FERRIES</a>
										<a href="seasons.php">SPECIAL SEASONS</a>
										<a href="foreignerformalities.php">FORIEGNER FORMALITIES</a>
										<a href="hospitals.php">MEDICAL FACILITIES</a>
										<a href="festivals.php">FESTIVALS</a>
									</div>
								</div>

								<div class="dropdown">
									<li onclick="categoryFunction()" class="dropbtn" >Categories</li>
									<div id="categoryDropdown" class="dropdown-content">
										<a href="beaches.php">BEACHES</a>
										<a href="nationalparks.php">NATIONAL PARKS</a>
										<a href="museums.php">MUSEUMS</a>
										<a href="religioussites.php">RELIGIOUS SITES</a>
										<a href="others.php">OTHERS</a>
										<a href="famousrestaurants.php">FAMOUS RESTAURANTS</a>
										<a href="shopping.php">SHOPPING PLACES</a>
										<a href="watersports.php">WATER SPORTS</a>
										<a href="shopping.php">SHOPPING PLACES</a>
									</div>
								</div>

								<script>
								function placeFunction() {
								document.getElementById("placeDropdown").classList.toggle("show");
								document.getElementById("categoryDropdown").classList.remove("show");
								document.getElementById("planDropdown").classList.remove("show");
								}
								window.onClick= function(event) {
								if (!event.target.matches('.dropbtn')) {
								  var dropdowns = document.getElementsByClassName("dropdown-content");
								  var i;
								  for (i = 0; i < dropdowns.length; i++) {
									var openDropdown = dropdowns[i];
									if (openDropdown.classList.contains('show')) {
									  openDropdown.classList.remove('show');
									}
								  }
								}
								}

								function planFunction() {
								document.getElementById("planDropdown").classList.toggle("show");
								document.getElementById("categoryDropdown").classList.remove("show");
								document.getElementById("placeDropdown").classList.remove("show");
								}
								window.onClick= function(event) {
								if (!event.target.matches('.dropbtn')) {
								  var dropdowns = document.getElementsByClassName("dropdown-content");
								  var i;
								  for (i = 0; i < dropdowns.length; i++) {
									var openDropdown = dropdowns[i];
									if (openDropdown.classList.contains('show')) {
									  openDropdown.classList.remove('show');
									}
								  }
								}
								}

								function categoryFunction() {
								document.getElementById("categoryDropdown").classList.toggle("show");
								document.getElementById("planDropdown").classList.remove("show");
								document.getElementById("placeDropdown").classList.remove("show");
								}
								window.onClick = function(event) {
								if (!event.target.matches('.dropbtn')) {
								  var dropdowns = document.getElementsByClassName("dropdown-content");
								  var i;
								  for (i = 0; i < dropdowns.length; i++) {
									var openDropdown = dropdowns[i];
									if (openDropdown.classList.contains('show')) {
									  openDropdown.classList.remove('show');
									}
								  }
								}
								}
								</script>

								<li class="main_nav_item"><a href="contact.php">Contact</a></li>
								<?php
									if($username!=null){
										echo "<li class='main_nav_item'><a href='logout.php'>Logout</a></li>";
									}else{
										echo "<li class='main_nav_item'><a href='login.php'>Login</a></li>";
									}
								?>
							</ul>
						</nav>

					</div>
				</div>
			</div>
		</div>
	</header>

	
	<!-- Home -->

	<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">About us</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.php">Home</a></li>
									<li class="home_breadcrumb">About us</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	
	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>We are an award winning Agency</h2>
						<div>take a look at our story</div>
					</div>
				</div>
			</div>
			<div class="row about_row">
				<div class="col-lg-6 about_col order-lg-1 order-2">
					<div class="about_content">
						<p>We Amritians studying in Sixth Semester created this portal. It has been a great success. This is a well planned and designed website which is Visually pleasing and User Friendly. </p>
					</div>
				</div>
				<div class="col-lg-6 about_col order-lg-2 order-1">
					<div class="about_image">
						<img src="images/about.jpg" alt="https://unsplash.com/@sanfrancisco">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones">
		<div class="milestones_background parallax-window" data-parallax="scroll" data-image-src="images/fact_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Fun facts about our Agency</h2>
						<div>take a look</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="milestones_text">
						<p>We have started this Andaman and Nicobar Island Tourism Portal project has been started on January, 2019. We have successfully completed the Sprint-1 of the project under the guidance of Dr. Sabarish.</p>
					</div>
				</div>
					
			</div>
			<div class="row milestones_container">

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_1.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="2684">0</div>
						<div class="milestone_text">Tour Packages Claimed</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_2.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="435">0</div>
						<div class="milestone_text">Islands Visited</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_3.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="11923">0</div>
						<div class="milestone_text">People Visited</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_4.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="859">0</div>
						<div class="milestone_text">Cruises Organized</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<!-- Newsletter -->
	<div class="newsletter">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="newsletter_background" style="background-image:url(images/newsletter.jpg);"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="newsletter_content">
						<div class="newsletter_title text-center">Subscribe to our Newsletter</div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" method = 'POST' class="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
									<input type="text" id="newsletter_input" class="newsletter_input" name="email" placeholder="Your E-mail Address"></input>
									<button method = "POST" type="submit" id="newsletter_button" name="subscribe" class="newsletter_button">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		if (isset($_POST['subscribe'])) {
		    $email = $_POST['email'];
		    $admin_query = "insert into subscribers values('$email');";
		    $run = mysqli_query($connect,$admin_query);
		    if($run == 1)
		    	echo "<script>alert('Subscribed Successfully!')</script>";
		}
	?>

			<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-8 footer_col">
					<div class="footer_about">
						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<div>Andaman & Nicobar Island</div>
								<div>Tourism Portal</div>
							</div>
						</div>
						<div class="footer_about_text">Team Members:</div>
						<div class="footer_about_text">Sathish Raja Bommannan</div>
						<div class="footer_about_text">Akhil Srirambhatla</div>
						<div class="footer_about_text">Aswin K S</div>
						<div class="footer_about_text">Chennuru Vineeth</div>
						<div class="footer_about_text">S S Aravind Kumar</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Project is done by team TechyDNA.</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>

			
				
				<div class="col-lg-4 footer_col">
					<img src="images/tourism-logo.png">
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about_custom.js"></script>
</body>
</html>