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
<title>Places to Stay</title>
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
							<div class="home_title">Hotels in Andaman & Nicobar Island Island</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.php">Home</a></li>
									<li class="home_breadcrumb">Places to Stay</li>
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
					<br>
						<li align='left'><a><b>1. Hotel Guru International</b></br> </br>
                                        <img src="images/gurujpg.jpg"	height=500		width=100%></br></br>
                            
                                        OVERVIEW:<br/>
                                        Conveniently located, Hotel Guru International offers comfortable accommodation to its guests. Situated at a walking distance from Anthropological Museum, Hotel Guru International offers travel assistance to its guests.
                                        
                                        Arranged over 4 floors, the hotel in Port Blair has a total of 18 well-appointed rooms. Rooms include conveniences like air conditioning, flat-screen television, study table, wake-up service and attached bathroom with hot/cold water.
                                        
                                        Hotel Guru International offers services like room service, 24-hour power backup, laundry, dry cleaning, ironing, doctor on call and 24-hour security. Airport/railway station transfers, car rental, bike rental, cycle rental, scooter rental, wheelchair and valet parking are few of the facilities available within the premises.
                                        
                                        Places of interest and travel hubs in Port Blair include Aberdeen Bazaar Bus Station (0.45 km), Samudrika Marine Museum (2 km), Marina Park and Aquarium (2 km) and Murugan Temple (1 km). The closest airport to this property is Veer Savarkar International Airport (3 km).
                                        
                                        What people love the most about this property is its great location and hospitality. Book now and enjoy world class services at Hotel Guru International. 
                            </a></li>
                            <br>
                                      <li align='left'><a href="#"><b>2. Hotel Islander Inn</b>
                                            </br> </br>
                                                <img src="images/islander.jpg"	height=500		width=100%></br></br>
                                                OVERVIEW:<br/>
                                                "Hotel Islander Inn offers Wi-Fi to its guests. This budget in Port Blair is at a walking distance from the Samudrika Marine Museum (1 km). This budget has 22 well-appointed rooms, spread across 2 floors. Air-condition, wardrobe,telephone, television desk and attached bathroom are some of the conveniences offered in the room.
                                                
                                                Hotel Islander Inn provides various facilities that include Travel desk, front desk and room service. Doctor on call, laundry, power back-up and parking are also offered for the convenience of the guests. The budget in Port Blair is accessible via travel hubs such as Phoenix bay Jetty (1 km) and Veer Savarkar International Airport (3 km).
                                                
                                                Some of the tourist attractions are Brihadees Temple (2 km) and Maratha Palace (2 km). What people love the most about this property is its great location and classy ambiance. Book now and enjoy world-class services at Hotel Islander Inn. " 
                                    
                                      </a></li>
                                    <br>
                                      
                                      <li align='left'><a href="#"><b>3. Hotel Coral Cove </b>       </br> </br>
                                    <img src="images/coral.jpg"	height=500		width=100%></br></br>
                                    OVERVIEW:</br>
                                    Get pampered in luxury within the finest ambience in Port Blair Located centrally at Minnie Bay in Port Blair, the 4-star Coral Cove is a luxury hotel that treats its guests with refined hospitality. It is located about 1.5 km from Veer Savarkar Airport, 2 km from Cutbert Bay Beach, and 3 km from Downtown Area.
                                    
                                    The hotel is situated in an elite neighbourhood, and houses a modern business centre. Coral Cove is equipped with a state-of-the-art fitness centre. It also has a business centre. Free Wi-Fi is available for the convenience of guests.
                                    
                                    Other facilities include travel desk, front desk, doctor-on-call, airport transfer, and concierge. The property houses 42 elegantly decorated rooms. The air-conditioned rooms are equipped with TV with satellite channels, minibar, tea-coffee maker, iron board and box, and Wi-Fi.
                                    
                                    Guests can enjoy in-room services like newspaper, laundry, room service, dry-cleaning, and wake-up call. Coral Cove houses Red Square, which is a renowned restaurant for its authentic world cuisine. It has a contemporary and relaxed ambience.
                                    
                                    There are separate corners for tandoor stations and charcoal grills at the restaurant. Nearby landmarks include Cutbert Bay Beach (2 km), Corbyns Cove Beach (3 km), Dilthaman Lake (3.5 km), Gandhi National Park (3.5 km), Light House Cinema (3.5 km), and Naval Museum (3.5 km).
                                    
                                    The Vir Savarkar Airport is at a distance of 1.5 km from the property. The Central Bus Stand is 5 km away, and the Junglighat Jetty is around 3 km from the property. Port Blair is not connected via rail connectivity with other cities of the country.
                                    
                                    What people love the most about this property is its great location and classy ambience. Book now and enjoy world class services at Coral Cove 
                                    <br>  
                                    <li align='left'><a href="#"><b>4. Sea Princess Beach Resort</b>
                                    </br> </br>
                                    <img src="images/sea.jpg"	height=500		width=100%></br></br>
                                    OVERVIEW:</br>
                                    Enjoy a luxurious experience in a beautiful setting! Sea Princess Beach Resort located in Wandoor village offers the best of luxury with sun soaked beaches around. The Wandoor beach is 100 metres from the resort.
                                    
                                    Featuring lush green manicured gardens, this 4-star resort with its beach view offers a great holiday. The resort houses an in-house swimming pool, and has space for business meets and conferences both indoors and outdoors.
                                    
                                    The business centre is equipped with latest gadgets, equipment to ensure successful business meets, and conferences. There are facilities for snorkeling, scuba diving and sea bathing at the adjoining beach. Free Wi-Fi and doctor-on-call is available at the resort for guests.
                                    
                                    Sea Princess Beach Resort has an interactive beach side show-kitchen that serves a combination of various traditional cuisines, along with secret recipes and chef special delicacies. The dcor of the restaurant adds to the picturesque surroundings of the beach.
                                    
                                    Sea Princess Beach Resort houses room options ranging from Beachfront Suites, Andaman Cottages Suites, Standard Rooms and Deluxe Rooms. All rooms are air-conditioned and come with seating area and a private balcony.
                                    
                                    The common amenities include satellite linked TV, tea coffee maker, and 24-hour hot and cold water. Room service and laundry services are also available. The resort is around 22 km from the Veer Savarkar International Airport Port Blair, and is not reachable by rail.
                                    
                                    The Wandoor beach is 100 metres from the resort while the Wandoor national park is at a distance of 1 km from Sea Princess Beach Resort. Mount Harriet National Park is at a distance e of 19 km from the resort.
                                    
                                    What makes this property a first choice among travellers is its exceptional setting and excellent services. Book Sea Princess Beach Resort now and revel in the best! 
                                    <br>  
                                    <li align='left'><a href="#"><b>5. Hotel Megapode Nest</b>
                                    </br> </br>
                                    <img src="images/megapode.jpg"	height=500		width=100%></br></br>
                                    OVERVIEW:</br>
                            Stay at the best 3-star hotel in Port Blair and enjoy its exceptional facilities Hotel Megapode Nest is a 3-star hotel conveniently positioned at Haddo in Port Blair. This property is located around 500 metres from Haddo Mini Zoo and 1.5 km from Aberdeen Jetty.
                            
                            Haddo Mini Zoo is situated 500 metres from the property. Naval Museum is about 700 metres away, Planet Scuba India is 1 km away, Aberdeen Bazaar is at a distance of 1.5 km from the property, and The Clock Tower is 1.5 km away from here.
                            
                            The Veer Savarkar International Airport is about 4 km from the property. The Aberdeen Jetty is around 1.5 km from the property. Port Blair is not connected by rail. The hotel has a sophisticated fitness centre and a spa.
                            
                            It also is equipped with a business centre. Free Wi-Fi is available for the convenience of guests. Other facilities include a travel desk and doctor-on-call service. Guests can choose from among 33 sea view rooms at the property in 4 types: Semi Deluxe Room, Deluxe Room, Bamboo Cottage, and Nicobari Cottage.
                            
                            The air-conditioned rooms have all basic amenities like TV with satellite channels, tea/coffee maker, minibar, electronic safe, and Wi-Fi. Guests at the hotel can also avail in-room services like newspaper, room service, and laundry.
                            
                            Hotel Megapode Nest has an in-house restaurant popular for its authentic Indian and multi cuisine fares. Evenings you can cruise aboard on Afloat - Andaman s only floating restaurant, listening live music. Amazing amenities at great prices is what makes Hotel Megapode Nest a popular accommodation choice for guests.
                            
                            Book now and enjoy a comfortable stay at Hotel Megapode Nest 
                            <br>
          <li align='left'><a><b>6. Pearl Park Beach Resort</b></br> </br>
            <img src="images/pearl.jpg"	height=500		width=100%></br></br>

            OVERVIEW:</br>
            Stay at the best 3-star hotel in Neil and enjoy its exceptional facilities Situated strategically at Lakshmanpur Beach No. 1 on Neil Island, the 3-star Pearl Park Beach Resort is a beach property that treats its patrons to refined hospitality.

