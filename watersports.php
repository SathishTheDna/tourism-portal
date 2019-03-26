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
<title>Water Sports</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
							<div class="home_title">Water Sports in Andaman & Nicobar Island</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.php">Home</a></li>
									<li class="home_breadcrumb">Water Sports</li>
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
 
                                            <li align="left"><a>
																							Filters:&nbsp&nbsp
                                                <label><input type="radio" name="colorRadio" value="orange" checked> Show All </label>&nbsp&nbsp&nbsp&nbsp
                                                <label><input type="radio" name="colorRadio" value="red"> Easy</label>&nbsp&nbsp&nbsp&nbsp
                                                <label><input type="radio" name="colorRadio" value="green"> Moderate</label>&nbsp&nbsp&nbsp&nbsp
                                                <label><input type="radio" name="colorRadio" value="blue"> Difficult</label>&nbsp&nbsp&nbsp&nbsp
                                    
                                             
					  </a></li>
					   <div class="orange box">
								<input class="input-field" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names...." title="Type in a name">	
                            <li align="left"><a><b>1. Snorkelling</b></br> </br>
                                <img src="images/watersports/snorkelling.jpg"	height=500		width=70%></br></br>
                    
                                If you are in a doubt which sports to begin with then let’s make it easier for you with this thrilling activity in Andaman. Considered as one of the famous activity in Andaman, Snorkelling is a must try for you. Get a chance to snorkel with the coulourful marine life and discover the underwater marine life. 

                                The crystal clear shallow water makes it perfect for the snorkeling. Snorkel in the pristine and undamaged reefs, right off white sandy beaches. Spot many fish, a lobster, or even clams on the coral reef. For this thrilling activity you will be provided with all your snorkelling gears for this activity. There will be a guide to assist you while snorkelling and also show you the best spots.  And if you feel like having anything then snacks and meals are available at the shacks near the beach.
                                
                              </br>Location: This activity can be best enjoyed in the Elephant beach, North Bay and JollyBouy.
                                
                              </br>Difficulty Level: Moderate
                                
                            </br>Best seasons: The best season for snorkelling in Andaman is all year round.
      </a></li>
      <br>
                              <li  align="left"><a href="#">2. Underwater Sea Walking
                                    </br> </br>
                                        <img src="images/watersports/underwater.jpg"	height=500		width=70%></br></br>
                                        What could be a better way to discover the deepest secrets of the underwater then sea walking? Yes, you heard it right guys. With the serene beaches and the crystal clear water, Underwater sea walking is one of the favorite water sports in Andaman which is loved by the people around the globe. 

With a colorful marine life the Andaman offers some of the best sea walking experiences. Explore the underwater stories of the marines as you walk underwater. A protective cap with a straightforward visor is set on your head. An extraordinary mechanical assembly permits typical breathing under the water. Lifeguards help with taking you submerged and go with you all through the stroll to ensure your most extreme wellbeing. Feel as if you are walking on the moon as you witness the majestic underwater life. If you are on a Andaman honeymoon trip, then this activity should be added to your itinerary.

</br>Location: This activity is very famous in the Elephant beach in the Andaman.

</br>Difficulty Level: Easy/ Moderate

