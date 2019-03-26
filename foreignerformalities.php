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
<title>Foreigners Formalities</title>
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
	.box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
    .red{ }
    .green{ }
    .blue{  }
    .orange{ }
    label{ margin-right: 15px; }
	 </style>
	 
	 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	 <script type="text/javascript">
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>
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
								<li class="main_nav_item"><a href="index.html">Home</a></li>
								<li class="main_nav_item"><a href="about.html">About Us</a></li>
								
								<div class="dropdown">
									<li onclick="placeFunction()" class="dropbtn" >Places</li>
									<div id="placeDropdown" class="dropdown-content">
										<a href="northandaman.html">NORTH ANDAMAN</a>
										<a href="middleandaman.html">MIDDLE ANDAMAN</a>
										<a href="southandaman.html">SOUTH ANDAMAN</a>
										<a href="littleandaman.html">LITTLE ANDAMAN</a>
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

								<li class="main_nav_item"><a href="contact.html">Contact</a></li>
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
					<li class="menu_item menu_mm"><a href="index.html">Home</a></li>
					<li class="menu_item menu_mm"><a href="about.php">About us</a></li>
					<li class="menu_item menu_mm"><a href="offers.html">Offers</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
				</ul>

			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shopping.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title"><mark>Foreigners Formalities</mark></div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.html">Home</a></li>
									<li class="home_breadcrumb">Shopping Places</li>
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

                   <ul id="myUL">
									  		<li align="left"><a>Indian nationals needs no permit to visit the Andamans. However, visiting to tribal reserved areas in the Andaman and Nicobar Islands is prohibited.
											<br><br>
											<li align="left" style='font-size:25px;'><a><b>Entry Formalities for Foreigners</b></br> </br>
											
											<!--<img src="images/Lanterns.jpg"	height=500		width=70%></br></br>-->
											
											All foreign nationals required a permit (RAP - Restricted Area Permit) to visit the Andaman Nicobar Islands, which is easily available on arrival at Port Blair by flight or ship from the Immigration Authorities for 30 days subject to availability of valid visa. 
											This is extendable for another 15 days in certain cases with permission and the delegated authority to extend permission is the Superintendent of Police, FRO/CID, Port Blair.