It is situated around 10 metres from Lakshmanpur Beach and 2 km from Bharatpur Beach. The resort is built at a location which has a unique triangular sea-view. The resort has a sophisticated gymnasium, mini children s park, sunset point, and snorkelling equipment.

Convenient beach access as it takes just a 20-second walk from the resort to reach the beach. Free Wi-Fi is available for the convenience of guests. Other facilities include a travel desk, doctor-on-call facility, transportation (airport pickup, ferry/cruise tickets).

The property has 50 rooms. Guests can choose from 4 types of rooms: Standard Cottage Non Ac, Standard Cottage Ac, Deluxe Cottage, and Super Deluxe Cottage. The rooms here come with TV with satellite channels, tea/coffee maker, minibar, electronic safe, and Wi-Fi.

Guests can enjoy in-room services like newspaper, room service, and laundry. Pearl Park Beach Resort has an in-house restaurant popular for its authentic Indian, multi-cuisine and sea food delicacies. The Veer Savarkar International Airport is at a distance of 40 km from the property.

The Neil Jetty is around 3 km from the property. Lakshmanpur Beach is located 100 metres from the property. Bharatpur Beach is 2 km from the property, while Neil Jetty is 3 km away from here. Book now and enjoy a comfortable stay at Pearl Park Beach Resort Amazing amenities at great prices is what makes Pearl Park Beach Resort a popular accommodation choice for guests. 
       