</br>Best Season: The best season for under water sea January to April as from May end until mid of September Sea walking will be closed
                            
            </a></li>
            <br>
                              
                              <li  align="left"><a href="#">3. Scuba Diving
                            </br> </br>
                            <img src="images/watersports/scubajpg.jpg"	height=500		width=70%></br></br>
                            There is another activity which is a must try in the Andamans. Scuba diving had become one of the most favourite activities in Andaman. As the Andamans are known for its crystal clear water with the serene beaches scuba diving is the perfect fit for the exploration of the marine life. Witness the marine life and discover the undiscovered underwater.  

                            Swim with the colourful fishes as dive deep into the sea. Enjoy the scuba diving experience for about 30 minutes and see sublime aquatic life. You will be also guided through your scuba diving activity. The white sand beach and the blue green water at the Elephant beach is enticing for almost every traveler and so one can see a lot of tourist here coming for scuba diving.
                            
                            <br>Location: This activity can be best enjoyed in the Elephant beach.
                            
                            <br>Difficulty Level: Moderate
                            
                            <br>Best Season: The best time for Scuba diving in Andaman is during the month of January to May
            <br>
            <li  align="left"><a href="#">4. Glass bottom Boating
                            </br> </br>
                            <img src="images/watersports/glassjpg.jpg"	height=500		width=70%></br></br>
                            While you are on your trip to Andaman this is another activity which you should definitely try. Most of you might have already heard about the one of a kind dolphin glass bottom boat in the Andamans. This is another most loved activity in the Andaman Islands which lets you explore the underwater marine life. And the best thing is that you will experience this everything like as if you are in the middle of the sea. Uncover the rich coral reef and the colourfull underwater marine life through this glass boat. 

                            There is a lot of boats in the Andamans which provides this exciting activity. The luxurious windows will take you through a journey of the underwater at a high speed. Make your 60 minutes the most memorable one as you enjoy this amazing glass boat ride in the Port Blair.
                            
                        </br>Location: Opposite Premier Industry, Dairy Farm Road, Port Blair - 744103
                            
                    </br>Difficulty Level: Easy
                            
                </br>Best Season: The best season for Glass Bottom ride in Andaman is during the month of January to May.
            <br>
            <li  align="left"><a href="#">5. Sea Plane Ride
                            </br> </br>
                            <img src="images/watersports/sea.jpg"	height=500		width=70%></br></br>
                            Now heading out for something different than the usual is something all the wanderers wish for. This time if you are visiting the Andamans then you will definitely have a story of your own. Andaman is the primary spot in India to start the Seaplanes rides.  This thrilling ride is something you can't miss; it is effectively one of the best adventure water sports in Andaman. These gorgeous seaplanes can carry 9 travelers at a time and ply between Port Blair and Havelock Island. The ride takes only 15 minutes which otherwise by ferry would take 2 hours. Try this exciting activity in the Andaman and cherish these moments for a lifetime.

                        </br>Location: This activity can be best enjoyed at Port Blair.
                            
                    </br>Difficulty Level: Easy
                            
                </br>Best Season: The best season to try this activity is all year round.
                            
            <br>
            <li  align="left"><a href="#">6. Mangrove Kayaking at Mayabunder
                            </br> </br>
                            <img src="images/watersports/mangrove.jpg"	height=500		width=70%></br></br>
                            While visiting the Andamans a lot of you might be planning for some thrilling adventures. Mangrove kayaking in Mayabunder , Andaman is another activity which is a must try for you. The lush green mangrove of the Andaman comprises of 1/5th of India’s total mangrove cover. 

                            Sea Kayaking is one of the most preferred activities by the people around the globe in the Andaman Islands. You will indulge in this activity for around 2.5 hours. Listen to the birds chirping and enjoy the serenity as you cruise through the greenery. Those of you who are looking for some peaceful environment this is the perfect place for you.  Most of all you can click some of the best shots with the amazing background.
                            
                        </br>Location: You can try this activity in Mayabunder, Andaman or Havelock Islands which are some of the best places to visit in Andaman.
                            
                    </br>Difficulty Level: Easy
                            
                </br>Best Season: The best season for Mangrove Kayaking is during the month of January to May.
            <br>
            <li  align="left"><a href="#">7. Parasailing
                            </br> </br>
                            <img src="images/watersports/parasailing.jpg"	height=500		width=70%></br></br>
                            Experience the fun and thrill as you parasail above the twinkling waters of Andaman Islands. Parasailing is one of the favorite water sports in the Andaman. With a mixture of water and airborne adventure, you will definitely fall in love with this sport

                            A designed canopy is used to drag you through the wind as you experience the whole place from a different perspective. This activity is basically done in the calm waters. So, this time don’t miss a chance to try parasailing and experience the fun. Soak in the amazing beauty of the region while you are flying up high in the air. You can enjoy this activity for 5-10 minutes. Nothing can be better than enjoying the view of the whole place from high above the sky. Don’t miss your chance to try this activity on your trip.
                            
                        </br>Location: Parasailing can be best enjoyed in the Rajiv Gandhi Water Sports Complex in the Andaman.
                            
                    </br>Difficulty Level: Moderate
                </br>Best seasons: The best season for parasailing is all year round.
            <br>
            <li  align="left"><a href="#">8. Jet Skiing
                            </br> </br>
                            <img src="images/watersports/jetski.jpg"	height=500		width=70%></br></br>
                            For those of you who are looking for something different than the usual Jet Skiing is the perfect sport for you. Feel the thrill as you break through the turquoise water in a criss-cross way. Get splashed right on your face as you ride in this amazing machine. Control your moves and the jet ski will give you the best experience of your life. 

                            You should be acquainted with the controls of the machine and soon you will wind up drifting over the Seawater. If you are bold enough to take this up alone then you don’t need any training or guidance. But there will be people with you while you try this amazing activity. After all, nothing can be a better experience than riding in the waters.
                            
                        </br>Location: This activity can be best enjoyed at Rajiv Gandhi Water Sports Complex.
                            
                    </br>Difficulty Level: Moderate
                            
                </br>Best Season: The best time for Jet Skiing in Andaman is during the month of February and March.
                            
                            Also, check here the best places visit in Andaman on honeymoon, as Andaman is one of the topmost places for honeymoon in the world.
            <br>
            <li  align="left"><a href="#">9. Speed Boating
                            </br> </br>
                            <img src="images/watersports/speedboating.jpg"	height=500		width=70%></br></br>
                            Looking for something for that adrenaline rush? Well then now is the time you try this one of a kind experience in the Andaman Islands. Speed boating in another water sports in Andaman which is a must try for you. Take a ride on the wild side.  

                            Get a chance to take those sharp twists and turn while you are thriving through the waters at a very high speed. And most of all you don’t have to be worried as you will be inside the speedboat as you get splashed by the cold waters. Soak in the amazing beauty of the region and stare at the distant sea as you take this ride. The feeling of happiness while you sit at the tip of the speed boat, is something you will never forget. Get ready for this adventure activity in the Andaman this time along with your loved ones.
                            
                        </br>Location: This activity can be best enjoyed at Rajiv Gandhi Water Sports Complex.
                            
                    </br>Difficulty Level: Moderate
                            
                </br>Best Season: The best time for Speed Boating in Andaman is during the month of January to May.
            <br>
            <li  align="left"><a href="#">10. Banana Boat Riding
                            </br> </br>
                            <img src="images/watersports/banana.jpg"	height=500		width=70%></br></br>
                            Guys hold on tight as you try this one of a kind banana boat riding in Andaman and make your adventure a lot more thrilling one. Out of all experience activities in Andaman, banana boat rides are considered as the best one. This is another adventure water sports activity in Andaman which is a must try for you. 

                            At a time six people can ride these boats that are shaped like a banana and are tied behind a speed boat to gain rush. The Banana shaped boats consist of a Tube. The boats are perfectly safe and you will be provided with life jackets. Also, there will be an instructor who will guide you through the end of your ride. Feel the thrill as you take those topsy turvy turns. Most of all you will be riding along with your friends which is a lot more exciting.
                            
                        </br>Location: This activity can be best enjoyed in the Havelock Island and Rajiv Gandhi Water sports complex.
                            
                    </br>Difficulty Level: Moderate
                            
                </br>Best Season: The best time to try Banana Boat rides id during the month of Jan, Feb, Mar, Apr, May, Oct, Nov, Dec
            <br>
            
            <li  align="left"><a href="#">11.Sport Fishing or Angling
            </br> </br>
            <img src="images/watersports/Angling.jpg"	height=50%		width=50%></br></br>
            Not all water sports oblige you to get soaked. Try the exciting angling and fishing which is among the adventurous waters sports in Andaman. Feel the thrill as you catch some large fish and witness the beauty of the vast sea at the same time. Generally, these outings start toward the evening, post lunch. Angling in the untouched reefs of the Andaman Islands is something which is really worthwhile as you also get to explore the unbound beauty of this region. 