The Restricted Area Permit can also be obtained from the Indian Missions overseas and also from the Foreigners Registration Offices at New Delhi, Mumbai, Chennai and Kolkata and from the Immigration Authorities at the Airport of New Delhi, Mumbai, Chennai and Kolkata.<br/><br/> 
											
											</a></li>
											<li align="left"><a><b>
											
											
    1. &nbsp;&nbsp;&nbsp;Foreigners will not require RAP for visiting the following 30 Islands in the Andaman and Nicobar Islands viz. (1) East Island (2) North Andaman (3) Smith Island (4) Curfew Island (5) Stewart Island (6) Landfall Island (7) Aves Island (8) Middle Andaman (9) Long Island (10) Strait Island (11) North Passage (12) Baratang (13) South Andaman (14) Swaraj Dweep (15) Shaheed Dweep (16) Flat Bay (17) North Sentinel Island (18) Little Andaman (19) Chowra (20) Tillang Chong Island (21) Teressa (22) Katchal (23)Nancowry (24) Kamorta (25) Pulomilo (26) Great Nicobar (27) Little Nicobar(28) Narcondum Island (29) Interview Island and (30) Viper Island (Day visit only).
    <br><br>2. &nbsp;&nbsp;&nbsp;All the foreigners arriving at Port Blair will have to show their passport at Immigration counters at Airport and Seaport for veriﬁcation.
    <br><br>3. &nbsp;&nbsp;&nbsp;Citizen of Afghanistan, China and Pakistan and foreign nationals having their origin in these countries would continue to require the Restricted Area Permit to visit Andaman & Nicobar Islands. In such cases, the Restricted Area Permit (RAP) would be granted only if the foreign tourists has obtained prior approval of the Ministry of Home Affairs. If any such national is found visiting these islands without the Restricted Area Permit, necessary penal action would be taken under the relevant provisions of the Foreigners Act, 1946.
    <br><br>4. &nbsp;&nbsp;&nbsp;For visiting Mayabunder and Diglipur, Citizens of Myanmar will continue to require Restricted Area Permit (RAP) which shall be issued only with the prior approval of the Ministry of Home Affairs.
    <br><br>5. &nbsp;&nbsp;&nbsp;In order to ensure preservation of nature and marine resources (including Marine parks and Environment) of the Andaman and Nicobar Islands without affecting tourism and business at large, the guidelines issued by the Ministry of Environment & Forest from time to time should be strictly adhered to.
    <br><br>6. &nbsp;&nbsp;&nbsp;Separate approvals of the competent authority would continue to be required for visiting Reserved Forests, Wildlife Sanctuaries and Tribal Reserves.
    <br><br>7. &nbsp;&nbsp;&nbsp;The visiting parties would invariably be accompanied by a guide nominated by the Chief Wild Life Warden of A&N Islands and should follow the code of conduct in the Park areas.
    <br><br>8. &nbsp;&nbsp;&nbsp;Visitors should pay an entry fee. In case of violation of National Marine Park Code suitable ﬁne may be imposed on the offender by the A&N Islands Administration.
    <br><br>9. &nbsp;&nbsp;&nbsp;Visit to the Marine Park area is to be restricted to small boats or glass bottom boats. No oil leakage is to be allowed in the area
    <br><br>10. &nbsp;&nbsp;&nbsp;In case of foreigners staying in hotels/ lodges/ guest houses, hostels, sarais, inns etc. in the islands, there is a mandatory requirement of submission of details of such foreigners in Form-C by the hotel keepers to the FRO, Port Blair, mentioning the date of arrival, departure and next place of visit. The Form-C may be submitted in ofﬂine mode to FRO whenever the Hotel keeper ﬁnds it difﬁcult to submit in online mode. Hotels situated outside port Blair not having net connectivity should submit the form—C with concerned SHO’s within 24 hours and SHO’s should furnished the information to FRO office immediately.
    <br><br>11. &nbsp;&nbsp;&nbsp;In order to access areas housing defence, paramilitary and other sensitive establishments in these islands, specific permissions from the competent authority shall be required.
    <br><br>12. &nbsp;&nbsp;&nbsp;In case a foreigner stay is more than 180 days, he or she should registered with FRO Port Blair within 14 days.
    <br><br>13. &nbsp;&nbsp;&nbsp;No foreigners shall remain in these areas after the expiry of travel documents / permit.
    <br><br>14. &nbsp;&nbsp;&nbsp;Scuba Diving and underwater Photography is to be permitted in identified area, but no removal of Coral Fish or any other item from the Marine Park is to be permitted.
    <br><br>15. &nbsp;&nbsp;&nbsp;Possession / sale / use / purchase / transportation of contraband drugs is liable for prosecution and shall result in imprisonment for up to 20 years.
    <br><br>16. &nbsp;&nbsp;&nbsp;Camping on sea beaches and sleeping in the jungle is strictly prohibited. No person will remain on the sea beach and jungle after sunset.
    <br><br>17. &nbsp;&nbsp;&nbsp;Do not stay in unauthorized buildings/ premises.
    <br><br>18. &nbsp;&nbsp;&nbsp;Do not drive any vehicle without valid International driving license. Wearing of helmet is compulsory for two wheeler riders and pillion rider.
    <br><br>19. &nbsp;&nbsp;&nbsp;Obscenity in public places is liable for prosecution. Also respect the culture and customs of the people of the area where you visit.
    <br><br>20. &nbsp;&nbsp;&nbsp;No photograph of aboriginal tribes (Jarawas) while traveling by bus/cars through Andaman Trunk Road is allowed. It is a legal offence.
    <br><br>21. &nbsp;&nbsp;&nbsp;Do not engage any un-authorized mechanized dinghy/boat/vessel to cross sea/ creeks etc.
    <br><br>22. &nbsp;&nbsp;&nbsp;Obtain Immigration related information from Immigration Branch at Port Blair main ofﬁce, located in the ground ﬂoor of the ofﬁce of Supdt. of Police (South Andaman District)/ Foreigners Registration Officer. Phone No. 03192-237793 and 234472 extensions 358 & 374.
    <br><br>23. &nbsp;&nbsp;&nbsp;In any emergency, please contact the concerned police station of the area. The telephone numbers are: Police Control Room (for Port Blair Area) (100), PS Swaraj Dweep (282405), PS Shaheed Dweep (282602), PS Baratang (279503), PS Kadamtala (267005), OP Long Island (278611) PS Rangat (274239), OP Betapur (270111), PS Billiground (270523), PS Mayabunder (273203) PS Diglipur (272223), PS Kalighat (278149), PS Hut Bay (284208),PS Katchal (293464),PS Teressa (294039), PS Campbell Bay (263464), PS Nancowry (263464).

											
											</b></a></li>
											
					</div>
											
											
											
											
									<!--<img src="images/trainmap.png"	height=500		width=100%></br></br></br>-->
											
              
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