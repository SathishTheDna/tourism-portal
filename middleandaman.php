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
							<div class="home_title">Middle Andaman</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.php">Home</a></li>
									<li class="home_breadcrumb">Middle Andaman</li>
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
									  	<li align="left"><a><b>Middle Andaman and Rangat, Andaman Island, India</b></br> </br>
										<img src="images/middle-andaman.jpg"	height=500		width=100%></br></br>
							
											The Middle Andaman is large Island and houses the inhabitated towns of Mayabunder, Rangat, Billiground. Geo-politically smaller nearby Islands are also classified under the zone of Middle Andaman.
											Panchavati water fall/beach, Amkunj beach (8 km from Rangat) and Betapur beach are nearby places to visit. Cutbert Bay Beach (20 km) away from Rangat bazaar/jetty) is a turtle nesting ground (December to February). Government owned Guest house Hawksbill Nest is near to the Cutbert bay beach and Turtle sanctuary. Most of the tourist visiting Rangat are foreign nationals and in comparison Indian Tourists are lesser. The estimated tourist inflow is just about 4500 the whole year (as per current estimates).
											This island collection is spread across 75 census villages and 14 gram panchayats. The population is made up of people from Bengal, Kerala and Tamil Nadu. Fisheries and cultivation are the two primary occupations of people in this island.
										</br></br>
											Rangat:</br>
											Rangat is a biggest town in Middle Andaman ith pristine beaches, waterfalls, and interesting islands. Rangat is 210 km from Port Blair and 70 km south of Mayabunder. Rangat is well connected by road and sea route. This place is in the middle part of Andaman Islands. Travelers visiting Baratang can make Rangat as their destination to stay and continuing to Havelock. It is nearly 3 hours journey from Baratang to Rangat. The journey is through Jarawa reserve. The unpolluted atmosphere, a blissful ambiance and the quiet village life of Rangat attracts tourists to come to Andaman and enjoy the vitality of nature.</br></br>
											Mayabunder</br>
											The Mayabunder village, which is home to a large minority of former Burmese Karen tribes, who were brought here by the British. It is nearly three hours drive to Rangat, north by road. Mayabunder is surrounded by mangrove swamps.</br>
                                            <a title="Middle Andaman and Rangat, Andaman Island" href="https://www.google.com/maps/place/12.560980,92.817831">See the Location in Google Maps</a>
              </a></li>
              <br>
									  <li align="left"><a><b>1. Aamkunj Beach</b></br> </br>
										<img src="images/aamkunj-beach.jpg"	height=500		width=100%></br></br>
							
											Aamkunj Beach is located near to Rangat and it is one of the best eco-tourism destinations in India.It is 08Km away from Rangat and barely 100 mts from the main road i.e, Andaman Trunk Road (A.T.R).Close to the beach is the eco-park that provides a friendly environment. At, this place there is natural fresh water and this is the reason for choosing this place as a park. What makes this park unique is the fact that everything is made-up of woods and particularly the wood logs that were lying on the beach. So no tree was cut to make the picnic area. These structures are maintenance free, durable and will last for many decades to come.</br>
											 <a title="Aamkunj Beach" href="https://www.google.com/maps/place/12.512058,92.965831">See the Location in Google Maps</a>
											 <a href="https://www.google.com/maps/search/restaurants/@12.512100,92.965820,10z"target="_blank">Show restaurants near me </a>
              </a></li>
              <br>
									  <li  align="left"><a href="#">2. Moricedera Beach
											</br> </br>
												<img src="images/moricedera-beach.jpg"	height=500		width=70%></br></br>
												Further away from Aamkunj beach, about 12km from Rangat, you’ll find a rocky Moricedera beach. More then swimming it serves as a popular picnic and resting place with some sit out areas. The uniqueness of the beach is volcanic rock formation overlooking the sea. There is a short walkway between the two rocks with small benches to sit and admire the lovely views to the open sea. Specially enchanting is admiring the sunrise with absolutely no crowds around. The beach itself is nothing special compared to other Andaman beaches, but if one prefers rocks and smooth rounded stones this is a perfect place to stop by to enjoy a bit of change from sandy puffs. It is not the easiest access to enter the sea though, but the water is clear, warm and quickly deep. Snorkelling offers glimpse of colourful fishes, but there are no live corals. Facilities are limited on Moricedera beach, no toilets or restaurants, but you’ll find stalls selling water, some sweets as well as fresh coconuts. Stock up with food if you intend to stay longer. To get to Moricedera beach one can take a bus to Mayabunder from Rangat and jump of at the bus station. Tell the driver where you’re heading and he will remind you where to go down. A more convenient and faster option is going with a public jeep or auto rickshaw, but is pricier.</br>
												 <a title="Moricedera Beach" href="https://www.google.com/maps/place/12.553690,92.971306">See the Location in Google Maps</a>
												 <a href="https://www.google.com/maps/search/restaurants/@12.553700,92.971273,10z"target="_blank">Show restaurants near me </a>
									
                    </a></li>
                    <br>
									  
									  <li  align="left"><a href="#">3. Dhaninallah Beach & Mangrove Walk Way
									</br> </br>
									<img src="images/dhaninallah-beach.jpg"	height=500		width=100%></br></br>
										DhaniNallah Mangrove WalkWay and Beach is located at a distance of 18 Km from Rangat towards Mayabunder. The beautiful and unique wooden boardwalk is built on top of Mangrove swamp / creek that leads to the Dhaninallah Beach. With a length of 713 meters, it is the longest walkway of its kind in India. Dhaninallah is named after a mangrove that is locally called "Dhanipatti". The Mangrove Nature-Walkway was inaugurated in December 2012. The Dhaninallah beach is a known for turtle nesting during last and first quarter of every year.</br>
									  <a title="Dhaninallah Beach & Mangrove Walk Way" href="https://www.google.com/maps/place/12.699278,92.963147">See the Location in Google Maps</a>
										<a href="https://www.google.com/maps/search/restaurants/@12.699226,92.963286,10z"target="_blank">Show restaurants near me </a>

                    <br>
                    <li  align="left"><a href="#">4. Yerrata Mangrove Park
									</br> </br>
									<img src="images/yerrata-mangrove-park.jpg"	height=500		width=100%></br></br>
										Yerrata is famous for its mangrove creek and mangrove park. Located near Rangat, Yerrata offers an ideal inclusion in your itinerary. It has variety of attractions, like the mangrove park, mangrove creek tower and the mangrove beach walk. Yerrata has a jetty from where ferry service is provided to Long Island. Yerrata, which is well connected by road has breath-taking scenic beauty of various species of mangroves and is an ideal location to learn about diverse variety of mangroves.</br>
									   <a title="Yerrata Mangrove Park" href="https://www.google.com/maps/place/13.266645,92.982410">See the Location in Google Maps</a>
										 <a href="https://www.google.com/maps/search/restaurants/@12.478627,92.844346,10z"target="_blank">Show restaurants near me </a>
										 <br>
                    <li  align="left"><a href="#">5. Cutbert Bay
									</br> </br>
									<img src="images/cutbert-bay.jpg"	height=500		width=100%></br></br>
										The Sanctuary comprises about 8 kms of sandy beach at the coast of the Middle Andaman Islands and continues for about 600 mts inside the land from the high tide mark along the coast.</br>

										One can enjoy the quiet village life and solitude of virgin nature in this part of Middle Andaman Island. You can also breathe unpolluted air, a rare availability for the city dweller. Cutbert Bay is a turtle-nesting ground.</br>
									   <a title="Cutbert Bay" href="https://www.google.com/maps/place/12.675823,92.952364">See the Location in Google Maps</a>
										 <a href="https://www.google.com/maps/search/restaurants/@12.676367,92.952664,10z"target="_blank">Show restaurants near me </a>
										 <br>
                    <li  align="left"><a href="#">6. Panchavati Hills
									</br> </br>
									<img src="images/panchavati-hills.jpeg"	height=500		width=100%></br></br>
										Panchavati Hills has mutiple small and beautiful waterfalls and springs. These springs are source of water supply for the major part of middle Andaman.</br>
										In 1959, a 12.9 hectare coffee farm at Panchwati was established for conducting pilots of coffee cultivation. 5.90 hectare land of the farm is covered under coconut, arecanut and coffee. The agricultural farm is a rich bank of vegetation and is of interest to botany enthusiasts.</br>
									  <a title="Panchavati Hills" href="https://www.google.com/maps/place/13.266645,92.982410">See the Location in Google Maps</a>
                    <a href="https://www.google.com/maps/search/restaurants/@11.708298,92.708668,10z"target="_blank">Show restaurants near me </a>
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