These tropical islands of rainforest, mangroves and profound drop off, makes a perfect area for any type of saltwater angling. This is something unique yet special, you will be awestruck as you take that long rides to these islands while heading out for fishing.

<br>Location: Anarkali Colony, Shyam Nagar, Havelock, Andaman and Nicobar Islands 744211

<br>
            Difficulty Level: Easy

            <br>
            Best Season: The best time to try this amazing activity is during the month of February and March and November until Mid April.
<br>
         

<li  align="left"><a href="#">12. Dolphin watching
</br> </br>
<img src="images/watersports/dolphin.jpg"	height=500		width=70%></br></br>
Who does not love the dolphins? Dolphin watching is another favorite activity in the Andaman’s. Those of you who are planning to spot some dolphins in the Andaman then don’t miss a chance to visit the Lalaji Bay Beach on Long Island, Jolly Buoy located in the Mahatma Gandhi Marine National Park, Havelock Island. Watch the playful dolphin tease you as you watch them.  Discover the world of dolphin from a different angle. Discover the marine life through the transparent glass while you cruise through the amazing island. You will totally end up in a magical world of marine life. There are a lot of cruises from which you can choose from. Some of them are like Super saver cruise, Grand cruise, Sunset cruise etc.

<br>Location: One can go for dolphin spotting in North passage / Lalji bay or the Havelock islands.

