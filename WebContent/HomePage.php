<!DOCTYPE>
<html>
<head>
<style type="text/css">
.l {
	background: linear-gradient(45deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)),
		url("Images/map.jpg");
}

.contact div li:nth-child(1) a {
	padding: 50px;
	background: url("Images/fb.png") no-repeat left center;
}

.contact div li:nth-child(2) a {
	padding: 40px;
	background: url("Images/twit.png") no-repeat left center;
}

.contact div li:nth-child(3) a {
	padding: 40px;
	background: url("Images/g+.png") no-repeat left center;
}

.contact div li:nth-child(4) a {
	padding: 40px;
	background: url("Images/you.png") no-repeat left center;
}
.contact div li:nth-child(5) a {
	padding: 40px;
	background: url("Images/insta.png") no-repeat left center;
}
</style>


<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/ajSlider.min.js"></script>


<title>Home | Sign Up To get a Ride</title>
<link href="Style/Home.css" rel="stylesheet">
<style>
body {
	margin: 0;
	color: rgb(255, 255, 255);
}
</style>

<script type="text/javascript">
	$(document).ready(function() {
		$('#ajSlider').ajSlider(3000, {
			"width" : "100%",//width of slider
			"height" : "100%",//height of slider
			"textPosition" : "30%",//position of text from top
			"textSize" : "30px"//font size of the text
		});
	});

</script>

</head>

<body>
	
	
	<div class="logo"><img src="Images/logo.png" width="253dp" height="100dp"></div>
	
	
	<a href="#" class="back-to-top">TOP</a>
	
	<div class="header1">



		<a href="#" style="border:none;">BOOKING STATUS </a> <a href="CancelBooking.php">CANCELLATION </a> <a
			href="Enquiry.php">ENQUERY </a>
	</div>
	<div class="header2">


		<a href="Faq.php">FAQ </a> <a href="ContactUs.php">CONTACT US </a> <a href="Tariffs.php">TARIFFS
		</a> <a href="Gallery.php">GALLERY</a> <a href="Service.php">SERVICES </a> <a href="BookCab.php">BOOK
			FOR RIDE</a> <a href="#"
			style="padding: 16px 12px 16px 12px; border-bottom: 1px solid cyan">HOME
		</a>
	</div>
	<div id="ajSlider">
		<img src="Images\cover3.jpg" /> <img src="Images\cover1.jpg" /> <img
			src="Images\cover2.jpg" /> <img src="Images\cover2.jpg" /> <img
			src="Images\cover1.jpg" /> <a>EXPERIENCED DRIVERS</a> <a>FEEL THE
			COMFORT</a> <a>TRUST AND SAFETY</a> <a>+1000 HAPPY CUSTOMERS</a> <a>148
			CITIES COVERED</a>

		<div id="left">
			<a>a</a> <img src="images/left.png" />
		</div>

		<div id="right">
			<img src="images/right.png" />
		</div>
	</div>

	<p style="position:absolute;top:150px;left:400px;width:300px;font-family:segoe ui light;font-size:40px;">Let's start a new relationship with us.</p> 
	<button class="register" onClick="location.href='Registration.php';">CREATE ACCOUNT</button>
	<div class="logPanel">

		<span>Login Credentials </span> <br>
		<br>
		<br>
		<br>
        <form action="Homelogin_Script.php" method="post">
		<label>Email</label><input type="email" name="usrid" required> <br>
		<label>Password</label><input type="PASSWORD" name="pwd" required> <input
			type="submit" name="submit" value="Login" id="login"><br><br> <a
			href="#">Forgot password?</a>
	</form>
    </div>

	<div class="service">
		<h1>WHAT WE DO</h1>
		<hr>

		<ul>
			<li><img src="Images\homePickup.jpg" width="400dp"
				height="300dp" alt="Home Pickup"><a href="#"
				style="position: absolute; left: 50px; top: 148px; background: rgba(80, 80, 80, 0.5); padding: 140px 139px;">HOME
					PICKUP</a></li>
			<li><img src="Images\Airport.jpeg" width="400dp" height="300dp"
				alt="Airport Pickup"><a href="#" style="position: absolute; left: 473px; top: 148px; background: rgba(77, 75, 109, 0.5); padding: 140px 85px;">AIRPORT TRANSPORTATION</a></li>
			<li><img src="Images\company.jpg" width="400dp" height="300dp"
				alt="Company Contract"><a href="#" style="position: absolute; left: 898px; top: 148px; background: rgba(80, 144, 124, 0.5); padding: 140px 102px;">COMPANY CONTRACT</a></li>

		</ul>

	</div>

