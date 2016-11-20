<?php
session_start();
include "./connect_db.inc";
$connection = db_connect();

if ( ! $connection ) 
{
	print( "cannot connect to database" );
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
body{
	margin:0;
	
}

.progressBarIcon{
	margin:-10px 70px;
}
.progressBarIcon li{
padding:12px 70px 11px 70px;
margin-left:0px;
height:50px;
display:inline;

}

.progressBar li img{

}
#map {
	height: 100%;
}
</style>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="jquery-2.1.4.js"></script>
<script src="js/locationpicker.jquery.min.js"></script>
<script type="text/javascript"
	src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>


<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Book Online Cab | Choose Service,Choose Car,Create Account,Payment Mode</title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css"
	rel="stylesheet" type="text/css">
<link href="Style/Home.css" rel="stylesheet">
<link rel="stylesheet" href="Style/calendar.css">
<link href="Style/timedropper.css" rel="stylesheet" type="text/css">
<style>

.loader{

position:fixed;
top:00px;
left:0px;
width:100%;
height:100%;
background:rgba(10,10,10,0.7);
z-index:5;

}

.loader img{
margin:100px 480px;

}
#dt{
	background: white;
	padding:2px 5px;
	width:270px;
}
</style>
</head>
<body bgcolor="#ccc">

<!-- loading animation-->
<div class="loader"><img class="icon" src="Images\bolt.gif" width="400dp" height="300dp">
</div>

<main id="site" role="main"></main>


	<div class="header1">



		<a href="#" style="border:none;">BOOKING STATUS </a> <a href="CancelBooking.php">CANCELLATION </a> <a
			href="Enquiry.php">ENQUERY </a>
	</div>
	<div class="header2">


		<a href="Faq.php">FAQ </a> <a href="ContactUs.php">CONTACT US </a> <a href="Tariffs.php">TARIFFS
		</a> <a href="Gallery.php">GALLERY</a> <a href="Service.php">SERVICES </a> <a href="BookCab.php" style="padding: 16px 12px 16px 12px; border-bottom: 1px solid cyan">BOOK
			FOR RIDE</a> <a href="HomePage.php">HOME </a>
	</div>

<div class="bookPanel">
<h1>BOOK A CAB</h1><hr>



<div class="servicePanel">
<div class="serviceType1">
<figure style="overflow:hidden"><img src="Images\homePickup.jpg" width="300dp" height="200dp"><figcaption>HOME PICKUP<br><br><span>&#8377 20/KM</span></figcaption><button id="home">Book this Service</button></figure>
</div>

<div class="serviceType2">
<figure><img src="Images\Airport.jpeg" width="300dp" height="200dp"><figcaption>AIRPORT TRANSPORTATION<br><br><span>&#8377 40/KM</span></figcaption><button id="airport">Book this Service</button></figure>
</div>

<div class="serviceType3">
<figure><img src="Images\company.jpg" width="300dp" height="200dp"><figcaption>COMPANY CONTRACT<br><br><span>&#8377 50/KM</span></figcaption><button id="company">Book this Service</button></figure>
</div>
</div>



<form action="login_script.php" method="post">
<div class="form1">
<div class="flp">
<div style="position:absolute;left:0;top:50px;">
	<i class="fa fa-dot-circle-o" style="margin-left:100px;background: none;"></i><input type="text" id="src" name="src" placeholder="Enter Pickup Location" onchange="getCoordinates()"><i class="fa fa-search"></i>

</div>
	<div id="us3" style="width: 0px; height: 0px;"></div>
<div style="position:absolute;left:00px;top:150px;">
	<i class="fa fa-map-marker" style="margin-left:105px;background: none;"></i><input type="text" id="dest" name="dest" placeholder="Enter Drop Location" onchange="getCoordinates()"><i class="fa fa-search"></i>
	</div>

	<div id="us4" style="width: 0px; height: 0px;"></div>

<ul id="estimate">
<li><i class="fa fa-inr"></i><input type="text" style="width:380px;" id="fare" disabled></li>
<li><i class="fa fa-angle-double-up"></i><input type="text" id ="dist" disabled></li>
<li><i class="fa fa-clock-o"></i><input type="text" id="eta" disabled></li>

</ul>


	<p><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Date & Time</p>

<div id="demo" style="margin-left: 100px; margin-top: 425px">

				<input type="text" id="dt" name="pickup_date" placeholder="Pickup Date">
				<div id="dd"></div>