<br>Difficulty Level: Easy

<br>Best Season: The best time to try this amazing activity is during the month of February and March and November until Mid April.
<br>

<li  align="left"><a href="#">13. Surfing
</br> </br>
<img src="images/watersports/surfing.jpg"	height=500		width=70%></br></br>
There are a lot of beaches which are best for surfing in the Andamans. Get a chance to surf at the most serene and subtle water at the Andamans.  This is another adventure water sports in Andaman which is slowly becoming famous among the people. For surfing the surfers use a 2-4 m long surfing board which depends on the wind which will help him to surf in the waters. Feel the thrill as you glide through the water and take those sharp. 

This is the best way to overcome your fears while you surf. Most of all you will be in some of the best location here in the Andamans which are very less explored by the people. Head out to try this exhilarating activity in the Andmans.

<br>Location: This activity can be best enjoyed at Little Andaman.

<br>Difficulty Level: Difficult

<br>Best Season: The best season to enjoy this amazing activity is during the month of mid February to April.

            


                      </div>
                      <div class="red box">
                            <li  align="left"><a href="#">2. Underwater Sea Walking
                                </br> </br>
                                    <img src="images/watersports/underwater.jpg"	height=500		width=70%></br></br>
                                    What could be a better way to discover the deepest secrets of the underwater then sea walking? Yes, you heard it right guys. With the serene beaches and the crystal clear water, Underwater sea walking is one of the favorite water sports in Andaman which is loved by the people around the globe. 

With a colorful marine life the Andaman offers some of the best sea walking experiences. Explore the underwater stories of the marines as you walk underwater. A protective cap with a straightforward visor is set on your head. An extraordinary mechanical assembly permits typical breathing under the water. Lifeguards help with taking you submerged and go with you all through the stroll to ensure your most extreme wellbeing. Feel as if you are walking on the moon as you witness the majestic underwater life. If you are on a Andaman honeymoon trip, then this activity should be added to your itinerary.

</br>Location: This activity is very famous in the Elephant beach in the Andaman.

</br>Difficulty Level: Easy/ Moderate

