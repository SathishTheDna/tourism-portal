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
<title>Shopping Places</title>
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
							<div class="home_title"><mark>Shopping Places</mark></div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.php">Home</a></li>
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
									  	<li align="left"><a><b>Shopping in Andaman & Nicobar</b></br><br/>
									  		<!--<li align="left"><a><b>Road Ways</b></br> </br>-->
										
										Andaman and Nicobar Islands are very famous for the exotic shopping experience in its various beach markets and quaint local outlets tucked inside
										by-lanes. Street and souvenir shopping must be at the top of your list – at the main market of the city and at the beach markets. Shop from a range of the most 
										exquisite curios made from natural and locally-available raw materials. Delight in the variety of cane handicrafts, wooden decorative items and jewellery made from sea shells and pearls.
										Aberdeen bazaar is the busiest market of the city. Your Andaman holiday won't be complete without visiting this main shopping centre. The lanes are buzzing with the best shopping – everything 
										from household items, exquisite showpieces to beach wear and accessories. <br/><br/>
									<!--<img src="images/table1.png"	height=500		width=100%></br></br></br>
									<img src="images/table2.png"	height=500		width=100%></br></br>-->
											
              </a></li>
              <br>
									  
                    
                  </ul>

                   <ul id="myUL">
									  		<li align="left"><a>
											
											<label><input type="radio" name="colorRadio" value="orange"> Show All </label>&nbsp&nbsp&nbsp&nbsp
                                            <label><input type="radio" name="colorRadio" value="red">Moderate Budget</label>&nbsp&nbsp&nbsp&nbsp
                                            <label><input type="radio" name="colorRadio" value="green">Value for Money</label>&nbsp&nbsp&nbsp&nbsp
                                            <label><input type="radio" name="colorRadio" value="blue">Economy</label>&nbsp&nbsp&nbsp&nbsp
											
											</a></li>
											
											<div class="orange box">
											<li align="left"><a><b>1. MG Road</b></br> </br>
											
											<img src="images/Lanterns.jpg"	height=500		width=70%></br></br>
											
											Andaman has established itself as one of the foremost tourist spots in India. Thousands travel from far and near to enjoy tranquil moments amidst the snow-white beaches and 
											beautiful coastlines of Andaman. Numerous shopping streets have come up to cater to the basic needs of the travelers and locals. MG Road in Port Blair is one such destination
											that is filled with numerous shopping possibilities. A perfect testimony to Port Blair’s shopping and commercial opportunities, this street is full of shops. Products ranging 
											from exotic curios to household items are found here. This street also boasts of numerous hotels and classy restaurants. The idyllic setting of the shops and eateries make this 
											a favorite shopping ground for tourists.<br/><br/> 
											
											
											<li align="left"><a><b>2. Queen Sea Shell Craft</b></br> </br>
											
											<img src="images/queenseashell5.jpg"	height=550		width=70%></br></br>
											
											Queen Sea Shell Craft is located at Supply Lane in Aberdeen Bazaar. Listed among the best handicraft stores in Port Blair, anything and everything that you buy here will be made 
											from sea shells. You will not be able to help but fall in love with this beautiful store. Most of the customers can be seen purchasing accessories made from shells, bamboo cane craft, 
											and coconut shell lamps. The availability of bags, bangles, and jewelry, makes this place a hot favorite amongst the travelers and locals. This store is often counted among the best 
											stores dealing in sea shell handicrafts. Their sea shell enamel has an amazing aura that entices people into buying them. These souvenirs are the perfect objects to decorate your home. 
											You can also take them back as gift items. The humble and professional staff will provide you with adequate information regarding every product that they sell.<br/><br/>
											
											<li align="left"><a><b>3. Government Emporia</b></br> </br>
											
											<img src="images/emporia.png"	height=500		width=70%></br></br>
											
											The beautiful beaches of Andaman entice thousands of tourists yearly. A plethora of activities await your attention in the beautiful streets of this famous holiday destination in India. 
											Not only travelers, but locals too can avail the beautiful products sold in the various stores of Andaman. Government Emporia is one of the most famous names across Andaman that has 
											established its legacy, owing to the great quality of products that it has been dealing in for years. A handful of striking handicrafts made out of seashells and wood adorn the shelves 
											of Government Emporia. These beautiful products have been designed by skilled artisans of Andaman. Absolutely fascinating in structure and shape, these items are drool worthy. Items bought 
											here are assured of the highest quality. The products are relatively high-priced, but you can bargain with the shopkeeper to bring down the prices to your liking. <br/><br/>
											
											<li align="left"><a><b>4. Shopping Singapore</b></br> </br>
											
											<img src="images/singa.jpg"	height=500		width=70%></br></br>
											
											Shopping in Andaman will undoubtedly be one of the finest experiences that you can have, during your visit to this beautiful island. The hub of shopping in Andaman is located in Port Blair, 
											the capital city. A plethora of Shopping Hubs are available in the busy streets of Port Blair that deems this as a popular shopping destination. Shopping Singapore is one of the most famous 
											shopping centers in Port Blair. This interesting shop deals in a variety of products. Try out the electronic products, interesting curios, and other stationery items for a happy shopping experience. 
											Open from 8:00 a.m to 7:00 p.m., you can also shop for different kinds of cameras. In case you leave your camera back home on your trip to Andaman, this is the best place to buy one, to capture 
											beautiful pictures of the scenic beaches and tranquil sea.<br/><br/> 
											

											<li align="left"><a><b>5. Aberdeen Bazaar</b></br> </br>
											
											<img src="images/shopping1.jpg"	height=500		width=70%></br></br>
											
											The sun-drenched beaches of Andaman are the best places to laze around during the sunny afternoons. Being one of the most popular tourist destination across the country, Andaman is filled with several 
											shopping destinations. Aberdeen Bazaar in Port Blair is the most populous and famous commercial hub of Andaman. Locals and tourists flock the market during holidays and weekends to shop in this shopping 
											extravaganza, at Port Blair. A plethora of shops fill up the streets that offer a wide variety of products for shopaholics. From apparels to household items, everything can be bought here. Look out for 
											the coconut shell lamps, bamboo cane craft and jewelry made out of shells, for the ultimate shopping experience. The colorful sarongs, carved wooden furniture, and palm mats are the additional products 
											that you can take back home, to provide it with a glamorous touch. <br/><br/>
											
											<li align="left"><a><b>6. Sagarika Emporium</b></br> </br>
											
											<img src="images/sagarika.jpg"	height=500		width=70%></br></br>
											
											Sagarika Emporium in Andaman is the best place to engage in an endless spree of shopping. Very easily accessible by road, you can make your way to this emporium by any mean of transportation. 
											A prime location in Port Blair, this is a must visit for all. Situated at the center of the city, this store deals in a wide variety of arts and handicraft that have been developed by self-employed locals. 
											Products are available at a discounted price that will enable you to save a ton of money. Useful and innovative articles such as t-shirts, pepper and salt shakers made from shells, handbags, pearl jewelry, 
											tea cups, bangles and lampshades made out of coconut shells are the perfect gifts to take back home. You can also store these artifacts as souvenirs of your visit to this beautiful island. <br/><br/>

											<li align="left"><a><b>7. Haveloc Island</b></br> </br>
											
											<img src="images/havelock.jpg"	height=500		width=70%></br></br>
											
											Havelock Island in one of the beautiful places in Andaman. Snow-white beaches with coast crammed beach huts make this a backpacker’s paradise. With their well-deserved reputation of being a favorite tourist 
											destination, Havelock Island will provide you with a pleasing time during your stay here. The scenic beaches will give you blissful moments amidst the tranquility of the sea. While here, you will be able to 
											shop for the basic amenities in Market No. 3. The shops in this market are open till afternoon only. Jewelry made out of wood and shell are the best picks from these stores. In case, you forget your diving or 
											swimming gear, then head out to the dive shops and buy something to save the day. <br/><br/>
											
											<li align="left"><a><b>8. Anthropological Museum Co-operative Store</b></br> </br>
											
											<img src="images/anthropo.png"	height=500		width=70%></br></br>
											
											Andaman is filled with numerous delights that captivate everybody. Plentiful shopping opportunities are available for the ardent shopaholics. Your trip to this beautiful island will be incomplete without engaging 
											in a shopping spree. If you have an affinity towards shopping, then head to Anthropological Museum Co-operative Store for a unique shopping experience. It is located within the Anthropological Museum that houses 
											artifacts which date back to the aboriginal tribes of the ancient Andaman Archipelago. The Co-operative Store is exclusively run by women and sells various CDs that describe the history and lifestyle of the tribal 
											communities. Also, look out for the various tribal ornaments, artifacts and pictures of these beautiful islands. Your shopping experience in this society will be incomparable with any other stores across Andaman.<br/><br/>
											
											</div>
											
											
											<div class="red box">
											
											
											<li align="left"><a><b>3. Government Emporia</b></br> </br>
											
											<img src="images/emporia.png"	height=500		width=70%></br></br>
											
											The beautiful beaches of Andaman entice thousands of tourists yearly. A plethora of activities await your attention in the beautiful streets of this famous holiday destination in India. 
											Not only travelers, but locals too can avail the beautiful products sold in the various stores of Andaman. Government Emporia is one of the most famous names across Andaman that has 
											established its legacy, owing to the great quality of products that it has been dealing in for years. A handful of striking handicrafts made out of seashells and wood adorn the shelves 
											of Government Emporia. These beautiful products have been designed by skilled artisans of Andaman. Absolutely fascinating in structure and shape, these items are drool worthy. Items bought 
											here are assured of the highest quality. The products are relatively high-priced, but you can bargain with the shopkeeper to bring down the prices to your liking. <br/><br/>
											
											<li align="left"><a><b>4. Shopping Singapore</b></br> </br>
											
											<img src="images/singa.jpg"	height=500		width=70%></br></br>
											
											Shopping in Andaman will undoubtedly be one of the finest experiences that you can have, during your visit to this beautiful island. The hub of shopping in Andaman is located in Port Blair, 
											the capital city. A plethora of Shopping Hubs are available in the busy streets of Port Blair that deems this as a popular shopping destination. Shopping Singapore is one of the most famous 
											shopping centers in Port Blair. This interesting shop deals in a variety of products. Try out the electronic products, interesting curios, and other stationery items for a happy shopping experience. 
											Open from 8:00 a.m to 7:00 p.m., you can also shop for different kinds of cameras. In case you leave your camera back home on your trip to Andaman, this is the best place to buy one, to capture 
											beautiful pictures of the scenic beaches and tranquil sea.<br/><br/> 
											
											<li align="left"><a><b>7. Haveloc Island</b></br> </br>
											
											<img src="images/havelock.jpg"	height=500		width=70%></br></br>
											
											Havelock Island in one of the beautiful places in Andaman. Snow-white beaches with coast crammed beach huts make this a backpacker’s paradise. With their well-deserved reputation of being a favorite tourist 
											destination, Havelock Island will provide you with a pleasing time during your stay here. The scenic beaches will give you blissful moments amidst the tranquility of the sea. While here, you will be able to 
											shop for the basic amenities in Market No. 3. The shops in this market are open till afternoon only. Jewelry made out of wood and shell are the best picks from these stores. In case, you forget your diving or 
											swimming gear, then head out to the dive shops and buy something to save the day. <br/><br/>
											
											<li align="left"><a><b>8. Anthropological Museum Co-operative Store</b></br> </br>
											
											<img src="images/anthropo.png"	height=500		width=70%></br></br>
											
											Andaman is filled with numerous delights that captivate everybody. Plentiful shopping opportunities are available for the ardent shopaholics. Your trip to this beautiful island will be incomplete without engaging 
											in a shopping spree. If you have an affinity towards shopping, then head to Anthropological Museum Co-operative Store for a unique shopping experience. It is located within the Anthropological Museum that houses 
											artifacts which date back to the aboriginal tribes of the ancient Andaman Archipelago. The Co-operative Store is exclusively run by women and sells various CDs that describe the history and lifestyle of the tribal 
											communities. Also, look out for the various tribal ornaments, artifacts and pictures of these beautiful islands. Your shopping experience in this society will be incomparable with any other stores across Andaman.<br/><br/>
											
											
											</div>
											<div class="green box">
											
											<li align="left"><a><b>1. MG Road</b></br> </br>
											
											<img src="images/Lanterns.jpg"	height=500		width=70%></br></br>
											
											Andaman has established itself as one of the foremost tourist spots in India. Thousands travel from far and near to enjoy tranquil moments amidst the snow-white beaches and 
											beautiful coastlines of Andaman. Numerous shopping streets have come up to cater to the basic needs of the travelers and locals. MG Road in Port Blair is one such destination
											that is filled with numerous shopping possibilities. A perfect testimony to Port Blair’s shopping and commercial opportunities, this street is full of shops. Products ranging 
											from exotic curios to household items are found here. This street also boasts of numerous hotels and classy restaurants. The idyllic setting of the shops and eateries make this 
											a favorite shopping ground for tourists.<br/><br/> 
											
											<li align="left"><a><b>5. Aberdeen Bazaar</b></br> </br>
											
											<img src="images/shopping1.jpg"	height=500		width=70%></br></br>
											
											The sun-drenched beaches of Andaman are the best places to laze around during the sunny afternoons. Being one of the most popular tourist destination across the country, Andaman is filled with several 
											shopping destinations. Aberdeen Bazaar in Port Blair is the most populous and famous commercial hub of Andaman. Locals and tourists flock the market during holidays and weekends to shop in this shopping 
											extravaganza, at Port Blair. A plethora of shops fill up the streets that offer a wide variety of products for shopaholics. From apparels to household items, everything can be bought here. Look out for 
											the coconut shell lamps, bamboo cane craft and jewelry made out of shells, for the ultimate shopping experience. The colorful sarongs, carved wooden furniture, and palm mats are the additional products 
											that you can take back home, to provide it with a glamorous touch. <br/><br/>
											
											
											</div>
											<div class="blue box">
											
											<li align="left"><a><b>2. Queen Sea Shell Craft</b></br> </br>
											
											<img src="images/queenseashell5.jpg"	height=550		width=70%></br></br>
											
											Queen Sea Shell Craft is located at Supply Lane in Aberdeen Bazaar. Listed among the best handicraft stores in Port Blair, anything and everything that you buy here will be made 
											from sea shells. You will not be able to help but fall in love with this beautiful store. Most of the customers can be seen purchasing accessories made from shells, bamboo cane craft, 
											and coconut shell lamps. The availability of bags, bangles, and jewelry, makes this place a hot favorite amongst the travelers and locals. This store is often counted among the best 
											stores dealing in sea shell handicrafts. Their sea shell enamel has an amazing aura that entices people into buying them. These souvenirs are the perfect objects to decorate your home. 
											You can also take them back as gift items. The humble and professional staff will provide you with adequate information regarding every product that they sell.<br/><br/>
											
											<li align="left"><a><b>6. Sagarika Emporium</b></br> </br>
											
											<img src="images/sagarika.jpg"	height=500		width=70%></br></br>
											
											Sagarika Emporium in Andaman is the best place to engage in an endless spree of shopping. Very easily accessible by road, you can make your way to this emporium by any mean of transportation. 
											A prime location in Port Blair, this is a must visit for all. Situated at the center of the city, this store deals in a wide variety of arts and handicraft that have been developed by self-employed locals. 
											Products are available at a discounted price that will enable you to save a ton of money. Useful and innovative articles such as t-shirts, pepper and salt shakers made from shells, handbags, pearl jewelry, 
											tea cups, bangles and lampshades made out of coconut shells are the perfect gifts to take back home. You can also store these artifacts as souvenirs of your visit to this beautiful island. <br/><br/>

											
											</div>
											
									<!--<img src="images/trainmap.png"	height=500		width=100%></br></br></br>-->
											
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