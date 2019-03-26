<?php
	session_start();
	date_default_timezone_set("Asia/Calcutta");
	include 'connect.php';
	include 'comment.inc.php';
	if(isset($_SESSION['username']))
		$username= $_SESSION['username'];
	else 
		$username = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Beaches</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/about_styles.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<style>

		* {
	  box-sizing: border-box;
	}
	#myInput {
	background-image: url('images/sidebar_search.png');
	  background-position: 10px 12px;
	  background-repeat: no-repeat;
	  width: 100%;
	  font-size: 16px;
	  padding: 12px 20px 12px 40px;
	  border: 1px solid #ddd;
	  margin-bottom: 12px;
	}
	
	#myUL {
	  list-style-type: none;
	  padding: 0;
	  margin: 0;
	}
	
	#myUL li a {
	  
	  margin-top: -1px; /* Prevent double borders */
	  
	  padding: 12px;
	  text-decoration: none;
	  font-size: 18px;
	  color:white;
	  display: block
	}
	
	#myUL li a:hover:not(.header) {
	  
	}
	 </style>
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
					<li class="menu_item menu_mm"><a href="index.php">Home</a></li>
					<li class="menu_item menu_mm"><a href="about.php">About us</a></li>
					<li class="menu_item menu_mm"><a href="offers.php">Offers</a></li>
					<li class="menu_item menu_mm"><a href="news.php">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.php">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Little Andaman</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.php">Home</a></li>
									<li class="home_breadcrumb">Little Andaman</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Find Form -->

	<div class="find">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="find_background_container prlx_parent">
			<div class="find_background prlx" style="background-image:url(images/find.jpg)"></div>
		</div>
		<!-- <div class="find_background parallax-window" data-parallax="scroll" data-image-src="images/find.jpg" data-speed="0.8"></div> -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="find_title text-center">
							
					<div class="mid2">
        
									
					<input class="input-field" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names...." title="Type in a name">	
										
									
									  <ul id="myUL">
									  	<li align="left"><a><b>Little Andaman & Hutbay | Andaman & Nicobar Island, India</b></br> </br>
										<img src="images/little-andaman.jpg"	height=500		width=100%></br></br>
							
											Little Andaman Island, located south of the South Andaman Island, is at a distance of 120 km. by sea from Port Blair. Hut Bay in Little Andaman is the entry and exit point and also the island headquarter. Little Andaman island offers a perfect mix of white sandy beaches bewitching Waterfalls, Boating through the Creeks, exciting Elephant Safari, Elephant lumbering, Elephant calves training, Surfing etc. All the places of tourist interest are approachable by the road, leading northwards from the Hutbay Jetty. Little Andaman has an evergreen rain forest which paves way for a very rich biodiversity.</br>
											Little Andaman offers the best exposure, even if the season is quite short due to the monsoon which hits the sector from May to August. From November to February some southwest spots, accessible by sea, remain passable. Surfing is fast gaining in popularity in the island as an activity option with small resorts renting out surfboards and arranging for surf camps near Butler Bay beach whose waves make it the best surfing destination in India. Little Andaman has been covered as a prime surfing destination in India in " The Stormrider Surf Guide, Indonesia and the Indian Ocean". There is a private agency which runs a Surfing School at Little Andaman. www.surfinglittleandaman.com.</br>
                                            <a title="Little Andaman & Hutbay | Andaman & Nicobar Island, India" href="https://www.google.com/maps/place/10.744882,92.499967">See the Location in Google Maps</a>
              </a></li>
              <br>
									  <li align="left"><a><b>1. Butler Bay Beach</b></br> </br>
										<img src="images/butler-bay-beach.jpg"	height=500		width=100%></br></br>
							
											Butler Bay beach is known to be one of the best surfing spots in India. Surfers from all over the world come to ride the spectacular waves at this fascinating stretch of yellow sand and crystal clear waters. The Surf break point is at the end of the beach on the left side. Due to the huge waves, swimming is advisable only for good swimmers as the currents are quite strong and you can be quickly flushed away from the shore, especially at high tide. Snorkelling is possible but best at low tide on either side of the beach. Unfortunately the beach is not great for sunbathing, as there are lots of sand flies.</br>
											 <a title="Butler Bay Beach" href="https://www.google.com/maps/place/10.670959,92.575788">See the Location in Google Maps</a>
											 <a href="https://www.google.com/maps/search/restaurants/@10.678197,92.581970,10z"target="_blank">Show restaurants Near me </a> 
										
              </a></li>
              <br>
									  <li  align="left"><a href="#">2. White Surf - Waterfall
											</br> </br>
												<img src="images/white-surf-waterfall.jpg"	height=500		width=70%></br></br>
												White Surf Waterfall is a beautiful natural sight hidden in the midst of an evergreen jungle. Located at 6.5km from Hut Bay, White Surf is easy to reach by the main road. Turn right before the island only petrol station and after about a kilometre you’ll reach the entrance point. Entree fee is Rs 20 plus parking ticket Rs 10 for two wheelers, Rs 20 for three and 30 for four wheelers.</br>
												The water is highest and the waterfall is voluminous after the rainy season. But it can be visited throughout the year. Some people do swim in the fresh water ponds, but bare in mind saltwater crocodiles have been spotted here. This waterfall is very easy to get to and perfect for those who want to relax yet see something different.</br>
												 <a title="White Surf - Waterfall" href="https://www.google.com/maps/place/10.619280,92.525293">See the Location in Google Maps</a>
												 <a href="https://www.google.com/maps/search/restaurants/@10.619322,92.525271,10z"target="_blank">Show restaurants Near me </a> 
										 
									
										</a></li>
									
                    <br>
									  
									  <li  align="left"><a href="#">3. Whisper Wave - Waterfall
									</br> </br>
									<img src="images/whisper-wave-waterfall.jpg"	height=500		width=100%></br></br>
										If you are eager to have a true jungle experience Whisper Wave Waterfalls are definitely worth a try. Tucked away in the evergreen jungle they can be reached trough a tough yet rewarding journey. The wild and bumpy jungle path only allows a ride of 40 minutes after which one must continue the journey on foot for another 4km.</br>

										Whisper Waves waterfall is in two levels, the first being broad and with calm green waters. Saltwater crocodiles have been spotted here so one must be careful. The second level is definitely safer. After climbing the slippery rocks up to the second waterfall, there is a fresh water pool. Swimming is possible and a jump after a sweaty trek is definitely rewarding. The path itself is not too hard; it is the heat and humidity that make the trek difficult. The best time for visiting Whisper Wave Waterfalls is in dry season. The waters are lower but there are not many snakes or other insects to spoil your trip into the jungle. In rainy season that changes and millions of insects, especially leeches crawl up. It is important to use repellent and take special care where walking. Long pants, long sleeved t-shirts and proper shoes are essential. It is smart to get a guide if possible and almost every resort can arrange one for you. For all adrenaline junkies this is definitely a must do activity.</br>
									  <a title="Whisper Wave - Waterfall" href="https://www.google.com/maps/place/10.744882,92.499967">See the Location in Google Maps</a>
										<a href="https://www.google.com/maps/search/restaurants/@10.748797,92.496286,10z"target="_blank">Show restaurants Near me </a> 
										
                    <br>
                    <li  align="left"><a href="#">4. Red Oil Palm Plantation
									</br> </br>
									<img src="images/red-oil-palm-plantation.jpg"	height=500		width=100%></br></br>
										Little Andaman is famous for its Red Oil Palm plantations that are spread over an area of almost 2000 hectares. Once a thick forest, it is now replaced by a planned plantation of millions of palm trees.</br>
										Several trails offer trekking among the palm trees and if lucky you can see some elephants in the shades. There is also a palm oil factory on the island that produced the oil mainly for industrial use. If interested you can visit the factory in working hours. No guides are available but a friendly manager will be happy to show you around and explain the whole production process.</br>
									   <a title="Red Oil Palm Plantation" href="https://www.google.com/maps/place/13.266645,92.982410">See the Location in Google Maps</a>
										 <a href="https://www.google.com/maps/search/restaurants/@10.748797,92.496286,10z"target="_blank">Show restaurants Near me </a> 
										 <br>
                    <li  align="left"><a href="#">5. Netaji Nagar Beach
									</br> </br>
									<img src="images/netaji-nagar-beach.jpg"	height=500		width=100%></br></br>
									 Netaji Nagar has one of the most beautiful beaches of Andaman Islands. It is located at a distance of 11 Km from the Hut Bay Jetty. White sandy beach and green treeline makes it an ideal location for Sun basking and Picnic.</br>
									   <a title="Netaji Nagar Beach" href="https://www.google.com/maps/place/10.744882,92.499967">See the Location in Google Maps</a>
										 <a href="https://www.google.com/maps/search/restaurants/@10.748797,92.496286,10z"target="_blank">Show restaurants Near me </a> 
										 <br>
                    <li  align="left"><a href="#">6. Ramakrishna Pur Dam, Port Blair
									</br> </br>
									<img src="images/ramakrishna-pur-dam.jpg"	height=500		width=100%></br></br>
									 The R.K. Pur earthen Dam is 18.42 Km from Hut Bay and 2.42 Km from R.K. Pur Bazar.</br>
									 <a title="Ramakrishna Pur Dam, Port Blair" href="https://www.google.com/maps/place/10.744882,92.499967">See the Location in Google Maps</a>
									 <a href="https://www.google.com/maps/search/restaurants/@11.666727,92.749543,10z"target="_blank">Show restaurants Near me </a> 
										 
                    <br>
                    <li  align="left"><a href="#">7. Vishnu Nallah Dam
									</br> </br>
									<img src="images/vishnu-nallah-dam.png"	height=500		width=100%></br></br>
									  The Vishnu Nallah Dam is 25.2 Km from Hut Bay and 5.2 Km from Rabindra Nagar Junction. Prior permission from APWD is required.</br>
									  <a title="Vishnu Nallah Dam" href="https://www.google.com/maps/place/10.744882,92.499967">See the Location in Google Maps</a>
                    <a href="https://www.google.com/maps/search/restaurants/@11.977356,92.987751,10z"target="_blank">Show restaurants Near me </a> 
									<br>
                  </ul>
							
											
									<script>
									function myFunction() {
										var input, filter, ul, li, a, i, txtValue;
										input = document.getElementById("myInput");
										filter = input.value.toUpperCase();
										ul = document.getElementById("myUL");
										li = ul.getElementsByTagName("li");
										for (i = 0; i < li.length; i++) {
											a = li[i].getElementsByTagName("a")[0];
											txtValue = a.textContent || a.innerText;
											if (txtValue.toUpperCase().indexOf(filter) > -1) {
												li[i].style.display = "";
											} else {
												li[i].style.display = "none";
											}
										}
									}
									</script>
								</div>




					</div>
				</div>
				
			</div>
		</div>
	</div>

	<!-- Comment -->

	<div style = "margin:70px">
		<?php
		if($username!=null){
				$username = $_SESSION['username'];

				echo "<form method='POST' action='".setComments($connect)."'>
				<input type = 'hidden' name = 'uid' value ='$username' >
				<input type = 'hidden' name = 'date' value ='".date('Y-m-d H:i:s')."' >
				<textarea name ='message' style='width: 1390px ;height: 80px ;background-color: #fff;resize: none;'></textarea><br>
				<br><button type = 'submit' name = 'commentSubmit' style='	width: 100px;height: 30px;background-color:#282828;border: none;color: #fff;font-family: arial;	font-weight:400;cursor: pointer;margin-bottom: 60px;'>Comment</button>
			</form>";
		}else{
 			echo "<p style='margin-left:450px;font-size:25px;'>You need to be logged in to comment<p>";
		}
		getComments($connect);
		
		?>
	</div>
	
	<!-- About -->
	<div class="newsletter">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="newsletter_background" style="background-image:url(images/newsletter.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="newsletter_content">
						<div class="newsletter_title text-center">Subscribe to our Newsletter</div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
									<input type="email" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
									<button type="submit" id="newsletter_button" class="newsletter_button">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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