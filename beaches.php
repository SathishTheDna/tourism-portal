<?php
	session_start();
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
								<li class="main_nav_item"><a href="#">Home</a></li>
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
					<li class="menu_item menu_mm"><a href="#">About us</a></li>
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
							<div class="home_title">Beaches in Andaman & Nicobar Island</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.php">Home</a></li>
									<li class="home_breadcrumb">Categories</li>
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
									  <li align="left"><a><b>1. Radhanagar Beach, Havelock Island</b></br> </br>
										<img src="images/radhanagar-beach.jpg"	height=500		width=100%></br></br>
							
											Extolled as “Asia’s Best Beach” in 2004 by the TIME Magazine, the Radhanagar Beach is one of the must visit beaches in Andaman that lies on the western coast of Havelock Island. The clean and composed ambiance, far from the tourist hum drum, with farseeing white and silky sand gleaming beneath the turquoise blue waters is a perfect beachscape to take those long walks at an ideal sunset brimming over the horizon. The Radhanagar Beach is also known for hosting underwater activities like snorkeling and scuba diving that lets the adventure seekers to explore the colourful marine world.
              </a></li>
              <br>
									  <li  align="left"><a href="#">2. Ross and Smith Island Beach
											</br> </br>
												<img src="images/ross-and-smith-island-beach.jpg"	height=500		width=70%></br></br>
												The unmatched and paradisaical beauty of the Ross and Smith island beach, which is a natural sandbar connecting the two lonely islands, is yet another unruffled beaches in Andaman… rolling up beach lovers from all over the world. The Ross and Smith Island beach is a few nautical miles from the Diglipur Jetty and one can enjoy boat rides on the crystal clear blue water tinged with green. It is a haven for leisure and adventure activities like sunbathing, swimming, snorkeling and scuba diving.
									
                    </a></li>
                    <br>
									  
									  <li  align="left"><a href="#">3. Laxmanpur Beach, Neil Island
									</br> </br>
									<img src="images/laxmanpur-beach.jpg"	height=500		width=100%></br></br>
									  One of the popular beaches in Andaman, the Laxmanpur Beach, which is close to the Bharatpur Beach… is the perfect getaway on your trip to Andaman, as you are left with sufficient time and space to be on your own and enjoy the privacy even during the peak tourist season. The Laxmanpur Beach is comparatively longer and wider than Bharatpur Beach, hence ideal for a long and refreshing walk.
                    <br>
                    <li  align="left"><a href="#">4. Lalaji Bay Beach, Long Island
									</br> </br>
									<img src="images/lalaji-bay-beach.jpg"	height=500		width=100%></br></br>
									  Another serene and spectacular beach in Andaman that is located in the western coast of Long Island and is well connected by regular ferries from Rangat, Middle Andaman, the Lalaji Bay Beach is a must-visit destination for the skinny-dippers. From Long Island jetty one need to hire a dunghi or walk for over an hour through a mangrove creek to reach the Lalaji Bay beach.
                    <br>
                    <li  align="left"><a href="#">5. Guitar Island Beach
									</br> </br>
									<img src="images/guitar-island-beach.jpg"	height=500		width=100%></br></br>
									  One of the least travelled beaches in Andaman, the Guitar Island beach is a long, narrow and creamy beach that can only be accessed from Long Island Jetty by dunghi. This beach is an ideal escape for couples looking for some privacy and seeking to build some impractical romantic ideals and attitudes.
                    <br>
                    <li  align="left"><a href="#">6. Wandoor Beach, Port Blair
									</br> </br>
									<img src="images/wandoor-beach.jpg"	height=500		width=100%></br></br>
									  Although it is one of the popular beaches in Andaman… the Wandoor Beach is still known for its scenic panorama that is ideal for swimming and coral sighting. Close to the Wandoor Beach… one can go for snorkeling and scuba diving at the Mahatma Gandhi Marine National Park that covers roughly 15 small nearby islands including Jolly Buoy, Boat, Alexandra, Red Skin, and Tarmugli and explore the beautiful coral world.
                    <br>
                    <li  align="left"><a href="#">7. Aamkunj Beach, Rangat
									</br> </br>
									<img src="images/amkunj-beach-rantag.jpg"	height=500		width=100%></br></br>
									  The Aamkunj beach in Rangat is one of the best eco-tourism destinations in India that is managed by the forest officials at Rangat under the guidance of the DFO (Divisional Forest Officer). Being one of the turtle nesting beaches in Andaman, the Aamkunj beach pulls in a large number of environmental enthusiasts. Close to the beach is the Eco Park that provides a friendly environment and is equipped with eco huts, trunk benches, log sofas, log teapoys and log stools.
                    <br>
                    <li  align="left"><a href="#">8. Karmatang Beach, Mayabunder
									</br> </br>
									<img src="images/karmatang-beach.jpg"	height=500		width=100%></br></br>
									  The party animals will turn this dull beach wild and eventful. Yes! There is nothing much to explore at Karmatang Beach BUT if you are travelling to Andaman with a group of hippies then this beach must not be missed. Nonetheless… the Karmatang beach, unlike other beaches in Andaman, is a beautiful and clean beach with lush coastal vegetation and having several small huts. It is approximately a 30 minutes drive from Mayabunder.
                    <br>
                    <li  align="left"><a href="#">9. Merk Bay Beach, North Passage Island, Long Island
									</br> </br>
									<img src="images/merk-bay-beach.jpg"	height=500		width=100%></br></br>
									  The narrow and long Merk Bay beach is a place SOMEWHERE ELSE than other popular beaches in Andaman. Access to the Merk Bay beach is only possible by a dunghi from Long Island jetty is as enjoyable (during low tide) as it is hazardous (during bad weather condition). The Merk Bay beach lies in the North Passage Island, one of the uninhabited islands in Andaman, which is close to Strait Island (home to the Great Andamanese tribe, one of the indigenous tribes of India), Guitar Island and Long Island. It is also an ideal beach where one can go for scuba diving and snorkeling.
                    <br>
                    <li  align="left"><a href="#">10. Butler Bay Beach, Hut Bay Island
									</br> </br>
									<img src="images/butler-bay-beach.jpg"	height=500		width=100%></br></br>
									  If you are one of the soul surfers then the Butler Bay beach in Little Andaman is a must visit for you; the beach can be accessed from Hut Bay. It is a fairly exposed beach with soft brown sand and dense greenery around and reef break that has fairly consistent surf. Further… activities like scuba diving and snorkeling are also possible at Butler Bay beach. It is a concave shaped beach; hence one can see the entire beach from any given point.
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