</a></li>
</br>    
<li align='left'><a><b>7. Hotel Sea Shell</b></br> </br>
    <img src="images/seashell.jpg"	height=500		width=100%></br></br>

    OVERVIEW:</br>
    Enjoy a luxurious experience in a beautiful setting! Located on Laxmanpur Beach Number 1, in the beautiful Neil Island, Sea Shell is a luxury property that is only 750 metres from the Lakshmanpur Beach. This rustic and cottage style property has a private beach area and also offers barbecue facilities.

The rooms are cosy and have all modern amenities. Activities like diving, snorkelling and fishing are offered too. The Sunset Point at Lakshmanpur beach is 750 metres away. Natural Bridge and Sitapur Beach are 3 and 6km away.

The Veer Savarkar International Airport in Port Blair is about 38km away. The aerial distance from Port Blair to Chennai is about 1367km. You can choose from Chalet, Andaman Cottage and Neil Lagoon rooms in this resort.

All rooms are complete with air conditioning, flat screen TV, satellite connection, mini fridge, kettle, and telephone. The bathrooms offer shower cubicle and 24 hours hot water. You can also expect room service.

The in-house multi-cuisine restaurant serves South Indian, North Indian, Chinese and other international cuisines all through the day. The restaurant offers a great view of the beach and the garden. The resort includes a private beach area, landscaped gardens, barbecue facilities and provision for foot-bath.

You can also expect travel desk, currency exchange, free parking, and airport/sightseeing shuttles. Free Wi-Fi is available in all public areas. The resort arranges a variety of water sports and activities like fishing and diving for guests.

What makes this property a first choice among travellers is its exceptional setting and excellent services. Book Sea Shell now and revel in the best! 

</a></li>
</br>
<li align='left'><a><b>8. Silver Sand Beach Resort</b></br> </br>
    <img src="images/silver.jpg"	height=500		width=100%></br></br>

    OVERVIEW:</br>
    Providing you the best of comforts in a charming ambience. Book SilverSand Beach Resort is situated at 36 km North East of Port Blair along the famous Neil Kendra on the Neil island. This 3-star resort is fenced with white sand and swaying palm trees making it a perfect destination holiday.

Silver Sand Beach Resort has an outdoor swimming pool, a fitness centre and pampering spa. The resort offers a business centre to catch up on any emergency work. Silver Sand Beach Resort has a front desk, travel desk, doctor on call, dry cleaning, free parking and free Wi-Fi for the convenience of guests.