</br>Best Season: The best season for under water sea January to April as from May end until mid of September Sea walking will be closed
                        
        </a></li>
        <br>
                          
                          <li  align="left"><a href="#">3. Scuba Diving
                        </br> </br>
                        <img src="images/watersports/scubajpg.jpg"	height=500		width=70%></br></br>
                        There is another activity which is a must try in the Andamans. Scuba diving had become one of the most favourite activities in Andaman. As the Andamans are known for its crystal clear water with the serene beaches scuba diving is the perfect fit for the exploration of the marine life. Witness the marine life and discover the undiscovered underwater.  

                        Swim with the colourful fishes as dive deep into the sea. Enjoy the scuba diving experience for about 30 minutes and see sublime aquatic life. You will be also guided through your scuba diving activity. The white sand beach and the blue green water at the Elephant beach is enticing for almost every traveler and so one can see a lot of tourist here coming for scuba diving.
                        
                        <br>Location: This activity can be best enjoyed in the Elephant beach.
                        
                        <br>Difficulty Level: Moderate
                        
                        <br>Best Season: The best time for Scuba diving in Andaman is during the month of January to May
        <br>
        <li  align="left"><a href="#">4. Glass bottom Boating
                        </br> </br>
                        <img src="images/watersports/glassjpg.jpg"	height=500		width=70%></br></br>
                        While you are on your trip to Andaman this is another activity which you should definitely try. Most of you might have already heard about the one of a kind dolphin glass bottom boat in the Andamans. This is another most loved activity in the Andaman Islands which lets you explore the underwater marine life. And the best thing is that you will experience this everything like as if you are in the middle of the sea. Uncover the rich coral reef and the colourfull underwater marine life through this glass boat. 

                        There is a lot of boats in the Andamans which provides this exciting activity. The luxurious windows will take you through a journey of the underwater at a high speed. Make your 60 minutes the most memorable one as you enjoy this amazing glass boat ride in the Port Blair.
                        
                    </br>Location: Opposite Premier Industry, Dairy Farm Road, Port Blair - 744103
                        
                </br>Difficulty Level: Easy
                        
            </br>Best Season: The best season for Glass Bottom ride in Andaman is during the month of January to May.
        <br>
        <li  align="left"><a href="#">5. Sea Plane Ride
                        </br> </br>
                        <img src="images/watersports/sea.jpg"	height=500		width=70%></br></br>
                        Now heading out for something different than the usual is something all the wanderers wish for. This time if you are visiting the Andamans then you will definitely have a story of your own. Andaman is the primary spot in India to start the Seaplanes rides.  This thrilling ride is something you can't miss; it is effectively one of the best adventure water sports in Andaman. These gorgeous seaplanes can carry 9 travelers at a time and ply between Port Blair and Havelock Island. The ride takes only 15 minutes which otherwise by ferry would take 2 hours. Try this exciting activity in the Andaman and cherish these moments for a lifetime.

                    </br>Location: This activity can be best enjoyed at Port Blair.
                        
                </br>Difficulty Level: Easy
                        
            </br>Best Season: The best season to try this activity is all year round.
                        
        <br>
        <li  align="left"><a href="#">6. Mangrove Kayaking at Mayabunder
                        </br> </br>
                        <img src="images/watersports/mangrove.jpg"	height=500		width=70%></br></br>
                        While visiting the Andamans a lot of you might be planning for some thrilling adventures. Mangrove kayaking in Mayabunder , Andaman is another activity which is a must try for you. The lush green mangrove of the Andaman comprises of 1/5th of India’s total mangrove cover. 

                        Sea Kayaking is one of the most preferred activities by the people around the globe in the Andaman Islands. You will indulge in this activity for around 2.5 hours. Listen to the birds chirping and enjoy the serenity as you cruise through the greenery. Those of you who are looking for some peaceful environment this is the perfect place for you.  Most of all you can click some of the best shots with the amazing background.
                        
                    </br>Location: You can try this activity in Mayabunder, Andaman or Havelock Islands which are some of the best places to visit in Andaman.
                        
                </br>Difficulty Level: Easy
                        
            </br>Best Season: The best season for Mangrove Kayaking is during the month of January to May.
        <br>

        <li  align="left"><a href="#">11.Sport Fishing or Angling
            </br> </br>
            <img src="images/watersports/Angling.jpg"	height=50%		width=50%></br></br>
            Not all water sports oblige you to get soaked. Try the exciting angling and fishing which is among the adventurous waters sports in Andaman. Feel the thrill as you catch some large fish and witness the beauty of the vast sea at the same time. Generally, these outings start toward the evening, post lunch. Angling in the untouched reefs of the Andaman Islands is something which is really worthwhile as you also get to explore the unbound beauty of this region. 

These tropical islands of rainforest, mangroves and profound drop off, makes a perfect area for any type of saltwater angling. This is something unique yet special, you will be awestruck as you take that long rides to these islands while heading out for fishing.

<br>Location: Anarkali Colony, Shyam Nagar, Havelock, Andaman and Nicobar Islands 744211

<br>
            Difficulty Level: Easy

            <br>
            Best Season: The best time to try this amazing activity is during the month of February and March and November until Mid April.
<br>
         

<li  align="left"><a href="#">12. Dolphin watching
</br> </br>
<img src="images/watersports/dolphin.jpg"	height=500		width=70%></br></br>
Who does not love the dolphins? Dolphin watching is another favorite activity in the Andaman’s. Those of you who are planning to spot some dolphins in the Andaman then don’t miss a chance to visit the Lalaji Bay Beach on Long Island, Jolly Buoy located in the Mahatma Gandhi Marine National Park, Havelock Island. Watch the playful dolphin tease you as you watch them.  Discover the world of dolphin from a different angle. Discover the marine life through the transparent glass while you cruise through the amazing island. You will totally end up in a magical world of marine life. There are a lot of cruises from which you can choose from. Some of them are like Super saver cruise, Grand cruise, Sunset cruise etc.

