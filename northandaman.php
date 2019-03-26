<?php
	session_start();
	if(isset($_SESSION['username']))
		$username= $_SESSION['username'];
	else 
		$username = null;
	date_default_timezone_set("Asia/Calcutta");
	include 'connect.php';
	include 'comment.inc.php';
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
							<div class="home_title">North Andaman</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.php">Home</a></li>
									<li class="home_breadcrumb">North Andaman</li>
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
									  	<li align="left"><a><b>North Andaman | Diglipur, Andaman Island, India</b></br> </br>
										<img src="images/diglipur-north.jpg"	height=500		width=100%></br></br>
							
											Diglipur (325 Kms., approx. 12 hrs by road from Port Blair) Situated in North Andaman Island, Diglipur provides a rare experience for eco friendly tourists. It is famous for its oranges, rice and marine life. Saddle Peak the highest point in the islands is nearby. Kalpong, the only river of Andaman flows here. The only Hydro-electric project of the islands is on this river. One can feel the innocent beauty of village life everywhere in Diglipur.
											North Andaman houses green tropical forests, world class beaches and turtle nesting sites (Smith Ross Island, Elizabeth Bay, RamNagar), Highest Peak of the islands - Saddle Peak, and rare attractions like the Mud Volcanoes (at Shyam Nagar, Hathi Level) and Swiflet Cave (at Pathilevel). Diglipur is the name of a Tehsil. It is the local administrative and economic centre of North Andaman.</br></br>
											How to reach Diglipur:</br>
											The entry into Diglipur is primarily from Port Blair. Diglipur Township is 325 km from Port Blair by Andaman Trunk Road and 100 nautical miles (~185 km) by sea route. Tourists can directly sail to Diglipur by ship and alternatively can travel to Diglipur by road, crossing two creeks on the way connecting Baratang Island and Middle Andaman Island. Helicopter services are also available from Port Blair.
                                            Private (Anand/Geetanjali etc.) and Government operated bus services (STS -State Transport Service) are available for Diglipur from Port Blair. The road journey of 330 km takes a total of around 11 hours! In 2002 a 0.5 km long bridge Austin Bridge was inaugurated connecting the creek between Mayabunder (end of Middle Andaman) and North Andaman Island which has reduced the traveling time (else it was 15 hours in past from Port Blair). In past when there was no bridge a 2 hour slow ferry operated between Mayabunder jetty and a small creek named Kalighat in North Andaman.
                                            <a title="Diglipur" href="https://www.google.com/maps/place/13.266645,92.982410"target="_blank">See the Location in Google Maps</a>
              </a></li>
              <br>
									  <li align="left"><a><b>1. Smith and Ross Island</b></br> </br>
										<img src="images/smith-and-ross.jpg"	height=500		width=100%></br></br>
							
											<strong>Smith and Ross</strong> Islands are sister islands separated by a bar of sand. During high tide the sandbar submerges under water and the two islands appears separate. The beach at this location is rated number one among all the existing beaches of Andaman Islands. The Ross Island of the Smith-Ross duo is often confused with the famous colonial colony at Ross Island near Port Blair. Smith and Ross offers a virgin beach followed by a tropical forest. Ross and Smith Island is a 20 minutes (distance 5 km) boat ride from Aerial Bay jetty is an ideal spot for Beach tourism, Adventure (trekking through tropical forest), Research / Education (like scuba diving, snorkeling, turtle nesting). The 450 metre long sand bar joining Smith and adjoining Ross island is the main attraction.</p>
											Smith Island also houses a small village of about 60 families. Smith Island beach is notified for Turtle nesting during seasons.
											 <a title="Smith and Ross island" href="https://www.google.com/maps/place/11.675842,92.762423">See the Location in Google Maps</a>
											 <a href="https://www.google.com/maps/search/restaurants/@11.785883,93.081293,10z"target="_blank">Show restaurants near me </a>

              </a></li>
              <br>
									  <li  align="left"><a href="#">2. Saddle Peak National Park
											</br> </br>
												<img src="images/saddle-peak.jpg"	height=500		width=70%></br></br>
												Saddle peak is the highest point (732 metres) of Andaman and Nicobar Islands. The trek to the Peak which offers an aerial view of North Andaman is about 8 km long from the park entrance at Lamiya Bay / Kalipur. The initial stretch of 3 km runs along the coastline. Saddle Peak National Park is a dense tropical forest housing a rich bank of exquisite trees, (including sandal), rare flora and wild fruits and offering trekking opportunities including climbing up natural steps formed by the roofs of old trees.
												There are 3 peaks in the park 1) Saddle Peak 2) the second peak named Ice degree peak 3) Unnamed point which provides a aerial view of Diglipur to Mayabunder.
												The Peaks are notified as Saddle Peak National park in 1979. The park is uninhabited and not frequented by trekkers. At Every 500 meter, Forest department has built hutments with benches. Due to humid weather the trek is tiresome and it is advisable to start it early in the morning. As there are no shops on the way necessary refreshments needs to carried.
												 <a title="Saddle Peak National Park" href="https://www.google.com/maps/place/13.158362,93.006292">See the Location in Google Maps</a>
												 <a href="https://www.google.com/maps/search/restaurants/@13.158032,93.006316,10z"target="_blank">Show restaurants near me </a>

									
                    </a></li>
                    <br>
									  
									  <li  align="left"><a href="#">3. Lamiya Bay Beach
									</br> </br>
									<img src="images/lamiya-bay-beach.jpg"	height=500		width=100%></br></br>
									  The beach lies around 3 kilometers ahead of Kalipur beach (and 25 Km from Diglipur Bazaar) and lies at the foothill of Saddle Peak, the highest peak of Andaman and Nicobar Islands. Lamiya Bay is also locally called "Lemiyar Bay".This beautiful beach has a long stretch of beach covered with shells and fine polished pebbles and it is also a known turtle-nesting site.The Andaman Administartion has constructed eco-friendly huts and a Watch Tower for the tourists.
									  Mutiple streams of fresh water orginating out of the Saddle peak hill end near the beach in the foothills of Saddle Peak National Park.
									  <a title="Lamiya Bay Beach" href="https://www.google.com/maps/place/13.201026,93.040335">See the Location in Google Maps</a>
										<a href="https://www.google.com/maps/search/restaurants/@13.200869,93.040324,10z"target="_blank">Show restaurants near me </a>

                    <br>
                    <li  align="left"><a href="#">4. HathiLevel Mud Volcanoes
									</br> </br>
									<img src="images/hathilevel-mud-volcanoes.jpg"	height=500		width=100%></br></br>
									  The mud volcanoes at North Andaman are described by locals as better than that found in Baratang Islands. The mud volcanoes at North Andaman are located at Jal Tikry near Hathi level around 20 kilometers from Diglipur Bazaar (direction towards Laxmipur).
									  20 kms from Diglipur there are a chain of Mud volcanoes could be witnessed in the green jungle.One has to trek for 15 minutes in the semi-evergreen forests to reach Mud volcano. At the initial point, bigger and dormant mud volcano can be sighted. On proceeding further for few minutes fresh emerging mud volcanoes could be seen. Information boards are provided for visitors.
									   <a title="HathiLevel Mud Volcanoes" href="https://www.google.com/maps/place/13.266645,92.982410">See the Location in Google Maps</a>
										 <a href="https://www.google.com/maps/search/restaurants/@12.129865,92.791938,10z"target="_blank">Show restaurants near me </a>

										 <br>
                    <li  align="left"><a href="#">5. Kalipur Beach
									</br> </br>
									<img src="images/kalipur-beach.jpg"	height=500		width=100%></br></br>
									  kalipur Beach also home to thousands of turtles during their nesting period. During the winter months of Dec/Jan, turtle nesting takes place in Andaman and Nicobar Islands.
									   <a title="Kalipur Beach" href="https://www.google.com/maps/place/13.223883,93.044585">See the Location in Google Maps</a>
										 <a href="https://www.google.com/maps/search/restaurants/@13.223920,93.044573,10z"target="_blank">Show restaurants near me </a>
										 <br>
                    <li  align="left"><a href="#">6. Ram Nagar Beach, Port Blair
									</br> </br>
									<img src="images/ram-nagar-beach.jpg"	height=500		width=100%></br></br>
									  RamNagar Beach, beyond Kalighat is a popular beach destination. . This beach is suitable for swimming and sun basking. A nature trail for trekkers is an added attraction. This beach is well known for turtle nesting. Eco-friendly beach facilities like eco-huts, benches and seating arrangements have been provided.
									  <a title="Ram Nagar Beach" href="https://www.google.com/maps/place/13.076160,93.025277">See the Location in Google Maps</a>
										<a href="https://www.google.com/maps/search/restaurants/@13.075698,93.025285,10z"target="_blank">Show restaurants near me </a>
                    <br>
                    <li  align="left"><a href="#">7. Pathilevel Swiftlet Nest Caves
									</br> </br>
									<img src="images/pathilevel.jpg"	height=500		width=100%></br></br>
									  An hour trek through the RamNagar jungle leads to a cluster of 41 caves. These caves are den for rare edible nest producing swiftlets (Collocacia f. inexpectata) and fruit eating bats. Best time to visit the caves is from December to March. The caves with a very narrow entrance, open up into chain of deep caves inside. Only a handful of the 41 caves are accesssible easily.
									  <a title="Pathilevel Swiftlet Nest Caves" href="https://www.google.com/maps/place/13.266645,92.982410">See the Location in Google Maps</a>
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
				<textarea name ='message' style='width: 1390px ;height: 80px ;background-color: #FFFFFF;resize: none;'></textarea><br>
				<br><button type = 'submit' name = 'commentSubmit' style='	width: 100px;height: 30px;background-color:#282828;border: none;color: #fff;font-family: arial;	font-weight:400;cursor: pointer;margin-bottom: 60px;font'>Comment</button>
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