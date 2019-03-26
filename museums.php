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
<title>Museums</title>
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


	
	<!-- Home -->

	<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Museums in Andaman & Nicobar Island</div>
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
                                      <li align='left'><a>1. Samudrika Marine Museum
                                        </br> </br>
                                        <img src="images/sam.jpg"	height=500		width=70%></br></br>
                                        Samudrika is derived from the word Samudra, meaning Sea. And as the Andaman and Nicobar area is surrounded by sea, this museum showcases all its aspects; in different categories. The categories are history, people, marine life and archeology. Timings of the museum are 8:30 am to 12 noon and 2 pm to 5 pm, with Mondays closed. Entry charge for the same is ten rupees.
                                      </a></li>
                                      <br>
                                      <li align='left'><a href="#">2. Anthropological Museum
                                        </br> </br>
                                        <img src="images/ant.jpg"	height=500		width=70%></br></br>
                                        Anthropological museum exhibits the life and culture of different Andamanese tribes, since different ages. The museum has all its possessions guarded by glassed showcases. There are different day to day products and items of the locals of the area.
                                      </a></li>
                                      <br>
                                      <li align='left'><a href="#">3. Kalapani Museum
                                        </br> </br>
                                        <img src="images/kalpanai.jpg"	height=500		width=70%></br></br>
                                        Kalapani is a 1st of its kind history museum.that takes one on a journey across the black waters through the first settlement of andamans, mutiny of 1857, panel settlement starting from early history, hostile Aborigines, construction of cellular jail, Japanese occupation, reoccupation by British to freedom all these are depicted through archival Photographs dioramas antiquities documentaries
                                      </a></li>
                                      <br>
                                      <li align='left'><a href="#">4. Forest Museum
                                        </br> </br>
                                        <img src="images/forest-museum.jpg"	height=500		width=70%></br></br>
                                        Forest Museum in Andaman is located within the premises of the Chatham Saw Mill. An unusual amalgamation of the art and adventure prevails at the museum. Marvel at the artefacts made up of gurjan, timber, satin wood, oak and padauk. Beautiful photographs depict the work of Department of Environment and Forests and of historical importance.
                                      </a></li>
                                      <br>
                                      <li align='left'><a href="#">5. Science Centre
                                        </br> </br>
                                        <img src="images/science-centre.jpg"	height=500		width=70%></br></br>
                                        The Science Centre at Goodwill Estate is a delightful place to spend an afternoon with your family. It is a large museum established in 2003, fostering an environment of fun-filled learning, with a playground with innovative slides and swings within its compound. The models on display explain some very interesting natural phenomena like the behaviour of fishes according to climates and the way the oceans work, guaranteeing to keep both adults and children fascinated.
                                      </a></li>
                                      <br>
                                      <li align='left'><a href="#">6. Zsi Museum
                                        </br> </br>
                                        <img src="images/zsi.jpg"	height=500		width=70%></br></br>
                                        The Science Centre at Goodwill Estate is a delightful place to spend an afternoon with your family. It is a large museum established in 2003, fostering an environment of fun-filled learning, with a playground with innovative slides and swings within its compound. The models on display explain some very interesting natural phenomena like the behaviour of fishes according to climates and the way the oceans work, guaranteeing to keep both adults and children fascinated.
                                      </a></li>
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