</div>

	<div data-select-box
		 style="position: absolute; left: 615px; top: 430px;">
		<select id="myList" name="pickup_time" required="required">
			<option value="">5:00 AM</option>
			<option value="">5:15 AM</option>
			<option value="">5:30 AM</option>
			<option value="">5:45 AM</option>

			<option value="">6:00 AM</option>
			<option value="">6:15 AM</option>
			<option value="">6:30 AM</option>
			<option value="">6:45 AM</option>

			<option value="">7:00 AM</option>
			<option value="">7:15 AM</option>
			<option value="">7:30 AM</option>
			<option value="">7:45 AM</option>

			<option value="">8:00 AM</option>
			<option value="">8:15 AM</option>
			<option value="">8:30 AM</option>
			<option value="">8:45 AM</option>

			<option value="">9:00 AM</option>
			<option value="">9:15 AM</option>
			<option value="">9:30 AM</option>
			<option value="">9:45 AM</option>

			<option value="">10:00 AM</option>
			<option value="">10:15 AM</option>
			<option value="">10:30 AM</option>
			<option value="">10:45 AM</option>

			<option value="">11:00 AM</option>
			<option value="">11:15 AM</option>
			<option value="">11:30 AM</option>
			<option value="">11:45 AM</option>

			<option value="">12:00 PM</option>
			<option value="">12:15 PM</option>
			<option value="">12:30 PM</option>
			<option value="">12:45 PM</option>

			<option value="">1:00 PM</option>
			<option value="">1:15 PM</option>
			<option value="">1:30 PM</option>
			<option value="">1:45 PM</option>

			<option value="">2:00 PM</option>
			<option value="">2:15 PM</option>
			<option value="">2:30 PM</option>
			<option value="">2:45 PM</option>

			<option value="">3:00 PM</option>
			<option value="">3:15 PM</option>
			<option value="">3:30 PM</option>
			<option value="">3:45 PM</option>

			<option value="">4:00 PM</option>
			<option value="">4:15 PM</option>
			<option value="">4:30 PM</option>
			<option value="">4:45 PM</option>

			<option value="">5:00 PM</option>
			<option value="">5:15 PM</option>
			<option value="">5:30 PM</option>
			<option value="">5:45 PM</option>

			<option value="">6:00 PM</option>
			<option value="">7:15 PM</option>
			<option value="">7:30 PM</option>
			<option value="">7:45 PM</option>

			<option value="">8:00 PM</option>
			<option value="">8:15 PM</option>
			<option value="">8:30 PM</option>
			<option value="">8:45 PM</option>

			<option value="">9:00 PM</option>
			<option value="">9:15 PM</option>
			<option value="">9:30 PM</option>
			<option value="">9:45 PM</option>

			<option value="">10:00 PM</option>
			<option value="">10:15 PM</option>
			<option value="">10:30 PM</option>
			<option value="">10:45 PM</option>

			<option value="">11:00 PM</option>
			<option value="">11:15 PM</option>
			<option value="">11:30 PM</option>
			<option value="">11:45 PM</option>

			<option value="">12:00 AM</option>
			<option value="">12:15 AM</option>
			<option value="">12:30 AM</option>
			<option value="">12:45 AM</option>

			<option value="">1:00 AM</option>
			<option value="">1:15 AM</option>
			<option value="">1:30 AM</option>
			<option value="">1:45 AM</option>

			<option value="">2:00 AM</option>
			<option value="">2:15 AM</option>
			<option value="">2:30 AM</option>
			<option value="">2:45 AM</option>

			<option value="">3:00 AM</option>
			<option value="">3:15 AM</option>
			<option value="">3:30 AM</option>
			<option value="">3:45 AM</option>

			<option value="">4:00 AM</option>
			<option value="">4:15 AM</option>
			<option value="">4:30 AM</option>
			<option value="">4:45 AM</option>

		</select>
	</div>

</div>
	<p style="margin:20px 110px;color:gray"><i class="fa fa-calendar-check-o" style="padding:15px"aria-hidden="true"></i>Cab Type</p>

	<ul class="cabtype">
		<li><img src="Images/micro.jpg" width="100dp"><br><br><label>#micro</label><br><br><p><span><i class="fa fa-user" aria-hidden="true"></i> 2</span></p><br><button type="button" onclick="getcabName('Micro,2 Seater')">Select</button></li>
		<li><img src="Images/mini.jpg" width="100dp"><br><br><label>#mini</label><br><br><p><span><i class="fa fa-user" aria-hidden="true"></i> 2</span>AC</p><br><button type="button" onclick="getcabName('Mini,2 Seater')">Select</button></li>
		<li><img src="Images/suv.jpg" width="100dp"><br><br><label>#suv</label><br><br><p><span><i class="fa fa-user" aria-hidden="true"></i> 3</span>AC &nbsp;&nbsp;<i class="fa fa-rss" aria-hidden="true"></i></p><br><button type="button" onclick="getcabName('SUV,3 Seater,Wifi'); calAddFare(0.2);" >Select</button></li>
		<li><img src="Images/lux-sedan.jpg" width="100dp"><br><br><label>#lux-sedan</label><br><br><p><span><i class="fa fa-user" aria-hidden="true"></i> 4</span>AC &nbsp;&nbsp;<i class="fa fa-rss" aria-hidden="true"></i></p><br><button type="button" onclick="getcabName('Lux Sedan,4 Seater,Wifi'); scalAddFare(0.5);">Select</button></li>

	</ul>

	