<div class="gallery">
<h1>OUR GALLERY</h1><hr>
<img src="Images\cadilac.jpg" width="550dp" height="450dp" style="position:absolute;right:50px;top:150px;">
<img src="Images\audi.jpg" width="390dp" height="300dp" style="position:absolute;left:50px;top:150px;">
<img src="Images\bmw.jpg" width="300dp" height="300dp" style="position:absolute;left:445px;top:150px;">
<img src="Images\bmw7.jpg" width="250dp" height="150dp" style="position:absolute;left:50px;top:455px;">
<img src="Images\car1.jpg" width="230dp" height="150dp" style="position:absolute;left:305px;top:455px;">
<img src="Images\car2.jpg" width="180dp" height="150dp" style="position:absolute;left:540px;top:455px;">
</div>

<div class="achievement">
<h1>REASONS TO CHOOSE US</h1><hr>
<img src="Images\m5.jpg" width="1348dp" height="500dp"><div style="position:absolute;top:139px;left:0;width:100%;height:500px;background:rgba(0,0,0,0.9)"></div>


<label style="position:absolute;left:300px;bottom:200px;font-size:25px;color:#5695e0;" id="drives">100</label>
​<label style="position:absolute;left:550px;bottom:200px;font-size:25px;color:#5695e0;" id="cust">100</label>
<label style="position:absolute;left:800px;bottom:200px;font-size:25px;color:#5695e0;" id="driver">100</label>
<label style="position:absolute;left:1050px;bottom:200px;font-size:25px;color:#5695e0;" id="city">100</label>

<ul>
<li>Successful Drives</li>
<li>Happy Customers</li>
<li>Talented Drivers</li>
<li>Cities Covered</li>

</ul>
</div>

<div class="contact">
<h1>LET'S STAY IN TOUCH</h1><hr>
	<div>
	<p>
				Find our location<br> on google map.
			</p>
			<button onClick="location.href='ContactUs.php';">VIEW ON MAP</button>
			
	<ul class="map">
			<li class="l"><span class="s"></span></li>
		</ul>
		
		<h4 style="	position:absolute;top:580px;left:100px;">STAY UPDATED WITH US.</h4><input type="email" placeholder="Email Address.">
		
		<h4 style="	position:absolute;top:580px;right:500px;">FOLLOW US.</h4>
		<ul id="link">
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
		</ul>
	</div>
</div>

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
mail@FastCab.com</td>
</tr>
</table>
<hr>
<h5>Copyright &#169 2010 - 2016. All Rights Reserved</h5>
</footer>


	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push([ '_setAccount', 'UA-36251023-1' ]);
		_gaq.push([ '_setDomainName', 'jqueryscript.net' ]);
		_gaq.push([ '_trackPageview' ]);

		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl'
					: 'http://www')
					+ '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
		
		
		$(document).ready(function(){
			   var amount1=1200;
			   var counter1 = 1000;
			   var interval1 = setInterval(function(){
			      $('#drives').text(counter1++);
			      if (counter1 > amount1){
			        clearInterval(interval1);
			      }
			   },5); // the value 100 is the time delay between increments to the counter
			   
			   var amount2=1000;
			   var counter2 = 800;
			   var interval2 = setInterval(function(){
			      $('#cust').text(counter2++);
			      if (counter2 > amount2){
			        clearInterval(interval2);
			      }
			   },5);
			   
			   var amount4=378;
			   var counter4 = 100;
			   var interval4 = setInterval(function(){
			      $('#driver').text(counter4++);
			      if (counter4 > amount4){
			        clearInterval(interval4);
			      }
			   },5);
			   
			   var amount3=145;
			   var counter3 = 0;
			   var interval3 = setInterval(function(){
			      $('#city').text(counter3++);
			      if (counter3 > amount3){
			        clearInterval(interval3);
			      }
			   },5);
			   
			   
			});
		
		$(window).scroll(function() {

			if ($(this).scrollTop() > 250) {
				$('.back-to-top').fadeIn();

			} else {
				$('.back-to-top').fadeOut();
			}
		});
		$('.back-to-top').click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop : 0
			}, 1000);
			return false;
		});
		

	</script>
	
<script src="js/jQuery.scrollSpeed.js"></script>
<script>
$(function() {  

    jQuery.scrollSpeed(200, 1000);

});
</script>
</body>
</html>