<br>Location: One can go for dolphin spotting in North passage / Lalji bay or the Havelock islands.

<br>Difficulty Level: Easy

<br>Best Season: The best time to try this amazing activity is during the month of February and March and November until Mid April.
<br>




                      </div>
                      <div class="green box">
                            <li align="left"><a><b>1. Snorkelling</b></br> </br>
                                <img src="images/watersports/snorkelling.jpg"	height=500		width=70%></br></br>
                    
                                If you are in a doubt which sports to begin with then let’s make it easier for you with this thrilling activity in Andaman. Considered as one of the famous activity in Andaman, Snorkelling is a must try for you. Get a chance to snorkel with the coulourful marine life and discover the underwater marine life. 

                                The crystal clear shallow water makes it perfect for the snorkeling. Snorkel in the pristine and undamaged reefs, right off white sandy beaches. Spot many fish, a lobster, or even clams on the coral reef. For this thrilling activity you will be provided with all your snorkelling gears for this activity. There will be a guide to assist you while snorkelling and also show you the best spots.  And if you feel like having anything then snacks and meals are available at the shacks near the beach.
                                
                              </br>Location: This activity can be best enjoyed in the Elephant beach, North Bay and JollyBouy.
                                
                              </br>Difficulty Level: Moderate
                                
                            </br>Best seasons: The best season for snorkelling in Andaman is all year round.
      </a></li>
      <br>
      <li  align="left"><a href="#">2. Underwater Sea Walking
        </br> </br>
            <img src="images/watersports/underwater.jpg"	height=500		width=70%></br></br>
            What could be a better way to discover the deepest secrets of the underwater then sea walking? Yes, you heard it right guys. With the serene beaches and the crystal clear water, Underwater sea walking is one of the favorite water sports in Andaman which is loved by the people around the globe. 

With a colorful marine life the Andaman offers some of the best sea walking experiences. Explore the underwater stories of the marines as you walk underwater. A protective cap with a straightforward visor is set on your head. An extraordinary mechanical assembly permits typical breathing under the water. Lifeguards help with taking you submerged and go with you all through the stroll to ensure your most extreme wellbeing. Feel as if you are walking on the moon as you witness the majestic underwater life. If you are on a Andaman honeymoon trip, then this activity should be added to your itinerary.

</br>Location: This activity is very famous in the Elephant beach in the Andaman.

</br>Difficulty Level: Easy/ Moderate

</br>Best Season: The best season for under water sea January to April as from May end until mid of September Sea walking will be closed

</a></li>
<br>
<li  align="left"><a href="#">3. Scuba Diving
    </br> </br>
    <img src="images/watersports/scubajpg.jpg"	height=500		width=70%></br></br>
    There is another activity which is a must try in the Andamans. Scuba diving had become one of the most favourite activities in Andaman. As the Andamans are known for its crystal clear water with the serene beaches scuba diving is the perfect fit for the exploration of the marine life. Witness the marine life and discover the undiscovered underwater.  

    Swim with the colourful fishes as dive deep into the sea. Enjoy the scuba diving experience for about 30 minutes and see sublime aquatic life. You will be also guided through your scuba diving activity. The white sand beach and the blue green water at the Elephant beach is enticing for almost every traveler and so one can see a lot of tourist here coming for scuba diving.
    
    <br>Location: This activity can be best enjoyed in the Elephant beach.
    
    <br>Difficulty Level: Moderate
    
    <br>Best Season: The best time for Scuba diving in Andaman is during the month of January to May
<br>
<li  align="left"><a href="#">7. Parasailing
    </br> </br>
    <img src="images/watersports/parasailing.jpg"	height=500		width=70%></br></br>
    Experience the fun and thrill as you parasail above the twinkling waters of Andaman Islands. Parasailing is one of the favorite water sports in the Andaman. With a mixture of water and airborne adventure, you will definitely fall in love with this sport

    A designed canopy is used to drag you through the wind as you experience the whole place from a different perspective. This activity is basically done in the calm waters. So, this time don’t miss a chance to try parasailing and experience the fun. Soak in the amazing beauty of the region while you are flying up high in the air. You can enjoy this activity for 5-10 minutes. Nothing can be better than enjoying the view of the whole place from high above the sky. Don’t miss your chance to try this activity on your trip.
    