</div>

	<div class="bookingDetails">
	
	<table >
	<tr >
	<td colspan="2"><input type="text" name="service" style="width:250px;" id="serv" ></td>
	</tr>
	

	<tr>
	<td><i class="fa fa-location-arrow" style="padding:30px;font-size:18px;color:gray;margin-left:-80px;"></i>Source</td>
	</tr>

	<tr>
	<td colspan="2" ><textarea name="source" id="sloc" rows="2" cols="5"></textarea></td>
	</tr>
	
	<tr>
	<td><i class="fa fa-location-arrow" style="padding:30px;font-size:18px;color:gray;margin-left:-80px;"></i>Destination</td>
	</tr>
	
	<tr>
	<td colspan="2" ><textarea name="destination" id="dloc" rows="2" cols="5"></textarea></td>
	</tr>
	
	<tr>
	<td>Estimated Distance</td>
	<td><input type="text" name="distance" value="0.0 KM" id="dist1"></td>
	</tr>

		<tr>
			<td>Estimated Time</td>
			<td><input type="text" name="time" value="0.0 hr"id="eta1"></td>
		</tr>

		<tr>
	<td>Estimated Fare</td>
	<td>&#8377;<input type="text" value=" 0.0" name="fare" id="fare1"></td>
	</tr>

		<tr>
			<td>Cab Type</td>
			<td><input type="text" value="" name="cab" id="cabName"></td>
		</tr>

		<tr>
			<td>Additional Charges</td>
			<td>&#8377;<input type="text" value=" 0.0" name="addCost" id="addAmt"></td>
		</tr>

	<tr>
	<td style="font-size:15px;font-weight:bold">Total</td>
	<td style="font-size:16px;font-weight:bold">&#8377;<input type="text" name="total" id="tot" value="  0.0" style="font-size:16px;font-weight:bold;color:black"></td>
	</tr>
	</table>
	
	<div class="confirmBook"><input type="submit" value="CONFIRM RIDE" id="confirm"></div>
	
	</div>
	
	</form>
	</div>

		<script src="js/timedropper.js"></script>
