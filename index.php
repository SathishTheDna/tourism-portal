<?php	
	session_start();
	include 'connect.php';
	if(isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
	}
	else {
		$username = null;
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>	
blink {
    animation: blinker 1s linear infinite;
    color: red;
}
@keyframes blinker {  
	50% { opacity: 0; }
}	
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
  background-color: e83e8c;
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
<title>Destino</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
								<li class="main_nav_item active"><a href="#">Home</a></li>
								<li class="main_nav_item"><a href="about.php">About Us</a></li>
								
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


						<!-- Search 
						<div class="search">
							<form action="#" class="search_form">
								<input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">
								<button type="submit" class="search_button ml-auto ctrl_class"><img src="images/search.png" alt=""></button>
							</form>
						</div>
						-->
						<!-- Hamburger 
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						-->
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<div class="menu_search_form_container">
					<form action="#" id="menu_search_form">
						<input type="search" class="menu_search_input menu_mm">
						<button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="images/search_2.png" alt=""></button>
					</form>
				</div>
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="about.php">About us</a></li>
					<li class="menu_item menu_mm"><a href="offers.php">Offers</a></li>
					<li class="menu_item menu_mm"><a href="news.php">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.php">Contact</a></li>
				</ul>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background" style="background-image:url(images/home.jpg)"></div>
		<div class="home_content">
			<div class="home_content_inner">
				<div class="home_text_large">discover</div>
				<div class="home_text_small">Andaman & Nicobar Islands</div>
			</div>
		</div>
	</div>


		<div class="top">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center" >
						<div align="center">
						<h3><blink><img src="images/watersports/trend.png" alt="Smiley face" width="42" height="42">&nbsp<b>Now Trending</b></blink></h3> 
						
						<br>	<a href="https://www.andamantourism.gov.in/docs/ITF-2019%20PDF%20(form%20&%20Terms%20and%20Conditions).pdf"><font color="black"><h4><b>ITF-2019 Form & Terms and Conditions</b></h4></font></a><br>
						<a href="https://www.andamantourism.gov.in/docs/Press%20Release%20-%20ITF%202019.pdf"><font color="black"><h4><b>Press Release -ITF 2019</b></h4></font></a><br>
						<a href="https://www.andamantourism.gov.in/bnb/public/home"><font color="black"><h4><b>Bread and Breakfast (BNB) Portal</b></h4></font></a><br>
						<a href="https://www.andamantourism.gov.in/etourist/"><font color="black"><h4><b>Online Tourist Spot & Resort Booking</b></h4></font></a><br>
						<a href="https://www.andamantourism.gov.in/docs/dt-ds-available-on-whatsapp.pdf"><font color="black"><h4><b>Now DT & DS are available on Whatsapp</b></h4></font></a><br>
						<a href="https://www.andamantourism.gov.in/docs/trade-regulation.pdf"><font color="black"><h4><b>Tourism Trade Regulation</b></h4></font></a><br>
								<a href="https://www.andamantourism.gov.in/docs/tourist-advisory.pdf"><font color="black"><h4><b>Advisory for Tourist 1</b></h4></font></a><br>		
						<a href="https://www.andamantourism.gov.in/docs/Advisory%20Colour.pdf"><font color="black"><h4><b>Advisory for Tourist 2</b></h4></font></a><br>
						<a href="https://www.andamantourism.gov.in/docs/RAP-form.pdf"><font color="black"><h4><b>Download Restricted Area Permit(RAP) Form</b></h4></font></a>
					</div>	
				</div>
			</div>
		</div>




<div class="top">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title text-center">
					<h2>Check Current Weather for Tourist Spots</h2>
				
										<br>
										
										
								
						
										
					<button id="btn-location" type="button" class="btn1 btn1-primary btn1-lg" color="white"></button>
												
					<input type="text" class="form-control" id="city-input" placeholder="Enter touris spots..."><br><br>
												<button id="btn-choice" type="button" class="btn btn-primary btn-lg" >Check</button>
				
		
					<div class="container-fluid section-two" style="color:black" >
						<table class="table table-bordered" id="wheater-info">
								<tr>
										<td>City</td>
										<td id="city-info"></td>
								</tr>
								<tr>
										<td>Weather</td>
										<td id="wheat-info"></td>
								</tr>
								<tr>
										<td>Temperature</td>
										<td id="temp-info"></td>
								</tr>
								<tr>
									<td>Pressure</td>
									<td id="pressure-info"></td>
							</tr>
							<tr>
									<td>Wind Speed</td>
									<td id="windSpeed-info"></td>
					</tr>
								
						</table>
					</div>
</div>
			</div>
		</div>

	<!-- Top Destinations -->

	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Top destinations in Andaman & Nicobar Islands</h2>
					</div>
				</div>
			</div>
			<div class="row top_content">

				<div class="col-lg-6 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="https://www.google.com/maps/place/11.976296,92.987562"target="_blank">
							<div class="top_item_image"><img src="images/top_1.jpg" alt="https://unsplash.com/@sgabriel" style="width:600px;height:400px;"></div>
							<div class="top_item_content">
								<div class="top_item_text_black">Havelock Island</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="https://www.google.com/maps/place/11.984663,92.953084"target="_blank">
							<div class="top_item_image"><img src="images/top_2.jpg" alt="https://unsplash.com/@jenspeter" style="width:600px;height:400px;"></div>
							<div class="top_item_content">
								<div class="top_item_text_white">Radhanagar Beach</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="row top_content">
				<div class="col-lg-6 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="https://www.google.com/maps/place/12.148499,92.764892"target="_blank">
							<div class="top_item_image"><img src="images/top_3.jpg" alt="https://unsplash.com/@anikindimitry" style="width:600px;height:400px;"></div>
							<div class="top_item_content">
								<!--<div class="top_item_price">From $890</div>-->
								<div class="top_item_text_white">Baratang Island</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="https://www.google.com/maps/place/11.661891,92.697252"target="_blank">
							<div class="top_item_image"><img src="images/top_4.jpg" alt="https://unsplash.com/@hellolightbulb" style="width:600px;height:400px;"></div>
							<div class="top_item_content">
								<div class="top_item_text_white">Viper Island</div>
							</div>
						</a>	
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<!-- Video 

	<div class="video_section d-flex flex-column align-items-center justify-content-center">
		<div class="video_background parallax-window" data-parallax="scroll" data-image-src="images/video.jpg" data-speed="0.8"></div>
		<div class="video_content">
			<p>Special places in the island :-)</p> </br>
			<p>Click here to play the video!</p> </br>
			<div class="video_title">Special places in the island</div>
			<div class="video_play">
				<a class="video" href="https://www.youtube.com/watch?v=C6sKDo1qZ2Y">   https://www.youtube.com/watch?v=C6sKDo1qZ2Y  videos/famous-places.mp4
					<svg version="1.1" id="Layer_1" class="play_button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="140px" height="140px" viewBox="0 0 140 140" enable-background="new 0 0 140 140" xml:space="preserve">
						<g id="Layer_2">
							<circle class="play_circle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" cx="70.333" cy="69.58" r="68.542"/>
							<polygon class="play_triangle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" points="61.583,56 61.583,84.417 84.75,70 	"/>
						</g>
					</svg>
				</a>
			</div>
		</div>
	</div>-->


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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/location.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyD06pquWXnhgoZAWCnBvaVJdrr7RJlKXAo"></script>
</body>
</html>