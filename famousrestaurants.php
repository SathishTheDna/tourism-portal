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
<title>Tourist Spots</title>
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
	  color: white;
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
							<div class="home_title">Famous Restaurants in the Islands</div>
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
                                    <p></p>
                                   
                                    <input class="input-field" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names...." title="Type in a name">
                                      <ul id="myUL">
                                      <li align='left'><a>1. Full Moon Cafe
                                        </br> </br>
                                        <img src="images/full-moon-cafe.jpg"	height=500		width=70%></br></br>
                                        If you’re looking for top restaurants in Havelock Island, Andaman, then this famous cafe run by an Irish-Indian couple is the place to be! The cool thatched-roof ambience near the popular Beach No. 5 and the finger-licking good seafood make a visit here beyond incredible.</br></br>
                            
										Cuisines: Indian, Seafood, American, and Asian</br>
										Timings: Open on all the days from 7:00 AM to 11:00 PM</br>
										Cost: INR 500 for two</br>
										TripAdvisor Rating: 4.5/5</br>
										Location: Dive India, Beach 5, Havelock Island, India</br>
                                      </a></li>
                                      <br>
                                      <li align='left'><a href="#">2. Annapurna Restaurant
                                        </br> </br>
                                        <img src="images/annapurna.jpg"	height=500		width=70%></br></br>
                                        Renowned as one of the best pure veg restaurants in Andaman, this place is a little paradise on the island. Its not-so-expensive cuisines on the card make it a must-visit for every vegan holidaying near the Aberdeen Bazar in Port Blair.</br></br>
                            
									Cuisines: Pure Vegetarian and Chinese</br>
									Timings: Open on all the days from 7:00 AM to 10:00 PM</br>
									Cost: INR 500 for two</br>
									TripAdvisor Rating: 4/5</br>
									Location: 71 MG Road, Opposite Model School, Aberdeen Bazar, Port Blair, Andaman and Nicobar Islands</br>
                                      </a></li>
                                      <br>
                                      <li align='left'><a href="#">3. New Lighthouse Restaurant
                                        </br> </br>
                                        <img src="images/new-light-house.jpg"	height=500		width=70%></br></br>
                                        Situated nearby to the Marina Park in Port Blair, this Andaman restaurant is a famous eatery both amongst locals and tourists. From serving lip-smacking grilled fish & lobsters to offering an open-air, comfortable environment, this place surely knows how to pamper its guests.</br></br>
                            
										Cuisines: Indian (Veg), Seafood, Asian</br>
										Timings: Open on all the days from 10:00 AM to 10:30 PM</br>
										Cost: INR 800 for two</br>
										TripAdvisor Rating: 3.5</br>
										Location: Rajiv Gandhi Nagar, Port Blair, Andaman and Nicobar Islands</br>
                                      </a></li>
                                      <br>
                                      <li align='left'><a href="#">4. The Bayview at Sinclairs Bayview Port Blair
                                        </br> </br>
                                        <img src="images/bayview.jpg"	height=500		width=70%></br></br>
                                      Overlooking the gorgeous sea, this restaurant in Andaman located in the Sinclairs Bayview Resort is definitely the best place to dine. From local to continental, it serves all kinds of cuisines, specially customized to please your eyes and soothe your taste buds. </br> </br>
                            
									Cuisines: Indian, Seafood, Continental, and more </br>
									Timings: Open on all the days from 7:30 AM to 10:30 PM </br>
									Cost: NA </br>
									TripAdvisor Rating: 4/5 </br>
									Location: South Point, Port Blair, Andaman and Nicobar Islands </br>
                                      </a></li>
                                      <br>
                                      <li align='left'><a href="#">5. Amaya Lounge Bar
                                        </br> </br>
                                        <img src="images/amaya.jpg"	height=500		width=70%></br></br>
                                        Of all the restaurants in Andaman, Amaya is the most romantic place to visit, especially with a loved one. The rooftop ambiance overlooking the iconic north bay and the scrumptious seafood in the platter makes it a top-notch spot for having the best dinner of your life!</br></br>

										Cuisines: Multi-cuisine</br>
										Timings: NA</br>
										Cost: NA</br>
										TripAdvisor Rating: 4.5/5</br>
										Location: SeaShell Hotel, Marine Hill, Port Blair</br>
                                      </a></li>
                                      <br>
                                       <li align='left'><a href="#">6. Bonova Cafe And Pub
                                        </br> </br>
                                        <img src="images/bonova.jpg"	height=500		width=70%></br></br>
                                        Situated near the Govind Nagar Beach, this is one of the best restaurants in Havelock, Andaman. The modern yet classic ambiance of the cafe, friendly hospitality, and hands down the endless array of toothsome cuisines make a visit to this place worth every dime.</br></br>

										Cuisines: Indian, Thai, Continental, and Chinese</br>
										Timings: Open on all the days from 11:00 AM to 11:00 PM</br>
										Cost: INR 1,000 for two</br>
										TripAdvisor Rating: 4.5/5</br>
										Location: Beach Number 2, Govind Nagar Beach, Havelock, Andaman and Nicobar Islands</br>
                                      </a></li>
                                       <li align='left'><a href="#">7. Mandalay Restaurant
                                        </br> </br>
                                        <img src="images/mandalay.jpg"	height=500		width=70%></br></br>
                                        Overlooking the breathtakingly beautiful Andaman sea, this restaurant located in the Fortune Resort Bay Island is one of the best places to visit in Port Blair. Be it a variety of cuisines or a heartwarming hospitality, you’ll find everything here.</br></br>

										Cuisines: Indian, Asian, and Chinese</br>
										Timings: Open on all the days from 10:00 AM to 10:00 PM</br>
										Cost: INR 600 for two</br>
										TripAdvisor Rating: 4/5</br>
										Location: Fortune Resort Bay Island, Marine Hill, Port Blair, Andaman and Nicobar Islands</br>
                                      </a></li>
                                       <li align='left'><a href="#">8. Restaurant at Barefoot At Havelock
                                        </br> </br>
                                        <img src="images/barefoot.jpg"	height=500		width=70%></br></br>
                                        Amongst all the top Andaman restaurants, this restaurant at Barefoot At Havelock is the best place to visit if you wish to have the most incredible fine dining experience in Havelock. Apart from delicious cuisines, it also serves an array of spirits and wine that can make your night even more special.</br></br>

										Cuisines: Continental, Indian, and Seafood</br>
										Timings: NA</br>
										Cost: NA</br>
										TripAdvisor Rating: 4.5/5</br>
										Location: Beach No. 7, Radhanagar Village, Havelock Island, Andaman and Nicobar Islands</br>
                                      </a></li>
                                       <li align='left'><a href="#">9. Fat Martin Cafe
                                        </br> </br>
                                        <img src="images/fat-martin.jpg"	height=500		width=70%></br></br>
                                        An intriguing open-air restaurant in Andaman and Nicobar Islands, Fat Martin offers the best Indian food on the island. Open throughout the day, you can easily visit this place to savour cuisines like paneer tikka or dosa when you’re done eating seafood on your holiday.</br></br>

										Cuisines: Indian, South Indian</br>
										Timings: Open on all the days from 7:00 AM to 11:00 PM</br>
										Cost: INR 300 for two</br>
										TripAdvisor Rating: 4.5/5</br>
										Location: Near Kala Pathar Road, Havelock Island, Andaman and Nicobar Islands</br>
                                      </a></li>
                                       <li align='left'><a href="#">10. Anju Coco
                                        </br> </br>
                                        <img src="images/anju-coco.jpg"	height=500		width=70%></br></br>
                                        One of the rare restaurants in Andaman, which is famous for offering personalized service and attention to every guest, Anju Coco is a must-visit in Havelock. It is high on delicious variety and low on the pocket, and serves the best grilled tuna on the island. Sounds like a win-win. Doesn’t it?</br></br>

										Cuisines: Seafood, American</br>
										Timings: Open on all the days from 8:00 AM to 10:30 PM</br>
										Cost: INR 250 for two</br>
										TripAdvisor Rating: 4.5/5</br>
										Location: Beach No. 5, Vijay Nagar, Havelock Island, Andaman and Nicobar Islands</br>
                                      </a></li>
                                      
                                      
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