<script src="js/custom-select.js"></script>
<script>$( "#alarm" ).timeDropper();</script>
	<script type="text/javascript">



			
			$(document).ready(function(){
				$('.form1').css({'z-index':-1});
				$('.form2').css({'z-index':-1});
				$('.bookingDetails').css({'z-index':-1});
				$('.progressBar li:nth-child(1)').css({'color':'#fff','background':'#000'});
				$('.loader').fadeOut('fast');
				
			$('#home').click(function(){
				$('.loader').fadeIn('fast').delay(1000).fadeOut('fast');
				$('.servicePanel').css({'z-index':-1});
				$('.form1').css({'z-index':1});
				$('.bookingDetails').css({'z-index':1});
				$('.progressBar li').css({'color':'#ddd','background':'#666'});
				$('.progressBar li:nth-child(2)').css({'color':'#FFF','background':'#000'});
				$('.bookingDetails table tr:nth-child(1) td input').val('Home Pickup').css({'font-size':'20px','font-weight':'bold'});
			});
			$('#airport').click(function(){
				$('.loader').fadeIn('fast').delay(300).fadeOut('fast');
				$('.servicePanel').css({'z-index':-1});
				$('.form1').css({'z-index':1});
				$('.bookingDetails').css({'z-index':1});
				$('.progressBar li').css({'color':'#ddd','background':'#666'});
				$('.progressBar li:nth-child(2)').css({'color':'#FFF','background':'#000'});
				$('.bookingDetails table tr:nth-child(1) td input').val('Airport Transportation').css({'font-size':'20px','font-weight':'bold'});
			});
			
			$('#company').click(function(){
				$('.loader').fadeIn('fast').delay(300).fadeOut('fast');
				$('.servicePanel').css({'z-index':-1});
				$('.form1').css({'z-index':1});
				$('.bookingDetails').css({'z-index':1});
				$('.progressBar li').css({'color':'#ddd','background':'#666'});
				$('.progressBar li:nth-child(2)').css({'color':'#fff','background':'#000'});
				$('.bookingDetails table tr:nth-child(1) td input').val('Company Contract').css({'font-size':'20px','font-weight':'bold'});
			});
			
			$('.cabtype li button').click(function(){
				$('.loader').fadeIn('fast').delay(2000).fadeOut('fast');
				$('.cabtype li button').css("background","#5695e0");
				$(this).css({'background':'green','cursor':'not-allowed'});
				$(this).text("Selected");
				
			});
			
			});



	
	</script>
		<script src="js/calendar.js"></script>
	<script>
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
		$('#dd').calendar({
			trigger : '#dt',
			//offset: [0, 1],
			zIndex : 1000,
			onSelected : function(view, date, data) {
				console.log('event: onSelected')
			},
			onClose : function(view, date, data) {
				console.log('event: onClose')
				console.log('view:' + view)
				console.log('date:' + date)
				console.log('data:' + (data || 'None'));
			}
		});
		

	</script>
	
	<script>
		$('#us3').locationpicker({
			location : {
				latitude : 0,
				longitude : 0
			},
			radius : 300,
			inputBinding : {
				latitudeInput : $('#us3-lat'),
				longitudeInput : $('#us3-lon'),
				radiusInput : $('#us3-radius'),
				locationNameInput : $('#src')
			},
			enableAutocomplete : true,
			onchanged : function(currentLocation, radius, isMarkerDropped) {
				// Uncomment line below to show alert on each Location Changed event
				//alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
			}
		});
		
		
		$('#us4').locationpicker({
			location : {
				
				latitude : 0,
				longitude : 0
			},
			radius : 300,
			inputBinding : {
				latitudeInput : $('#us4-lat'),
				longitudeInput : $('#us4-lon'),
				radiusInput : $('#us3-radius'),
				locationNameInput : $('#dest')
			},
			enableAutocomplete : true,
			onchanged : function(currentLocation, radius, isMarkerDropped) {
				// Uncomment line below to show alert on each Location Changed event
				//alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
			}
		});
	
		</script>




		<script type="text/javascript">
	
	function getCoordinates(){
		var src=document.getElementById("src").value;
		var dest=document.getElementById("dest").value;
		var distance=getDistance(src,dest);

	}
 	function getDistance(src,dest) {

	
 
		var directionsService = new google.maps.DirectionsService();

		var request = {
		  origin      : src, // a city, full address, landmark etc
		  destination : dest,
		  travelMode  : google.maps.DirectionsTravelMode.DRIVING
		};

		directionsService.route(request, function(response, status) {
		  if ( status == google.maps.DirectionsStatus.OK ) {
		    var distance= (response.routes[0].legs[0].distance.value)/1000;
		    document.getElementById("sloc").value=src;
		    document.getElementById("dloc").value=dest;
		    document.getElementById("dist").value=distance.toFixed(2)+" KM";
		    document.getElementById("dist1").value=distance.toFixed(2)+" KM";
		    var serv=document.getElementById("serv").value;
			var newmsg = serv.replace(/[a-z]/g, '');

			 calTime(distance);
		  
 	if(serv== "Home Pickup"){
		a=8;
	}else if(serv== "Airport Transportation"){
			a=12;
		}else{
		a=20;	
		} 
	addChrge=0;	
	 price=(distance*a);
		//  alert(chrge);
		  document.getElementById("fare").value= "( "+(price-20).toFixed(2) +" - "+(price+20).toFixed(2) + " )";
		  document.getElementById("fare1").value= "( "+(price-20).toFixed(2) +" - "+(price+20).toFixed(2) + " )";
		//alert(distance*a).toFixed(2);
		  calTotal(addChrge,price);
		  // the distance in KM
		  }
		  else {
		//alert("Sorry cannot find distance")
		  }
		});
		}
 	
	sum=0;


	function calTime(distance){

	time=(distance / 20);
	var timeinhr=Math.floor(time);
	var timeinmin=(time-timeinhr)*60;
	document.getElementById("eta").value=timeinhr+" hr  " + Math.floor(timeinmin)+" min"+" (approx)";
	document.getElementById("eta1").value=timeinhr+" hr  " + Math.floor(timeinmin)+" min";		
	} 

function calAddFare(factor){

	var addAmnt=(time*60)*factor;
	document.getElementById("addAmt").value=addAmnt.toFixed(2);

	calTotal(addAmnt,price);
}
	
	function calTotal(addChrge,amt){
		sum=addChrge+amt;
		document.getElementById('tot').value=" "+ sum.toFixed(2);
	}
	
	function getcabName(name){
	document.getElementById("cabName").value=name;
	}
	
	function getName(){
	var name=document.getElementById('fullname').value;
	document.getElementById('9').value=name;
	
		}
	</script>


</body>
</html>