<html> 
   <head> 
   <link href="Style/Home.css" rel="stylesheet">
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
     <title>Contact Us | Find Us on Map.</title> 
     <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/> 


     <script type="text/javascript"> 

    
   function initialize() { 
	   {
		   var mapCanvas = document.getElementById("map_canvas");
		   var mapOptions = {
		     center: new google.maps.LatLng(51.5, -0.2),
		     zoom: 10
		   }
		   var map = new google.maps.Map(mapCanvas, mapOptions);
		 }

</script> 

<script src="https://maps.googleapis.com/maps/api/js?callback=initialize"></script>


     
     <style type="text/css"> 
       #map_canvas { 
       margin:850px 0px;
       margin-bottom:50px;
       width:100%;
       height: 100%; 
       } 
       
    footer{
	position:absolute;
	top:1450px;
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
footer table tr td{
	font-size:13px;
	padding:20px;
	color:#fff;
}
       
     </style> 
  </head> 
 <body bgcolor="#ccc">
    
    <div class="header1">



		<a href="#" style="border:none;">BOOKING STATUS </a> <a href="#">CANCELLATION </a> <a
			href="Enquiry.php">ENQUERY </a>
	</div>
	<div class="header2">


		<a href="Faq.php">FAQ </a> <a href="ContactUs.php" style="padding: 16px 12px 16px 12px; border-bottom: 1px solid cyan">CONTACT US </a> <a href="Tariffs.php">TARIFFS
		</a> <a href="Gallery.php">GALLERY</a> <a href="Service.php">SERVICES </a> <a href="BookCab.php">BOOK
			FOR RIDE</a> <a href="HomePage.php">HOME
		</a>
	</div>
    
    <div class="locPanel">
    <h1>CONTACT US</h1><hr>
    

  <table id="contact">
  
  <tr>
  
  	<td rowspan="2"><i class="fa fa-map-marker" aria-hidden="true" STYLE="padding: 15px 18px"></i></td>
  	<td>Address</td>
  	
  </tr>	
  	
  <tr><td><span>1stFloor,ESI Disp.Bldg, peenya, Bangalore</span></td></tr>
  
  <tr>
  
  	<td rowspan="2"><i class="fa fa-envelope" aria-hidden="true"></i></td>	
	<td>Phone</td>
	</tr>
	
  	<tr><td><span>+1 809 876 6543</span></td></tr>
  
   <tr>
   	<td rowspan="2"><i class="fa fa-phone" aria-hidden="true" STYLE="padding: 15px 16px"></i></td>
  	<td>Email</td>
  </tr>
  	<tr><td><span>mail@FastCab.com</span></td></tr>
  
 
    </table>
    
    </div>
    
    <div class="enquiry">
     <h2>Get in touch with us.</h2>
    
    <fieldset>
	    <input type="text" placeholder="YOUR NAME" size="45">
	    <input type="text" placeholder="YOUR CONTACT NO" size="45">
	    <input type="email" placeholder="YOUR EMAIL ID" size="45">
	    <input type="text" placeholder="SUBJECT" size="45">
	    <textarea rows="10" cols="98" placeholder="YOUR MESSAGE" ></textarea>
	    <button type="submit"  id="send"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; Send Message</button>
    
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