</br>Location: Parasailing can be best enjoyed in the Rajiv Gandhi Water Sports Complex in the Andaman.
    
</br>Difficulty Level: Moderate
</br>Best seasons: The best season for parasailing is all year round.
<br>
<li  align="left"><a href="#">8. Jet Skiing
    </br> </br>
    <img src="images/watersports/jetski.jpg"	height=500		width=70%></br></br>
    For those of you who are looking for something different than the usual Jet Skiing is the perfect sport for you. Feel the thrill as you break through the turquoise water in a criss-cross way. Get splashed right on your face as you ride in this amazing machine. Control your moves and the jet ski will give you the best experience of your life. 

    You should be acquainted with the controls of the machine and soon you will wind up drifting over the Seawater. If you are bold enough to take this up alone then you don’t need any training or guidance. But there will be people with you while you try this amazing activity. After all, nothing can be a better experience than riding in the waters.
    
</br>Location: This activity can be best enjoyed at Rajiv Gandhi Water Sports Complex.
    
</br>Difficulty Level: Moderate
    
</br>Best Season: The best time for Jet Skiing in Andaman is during the month of February and March.
    
    Also, check here the best places visit in Andaman on honeymoon, as Andaman is one of the topmost places for honeymoon in the world.
<br>
<li  align="left"><a href="#">9. Speed Boating
    </br> </br>
    <img src="images/watersports/speedboating.jpg"	height=500		width=70%></br></br>
    Looking for something for that adrenaline rush? Well then now is the time you try this one of a kind experience in the Andaman Islands. Speed boating in another water sports in Andaman which is a must try for you. Take a ride on the wild side.  

    Get a chance to take those sharp twists and turn while you are thriving through the waters at a very high speed. And most of all you don’t have to be worried as you will be inside the speedboat as you get splashed by the cold waters. Soak in the amazing beauty of the region and stare at the distant sea as you take this ride. The feeling of happiness while you sit at the tip of the speed boat, is something you will never forget. Get ready for this adventure activity in the Andaman this time along with your loved ones.
    
</br>Location: This activity can be best enjoyed at Rajiv Gandhi Water Sports Complex.
    
</br>Difficulty Level: Moderate
    
</br>Best Season: The best time for Speed Boating in Andaman is during the month of January to May.
<br>
<li  align="left"><a href="#">10. Banana Boat Riding
    </br> </br>
    <img src="images/watersports/banana.jpg"	height=500		width=70%></br></br>
    Guys hold on tight as you try this one of a kind banana boat riding in Andaman and make your adventure a lot more thrilling one. Out of all experience activities in Andaman, banana boat rides are considered as the best one. This is another adventure water sports activity in Andaman which is a must try for you. 

    At a time six people can ride these boats that are shaped like a banana and are tied behind a speed boat to gain rush. The Banana shaped boats consist of a Tube. The boats are perfectly safe and you will be provided with life jackets. Also, there will be an instructor who will guide you through the end of your ride. Feel the thrill as you take those topsy turvy turns. Most of all you will be riding along with your friends which is a lot more exciting.
    
</br>Location: This activity can be best enjoyed in the Havelock Island and Rajiv Gandhi Water sports complex.
    
</br>Difficulty Level: Moderate
    
</br>Best Season: The best time to try Banana Boat rides id during the month of Jan, Feb, Mar, Apr, May, Oct, Nov, Dec
<br>


                      </div>
                      <div class="blue box">
                            <li  align="left"><a href="#">13. Surfing
                                </br> </br>
                                <img src="images/watersports/surfing.jpg"	height=500		width=70%></br></br>
                                There are a lot of beaches which are best for surfing in the Andamans. Get a chance to surf at the most serene and subtle water at the Andamans.  This is another adventure water sports in Andaman which is slowly becoming famous among the people. For surfing the surfers use a 2-4 m long surfing board which depends on the wind which will help him to surf in the waters. Feel the thrill as you glide through the water and take those sharp. 
                                
                                This is the best way to overcome your fears while you surf. Most of all you will be in some of the best location here in the Andamans which are very less explored by the people. Head out to try this exhilarating activity in the Andmans.
                                
                                <br>Location: This activity can be best enjoyed at Little Andaman.
                                
                                <br>Difficulty Level: Difficult
                                
                                <br>Best Season: The best season to enjoy this amazing activity is during the month of mid February to April.
                                



                      </div>


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