SilverSand Beach Resort has 39 luxurious air-conditioned Cottages, Lagoons and Suites engulfed by the beauty of this serene Island and its rich turquoise blue sea. The natural wooden interiors with its modern facilities give a perfect luxury stay.

Main amenities in the rooms are a queen size bed, flat-screen TV, intercom, refrigerator, cosy couch and wardrobe. Also, hair dryers, dental/shaving kits, hand towels, room service, coffee/tea maker, complimentary mineral water and 24-hour hot/cold water are provided.

The rooms lead to a private beach. Zola, a multi-cuisine restaurant offers a wide range of food along with the traditional Adaman styled savoury for your taste buds. Kamasutra Bar offers finest imported liquor and a variety of cocktails to sip on at the beach.

Main tourist attractions near the resort are Bharatpur Beach (1 km), Neil Island Jetty (1 km), Lakshmanpur Beach No.2 (2 km), Sunset at Lakshmanpur Beach (2 km), Sitapur Beach (4 km) and Sunrise viewpoint at Sitapur Beach (4km).

The nearest airport is Veer Savarkar International Airport (63 km) and Green Ocean Cruise Port is 61 km away from the hotel. The hotel is located 67 km away from central Port Blair. What people love the most about this property is its welcoming ambience and great location.

Book now and enjoy the warm hospitality of SilverSand Beach Resort. 
    
</a></li>
<br>
<li align='left'><a><b>9. Holiday Inn</b></br> </br>
                                        <img src="images/holiday.jpg"	height=500		width=100%></br></br>
                            
                                        OVERVIEW:</br>
                                        Holiday Inn is located at a distance of 0.5 km from Govind Nagar Beach and 57 km from Mohanpura Central Bus Stand. This hotel in Port Blair has an in-house multi-cuisine restaurant within the premises.It comprises of spacious and well-kept room with well-equipped amenities like clean linen, bottled drinking water, air-conditioner, makeup mirror and separate sitting area.
                                        
                                        It has an attached bathroom equipped with toiletries.This hotel in Port Blair offers front desk, room service, laundry and medical assistance. A garden is also available within the premisesHoliday Inn is approximately 60 km away from the Veer Savarkar International Airport.
                                        
                                        Some of the tourist attractions are Andaman Cellular Jail (57 km) and Jolly Buoy Island (81 km). 
                            </a></li>
                            <br>
                                      <li align='left'><a href="#"><b>10. Pristine Beach Resort</b>
                                            </br> </br>
                                                <img src="images/pristine.jpg"	height=500		width=100%></br></br>
                                                OVERVIEW:</br>
                                                Being a beachfront property, Pristine Beach Resort is set overlooking the rice paddy fields and the greenery around, along with the sea waves. The property in Diglipur is roughly at a distance of 17 km from Diglipur Bus Station and Murugan Temple.Guests have an option to choose from the 21 rooms that are spacious and well-maintained.
                                                
                                                A host of convenience available in the rooms include television, comfortable bed, side table, ceiling fan, attached bathroom and hot water supply. There are air-conditioned rooms available too.Apart from good accommodation in Diglipur, the Pristine Beach Resort offers breakfast, sightseeing and room service to its guests.
                                                
                                                Guests can relish a selection of delicacies at the in-house restaurant.The property is accessible from the Veer Savarkar International Airport, which is 314 km away. Few of the must visit tourist spots to drop by are Diglipur Church (17 km) and Lord Ayappaa Temple (94 km). 
                                    
                                      </a></li>
                                      <br>
                                      <li align='left'><a href="#"><b>11. Turtle Resort</b>
                                    </br> </br>
                                    <img src="images/turtle.jpg"	height=500		width=100%></br></br>
                                    OVERVIEW:</br>
                                    The Turtle Resort in Diglipuris situated at a distance of 12 km from the Keralapuram Bus Stop. The occupants are provided with 24-hour front desks assistance.Accommodation is provided in 11 spacious rooms across two floors.
                                    
                                    Some in-room amenities include a wardrobe, telephone and bed. The rooms also have separate sitting areas and attached bathrooms with a supply of hot/cold water.This property features a landscaped garden and restaurant.
                                    
                                    It also provides 24-hour room service along with laundry and medical assistance. The hotel also provides backup generators for uninterrupted electricity. Guests staying at Turtle Resortcan also visit the Sree Mahadeva Temple (12 km) and Diglipur Church (18 km).
                                    
                                    The resort in Diglipur is 17 km from the Keralapuram Bus Stop and 315 km from the Veer Savarkar International Airport. 
                                     <br>
																		 <li align='left'><a><b>12. Symphony Palms Beach Resort</b></br> </br>
            <img src="images/symphony.jpg"	height=500		width=100%></br></br>

            OVERVIEW:</br>
            Symphony Palms Beach Resort is located at a distance of 3 km from the Havelock Ferry Ghat and 2 km from the Vijay Nagar Beach. This resort in Havelock has a restaurant within the premises.It comprises of 94 spacious and well-kept rooms spread across 1 floor.

            Each room has amenities like television, wardrobe, makeup mirror, balcony, air-conditioner and bottled drinking water. It also has an attached bathroom with hot and cold running water facility.Symphony Palms Beach Resort also offers front desk facility along with services like laundry, round the clock security and room service.
            
            This property has coffee shop and travel counter facility.This resort in Havelock is 60 km away from the Veer Savarkar International Airport. Some of the tourist attractions are Radhanagar Beach (7 km), Kala Pathar Beach (3 km), Elephant Beach (7 km) and Blue Corals Dive (0.4 km). 
