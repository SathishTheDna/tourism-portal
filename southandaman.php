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

								<<div class="dropdown">
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
							<div class="home_title">South Andaman</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.php">Home</a></li>
									<li class="home_breadcrumb">South Andaman</li>
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
									  	<li align="left"><a><b>South Andaman & Port Blair | Andaman & Nicobar Islands, India</b></br> </br>
										<img src="images/south-andaman.jpg"	height=500		width=100%></br></br>
							
											South Andaman Island is the southernmost island of the Great Andaman and is home to the majority of the population of the Andaman Islands. It belongs to the South Andaman administrative district, part of the Indian union territory of Andaman and Nicobar Islands.[6] It is the location of Port Blair, capital of the Andaman and Nicobar Islands.</br>
											The island belongs to the Great Andaman Chain. Some areas of the island are restricted areas for non-Indians; however, transit permits can be obtained from the Home Ministry. South Andaman is the third largest island in the island group. It is located immediately south of Middle Andaman Island and Baratang, from which it is separated only by a narrow channel, a few hundred meters wide. The island is 83 kilometres (52 miles) long and 28 kilometres (17 miles) at its widest part. Its area is 1,262 square kilometres (487 square miles). South Andaman is less mountainous than the more northerly of the Andaman Islands. Koiob reaches a height of 459 metres (1,506 feet) above sea level.</br>

                                            <a title="South Andaman & Port Blair " href="https://www.google.com/maps/place/11.839054,92.652172">See the Location in Google Maps</a>
              </a></li>
              <br>
									  <li align="left"><a><b>1. North Bay</b></br> </br>
										<img src="images/north-bay.jpg"	height=500		width=100%></br></br>
												The beach around the island is very famous for under water corals. It is ideal place for scuba diving and snorkeling. Coral island with white sand beaches and surrounded by the pristine beauty of Nature. The sea has gifted this island with all the splendor to attract any sea loving human. The Coral reefs are gorgeously decorated by nature to stun the visitor.</br>
											 <a title="North Bay" href="https://www.google.com/maps/place/11.704602,92.751850">See the Location in Google Maps</a>
											 <a href="https://www.google.com/maps/search/restaurants/@11.704878,92.754713,10z"target="_blank">Show restaurants Near me </a> 
              </a></li>
              <br>
									  <li  align="left"><a href="#">2. Ross Island
											</br> </br>
												<img src="images/ross-island.jpg"	height=500		width=70%></br></br>
												The Ross Island is controlled by the Indian navy, which requires every visitor to sign in on entering. It was during the British rule that the island was developed to a perfect township. Many reminiscent of old British regime are still alive in this stunning Island. The Ross Island is about 2 km east of Port Blair and can be reached by a short boat ride from Phoenix Bay Jetty. The island presently houses the ruins of old buildings like Ballroom, Chief Commissioner's House, Govt. House, Church, Hospital, Bakery, Press, Swimming Pool and Troop Barracks, all in dilapidated condition, reminiscent of the old British regime.</br>
												 <a title="Ross Island" href="https://www.google.com/maps/place/11.675858,92.762420">See the Location in Google Maps</a>
												 <a href="https://www.google.com/maps/search/restaurants/@11.785673,93.081422,10z"target="_blank">Show restaurants Near me </a> 
              
									
                    </a></li>
                    <br>
									  
									  <li  align="left"><a href="#">3. Chidiya Tapu
									</br> </br>
									<img src="images/chidiya-tapu.jpg"	height=500		width=100%></br></br>
										Chidia tapu is 30 KM from main city; this place is famous for sunset view and for bird watching. Varieties of birds visit this place. The road passes through forest and small hills up to the Chidia tapu. From Port Blair, the journey would take around one hour to reach Chidia tapu. If you are interested to watch the sunset it is advisable to take an afternoon trip to this place. Remains of trees uprooted during Tsunami in 2004 are still present near the beach. There is no restaurant or food stall available inside the park; however, small hotels are present at the entrance. While traveling to this place sea will be to your left side. On your way you would pass through the Kalapathar, a trail of black rocks and beach. Stop here to take some pictures and proceed to Chidia Tapu.</br>


										For adventure lovers Chidia Tapu has a little more to offer. A trekking trail, which passes through forest and beautiful coast line to reach the Munda Pahad(Black Mountain). The trail starts at the shore of Chidiya Tapu beach and moves up passing through dense forest. It’s advisable to take a guide or travel in groups to reach the Munda Pahad. Upon reaching Munda Pahad, an elongated black cliff at the edge of Chidia Tapu with an open sea scape is an amazing site, which most travelers visiting these islands miss. Carry food and water before starting your trek to Munda Pahad. You could also hire a ferry from Chidiyatapu to Rutt Island and even the Cinque Island, another interesting destination for people willing to go of the crowd.</br>
									  <a title="Chidiya Tapu" href="https://www.google.com/maps/place/11.505929,92.701492">See the Location in Google Maps</a>
										<a href="https://www.google.com/maps/search/restaurants/@11.506000,92.701470,10z"target="_blank">Show restaurants Near me </a> 
              
                    <br>
                    <li  align="left"><a href="#">4. Jolly Buoy Island
									</br> </br>
									<img src="images/jolly-buoy-island.jpg"	height=500		width=100%></br></br>
										Jolly Buoy Island is in Andaman and Nicobar and is a part of Mahatma Gandhi Marine National Park. It is very famous for under water corals and the pristine clear beach.</br>
										To reach Jolly buoy island people have to come to Wandoor beach. This is located in Mahatma Gandhi National Park. Wandoor beach is 30 Kms from Port Blair by road. This route is same for visiting Red Skin island also. Both Jolly buoy and Red skin are located at Mahatma Gandhi National park. The boats to Jolly buoy island leaves by 9.00am. Make sure to reach Wandoor beach before 9.00am. All the boats leave at the same time and come back together. Prior permit and entry tickets are required to avail this trip.</br>
									   <a title="Jolly Buoy Island" href="https://www.google.com/maps/place/11.839054,92.652172">See the Location in Google Maps</a>
										 <a href="https://www.google.com/maps/search/restaurants/@11.511257,92.615740,10z"target="_blank">Show restaurants Near me </a> 
										 <br>
                    <li  align="left"><a href="#">5. Cellular Jail
									</br> </br>
									<img src="images/cellular-jail.jpg"	height=500		width=100%></br></br>
										The Cellular Jail, also known as Kālā Pānī (Hindi for black waters), was a colonial prison in the Andaman and Nicobar Islands, India. The prison was used by the British especially to exile political prisoners to the remote archipelago. Many notable freedom fighters such as Batukeshwar Dutt, Yogendra Shukla and Vinayak Damodar Savarkar, among others, were imprisoned here during the struggle for India's independence. Today, the complex serves as a national memorial monument
									   <a title="Cellular Jail" href="https://www.google.com/maps/place/11.673872,92.747928">See the Location in Google Maps</a>
										 <a href="https://www.google.com/maps/search/restaurants/@11.673861,92.747992,10z"target="_blank">Show restaurants Near me </a> 
										 <br>
                    <li  align="left"><a href="#">6. Chatham Saw Mill
									</br> </br>
									<img src="images/chatham-saw-mill.jpg"	height=500		width=100%></br></br>
										Chatham Saw Mill is the saw mill situated in Chatham Island of Andaman and Nicobar Islands in India. It was set up in 1883 with the primary objective to meet the local requirements of saw and timber for the constructional works. It is owned by the state government. </br>
									  <a title="Chatham Saw Mill" href="https://www.google.com/maps/place/11.687773,92.724207">See the Location in Google Maps</a>
										<a href="https://www.google.com/maps/search/restaurants/@11.687856,92.724187,10z"target="_blank">Show restaurants Near me </a> 
										 
                    <br>
                    <li  align="left"><a href="#">7. Viper Island
									</br> </br>
									<img src="images/viper-island.jpg"	height=500		width=100%></br></br>
										Viper Island derives its name from the vessel H.M.S. Viper in which Lt. Archibald Blair came to Andaman and Nicobar Islands in 1789. The vessel, it is believed, met with an accident and its wreckage was found near the island. This small island was the site of the jail where the British used to imprison convicts and political prisoners. It has the ruins of a gallows atop a hillock.</br>

										The jail was abandoned when the Cellular Jail was constructed in 1906. In any talk about Andaman and its role in the freedom struggle, it is the Cellular Jail that finds frequent mention. But, many years before the Cellular Jail was constructed, it was the jail at Viper Island that was used by the British to inflict the worst form of torture and hardship on those who strove to free the country from the British rule.</br>
									  <a title="Viper Island" href="https://www.google.com/maps/place/11.661518,92.697143">See the Location in Google Maps</a>
                    <a href="https://www.google.com/maps/search/restaurants/@11.661534,92.697134,10z"target="_blank">Show restaurants Near me </a> 
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