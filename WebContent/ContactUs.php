<html> 
   <head> 
   <link href="Style/Home.css" rel="stylesheet">
     <title>Contact Us | Find Us on Map.</title> 
     <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
     <script type="text/javascript"> 
   var directionDisplay; 
   var map; 
    
   function initialize() { 
    directionsDisplay = new google.maps.DirectionsRenderer(); 
     var bangalore = new google.maps.LatLng(12.9716 , 77.5946); 
    var myOptions = { 
      zoom:12, 
      mapTypeId: google.maps.MapTypeId.ROADMAP, 
       center: bangalore
     } 
      
     map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 
     directionsDisplay.setMap(map); 
   } 
   var directionsService = new google.maps.DirectionsService(); 
    
       function calcRoute() { 
      var start = document.getElementById("start").value; 
      var end = document.getElementById("end").value; 
      var distanceInput = document.getElementById("distance");
      var request = { 
       origin:start, 
       destination:end, 
        travelMode: google.maps.DirectionsTravelMode.DRIVING 
     }; 
      
     directionsService.route(request, function(response, status) { 
        if (status == google.maps.DirectionsStatus.OK) { 
         directionsDisplay.setDirections(response); 
         distanceInput.value = response.routes[0].legs[0].distance.value / 1000;
        } 
      }); 
    } 

</script> 
     
     <style type="text/css"> 
       #map_canvas { 
       margin:450px 50px;
         height: 100%; 
       } 
       
    footer{
	position:absolute;
	top:1900px;
	left:0;
	width:100%;
	height:490px;
	background:#333;
}

footer h4,h5{
color:white;
	font-weight:normal;
	margin:50px 50px;
	font-size:15px;
}

footer ul{
	margin:50px 50px;
}
footer li{
	margin:20px;
	font-size:12px;
	color:#ccc;
}
footer hr{
	margin:0px 50px;
	width:92%;
	border:none;
	height:1px;
	background:#999;
}

footer table{
	position:absolute;
	top:100px;
	left:900px;
	list-style:none;
}
table tr td{
	font-size:13px;
	padding:20px;
	color:#fff;
}
       
     </style> 
  </head> 
 <body onLoad="initialize()" bgcolor="#ccc">
    
    <div class="header1">



		<a href="#" style="border:none;">BOOKING STATUS </a> <a href="#">CANCELLATION </a> <a
			href="Enquiry.php">ENQUERY </a>
	</div>
	<div class="header2">


		<a href="Faq.php">FAQ </a> <a href="ContactUs.php" style="padding: 16px 12px 16px 12px; border-bottom: 1px solid cyan">CONTACT US </a> <a href="Tariffs.php">TARIFFS
		</a> <a href="Gallery.php">GALLERY</a> <a href="Service.php">SERVICES </a> <a href="BookCab.php">BOOK
			FOR RIDE</a> <a href="HomePage.html">HOME
		</a>
	</div>
    
    <div class="locPanel">
    <h1>CONTACT US</h1><hr>
    

   <img src="Images\mail.png" width="68dp" height="68dp"><p>mail@NationalCab.com</p>
   <img src="Images\loc.png" width="68dp" height="68dp"><p>	1stFloor,ESI Disp.Bldg, peenya, Bangalore – 560 058 3rd phase, Peenya, Bangalore-58</p>

    </div>
    
    <div class="enquiry">
     <h1>ENQUIRY</h1><hr>
    
    <fieldset>
    <input type="text" placeholder="YOUR NAME">
    <input type="email" placeholder="YOUR EMAIL ID">
    <input type="text" placeholder="SUBJECT">
    <textarea rows="10" cols="50" placeholder="YOUR MESSAGE" ></textarea>
    <input type="submit" value="SEND" id="send">
    
    </fieldset>
    
    </div>
    
     <div id="map_canvas"></div> 
     
     <footer>
<h4>WE ARE HERE TO OFFER</h4>

<ul>
<li>24 / 7 Cab Service To Any Where Around The City</li>
<li>Sending Booking Alert By SMS</li>
<li>GPS Tracking System For Location Guessing</li>
<li>Instant Printed Bills In Car On Departure</li>
<li>Magazine And News Papers For Reading On Ride</li>
<li>Credit And Debit Card Payment Available</li>

</ul>
<h4 style="position:absolute;top:0px;right:300px;">ABOUT US.</h4>
<table>
<tr>
<td><img src="Images\addr.png" width="32dp" height="32dp"></td>
<td>233 Shoreditch High Street Shoreditch,London</td>
</tr>
<tr>
<td><img src="Images\cont.png" width="32dp" height="32dp"></td>
<td>Customer Support :<br>+ 124 45 76 678</td>
</tr>
<tr>
<td><img src="Images\email.png" width="32dp" height="32dp"></td>
<td>Email :<br>
mail@NationalCab.com</td>
</tr>
</table>
<hr>
<h5>Copyright &#169 2010 - 2016. All Rights Reserved</h5>
</footer>
   </body> 
 </html> 