</a></li>
<br>
<li align='left'><a><b>13. Havelock Island Beach Resort</b></br> </br>
    <img src="images/havelock.jpg"	height=500		width=100%></br></br>

    OVERVIEW:</br>
    Placed at a distance of 0.5 km from Govind Nagar Beach, Havelock Island Beach Resort is set amidst the greener zone of Havelock overlooking the beach and the tropical greenery.

The property in Havelock is accessible from the Havelock Ferry Ghat, which is 3 km away.

The in-house multi-cuisine restaurant serves a selection of delicacies to its patrons.Guests have the option to choose from its eight well-kept rooms that are fitted with required conveniences.

Each room includes king-size bed, drinking water, makeup mirror, hairdryer, tea kettle, closet, toiletries, air-conditioner, towels, toiletries, separate seating area, clothes rack, sit-outs, reading lamp, attached bathroom and hot/cold water supply.

Havelock Island Beach Resort provides housekeeping, medical aid, and round the clock room service to its visitors.

The property has swimming pool, coffee shop, and 24-hour front desk available too.

Furthermore, the accommodation in Havelock arranges candle light dinner, scuba diving, snorkeling, and other water sports for the visitors on request.Veer Savarkar International Airport (60 km) is one of the travel hubs help guests reach the hotel.

Visitors can explore tourist spots like Radhanagar Beach (10 km) and Kalapather Beach (6 km). 
</a></li>
<br>
<li align='left'><a><b>14. Coral Reef Resort</b></br> </br>
    <img src="images/coral1.jpg"	height=500		width=100%></br></br>

    OVERVIEW:</br>
    Enjoy a luxurious experience in a beautiful setting! Situated strategically at Beach No.5, in Havelock, the Coral Reef Resort is a 5-star property that treats its guests to impeccable hospitality. It is located around 2 km from Vijay Nagar Beach, 4 km from Kalapathar Beach, and 4 km from Havelock Jetty.

    Coral Reef Resort is a premium property with ample recreational facilities. The resort provides facilities like an inviting swimming pool, spa, fitness centre, and games zone. For business meetings and other events, there is a conference hall.
    
    The resort provides Free Wi-Fi connectivity to its guests. It also offers other facilities like a travel desk, doctor-on-call facility, concierge, free bicycle ride, and a pool table. The property features 24 rooms with spacious decor.
    
    Guests have a choice of 3 types of rooms: Coral Suites, Coral Premium, and Coral Deluxe. The rooms are equipped with amenities like a TV with satellite channels, tea/coffee maker, minibar, safety locker, and Wi-Fi.
    
    Guests can enjoy in-room services like newspaper, laundry, and room service. The in-house Black Lemon Restaurant treats diners to authentic Indian and international cuisine. The Roasted Beans Caf is a caf with an informal ambience.
    
    Vijay Nagar Beach is located 2 km from the property. Kalapathar Beach is 4 km from the property, and Havelock Jetty is also 4 km away. Other landmarks include Radhanagar Beach (11 km). The Veer Savarkar International Airport is at a distance of 62 km from the property.
    
    The Havelock Jetty is at a distance of 3 km from the property. What makes this property a first choice among travellers is its exceptional setting and excellent services. Book Coral Reef Resort now and revel in the best! 
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