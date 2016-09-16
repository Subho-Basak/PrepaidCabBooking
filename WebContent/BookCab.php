<?php
//session_start();
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

alignment:centre;
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
top:100px;
left:500px;
width:350px;
height:450px;
background:#FFF;
z-index:10;
box-shadow:0px 0px 575px 578px rgba(0,0,0,0.8);
}
.loader i:nth-child(1){
	margin:150px 70px; 
}

.loader i:nth-child(2){
position:relative;
top:30px;
left:-100px;	
}
.loader i:nth-child(3){
position:relative;
top:-250px;
left:150px;	
}

.loader i{
color:#999;	
}
.loader span{
font-family:century gothic;
font-size:20px;
position:relative;
top:-100px;
left:10px;	
}

</style>
</head>
<body bgcolor="#ccc">

<!-- loading animation-->
<div class="loader">
<i class="fa fa-cog fa-spin fa-5x fa-fw"></i>
<i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
<i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Just A Moment...</span>


</div>


	<div class="header1">



		<a href="#" style="border:none;">BOOKING STATUS </a> <a href="CancelBooking.php">CANCELLATION </a> <a
			href="Enquiry.php">ENQUERY </a>
	</div>
	<div class="header2">


		<a href="Faq.php">FAQ </a> <a href="ContactUs.php">CONTACT US </a> <a href="Tariffs.php">TARIFFS
		</a> <a href="Gallery.php">GALLERY</a> <a href="Service.php">SERVICES </a> <a href="BookCab.php" style="padding: 16px 12px 16px 12px; border-bottom: 1px solid cyan">BOOK
			FOR RIDE</a> <a href="HomePage.html">HOME </a>
	</div>

<div class="bookPanel">
<h1>BOOK A CAB</h1><hr>
<div class="container">
<ul class="progressBar">
<li><i class="fa fa-cogs" aria-hidden="true" ></i></i>&nbsp;&nbsp;CHOOSE SERVICE</li>
<li><i class="fa fa-taxi" aria-hidden="true"></i></i>&nbsp;&nbsp;CHOOSE CAB</li>
<li><i class="fa fa-check" aria-hidden="true"></i></i>&nbsp;&nbsp;BOOKING DETAILS</li>
<li><i class="fa fa-user" aria-hidden="true" ></i>&nbsp;&nbsp;PERSONAL DETAILS</li>
</ul>
</div>


<div class="servicePanel">
<div class="serviceType1">
<figure style="overflow:hidden"><img src="Images\homePickup.jpg" width="300dp" height="200dp"><figcaption>HOME PICKUP<br><br><span>&#8377 20/KM</span></figcaption><button id="home">I like to Book this Service</button></figure>
</div>

<div class="serviceType2">
<figure><img src="Images\Airport.jpeg" width="300dp" height="200dp"><figcaption>AIRPORT TRANSPORTATION<br><br><span>&#8377 40/KM</span></figcaption><button id="airport">I like to Book this Service</button></figure>
</div>

<div class="serviceType3">
<figure><img src="Images\company.jpg" width="300dp" height="200dp"><figcaption>COMPANY CONTRACT<br><br><span>&#8377 50/KM</span></figcaption><button id="company">I like to Book this Service</button></figure>
</div>
</div>

<div class="carlist" id="style-15">
<div>
<h5>BRANDS</h5>
<form action="" method="get">
<ul>
<li><input type="radio" class="k-radio" name="brand"> All </li>
<li><input type="radio" class="k-radio" name="brand" value="Maruti Suzuki"> Maruti Suzuki</li>
<li><input type="radio" class="k-radio" name="brand"> Honda</li>
<li><input type="radio" class="k-radio" name="brand" value="Hyundai"> Hyundai</li>
<li><input type="radio" class="k-radio" name="brand"> Tata</li>
<li><input type="radio" class="k-radio" name="brand"> Toyota</li>

</ul>
</form>
</div>

<div>
<h5>CAR TYPE</h5>

<ul>
<li><input type="radio" class="k-radio" name="brand" >&nbsp;<img src="Images/mini.jpg" width="80dp" height="50dp"><br>&emsp;&emsp;Mini</li>
<li><input type="radio" class="k-radio" name="brand" value="sedan"> <img src="Images/sedan.jpg" width="85dp" height="50dp"><br>&emsp;&emsp;Sedan</li>
<li><input type="radio" class="k-radio" name="brand"> <img src="Images/suv.png" width="85dp" height="50dp"><br>&emsp;&emsp;SUV</li>

</div>


<table border="1">


<?php 
/*if(isset($_get['brand'])){
 $c_brand=$_get['brand'];
 if($c_brand!="All"){
 $query="select * from car_reg where car_brand='$c_brand'"; 
 
 }else{
  
  
 }*/
  //echo $query;            
                $query="select * from  car_reg" ;
                $result=mysql_query($query,$connection);
                 $num=mysql_num_rows($result);
				 
   

              $i=0;
                      while ( $i < $num )
              
             {

            $car_brand=mysql_result($result,$i,"car_brand");
            $car_name=mysql_result($result,$i,"car_name");
            $cost=mysql_result($result,$i,"cost");
            $car_image=mysql_result($result,$i,"car_image");
			 
          ?>    


<tr>
<td rowspan="4" style="width:200px;">        <?php  
        echo "<img src = 'image/$car_image' height='150dp'width='200dp'/></a>";
        ?>
 </td>
<th><?php echo" $car_name"; ?></th>
</tr>

<tr><td><?php echo" $car_brand"; ?></td></tr>
<tr><td>&#8377<?php echo" $cost"; ?></td></tr>
<tr><td style="border-bottom:1px solid #eee;"><input type="button" value="SELECT" class="btn" onclick="document.getElementById('crtyp').value='<?php echo $car_name;?>';document.getElementById('chrge').value='<?php echo $cost;?>';calTotal(<?php echo $cost; ?>,0)"></td></tr>
<?php 
            $i++; 
            
 }
            ?>


</table>

</div>

<form action="BookCab_Script.php" method="post">
<div class="form1">
<h5 style="position:absolute;top:30px;left:0">BOOKING DETAILS</h5>
<div class="flp">
<div style="position:absolute;left:0;top:150px;">
				<input type="text" id="src" name="src" placeholder="" onchange="getCoordinates()"> <label for="src">SOURCE</label>
	
</div>
	<div id="us3" style="width: 0 px; height: 0px;"></div>
<div style="position:absolute;left:400px;top:150px;">
				<input type="text" id="dest" name="dest" placeholder="" onchange="getCoordinates()"> <label for="dest">DESTINATION</label>
				<div id="us4" style="width: 0 px; height: 0px;"></div>
			
</div>



<label style="position:absolute;left:-10px;top:210px;">PICKUP DATE</label>
<div id="demo" style="margin-left: 0px; margin-top: 255px">

				<input type="text" id="dt" name="pickup_date" placeholder="PICKUP">
				<div id="dd"></div>
</div>


<label style="position:absolute;left:390px;top:210px;">PICKUP TIME</label>
<div style="position:absolute;left:400px;top:255px;">
				<input type="text" name="pickup_time" id="alarm" /> 
</div>
<input type="button" id="next" value="Next">
</div>

</div>


</div>
	
	<div class="bookingDetails">
	
	<table >
	<tr >
	<td colspan="2"><input type="text" name="service" style="width:250px;" id="serv"></td>
	</tr>
	
	<tr>
	<td colspan="2"><input type="text" name="carname" style="width:250px;font-size:15px;" id="crtyp"></td>
	</tr>
	
	<tr>
	<td>Car Charge</td>
	<td>&#8377;<input type="text" name="crchrge" id="chrge" value=" 0.0"></td>
	</tr>
	
	<tr>
	<td>Source Location</td>
	</tr>
	
	<tr>
	<td colspan="2" ><textarea name="source" id="sloc" rows="3" cols="5"></textarea></td>
	</tr>
	
	<tr>
	<td>Destination Location</td>
	</tr>
	
	<tr>
	<td colspan="2" ><textarea name="destination" id="dloc" rows="3" cols="5"></textarea></td>
	</tr>
	
	<tr>
	<td>Estimated Distance</td>
	<td><input type="text" name="distance" value="0.0 KM"id="dist"></td>
	</tr>
	
	<tr>
	<td>Estimated Fare</td>
	<td>&#8377;<input type="text" value=" 0.0" name="" id="fare"></td>
	</tr>
	
	
	<tr>
	<td style="font-size:15px;font-weight:bold">Total</td>
	<td style="font-size:16px;font-weight:bold">&#8377;<input type="text" name="fare" id="tot" value="  0.0" style="font-size:16px;font-weight:bold"></td>
	</tr>
	</table>
	
	
	<input type="submit" value="BOOK MY TRIP!" id="confirm">

	</div>
	</form>
	</div>
	

	
	<script src="http://thecodeplayer.com/u/js/jquery.easing.min.js"
		type="text/javascript"></script>
		<script src="js/timedropper.js"></script>
		<script src="js/seat-select.js"></script>
<script>$( "#alarm" ).timeDropper();</script>
	<script type="text/javascript">

	$(".flp label").each(function() {
		var sop = '<span class="ch">'; //span opening
		var scl = '</span>'; //span closing
		//split the label into single letters and inject span tags around them
		$(this).html(sop + $(this).html().split("").join(scl + sop) + scl);
		//to prevent space-only spans from collapsing
		$(".ch:contains(' ')").html("&nbsp;");
	})

	var d;
	//animation time
	$(".flp input").focus(
			function() {
				//calculate movement for .ch = half of input height
				var tm = $(this).outerHeight() / 2 * -1 + "px";
				//label = next sibling of input
				//to prevent multiple animation trigger by mistake we will use .stop() before animating any character and clear any animation queued by .delay()
				$(this).next().addClass("focussed").children().stop(true)
						.each(function(i) {
							d = i * 50;//delay
							$(this).delay(d).animate({
								top : tm
							}, 200, 'easeOutBack');
							
						})
			})
	$(".flp input").blur(
			function() {
				//animate the label down if content of the input is empty
				if ($(this).val() == "") {
					$(this).next().removeClass("focussed").children().stop(
							true).each(function(i) {
						d = i * 50;
						$(this).delay(d).animate({
							top : 0
						}, 500, 'easeInOutBack');
					})
				}
				
			})

			
			$(document).ready(function(){
				$('.form1').css({'z-index':-1});
				$('.form2').css({'z-index':-1});
				$('.bookingDetails').css({'z-index':-1});
				$('.carlist').css({'z-index':-1});
				$('.progressBar li:nth-child(1)').css({'color':'#fff','background':'#000'});
				$('.loader').fadeOut('fast');
				
			$('#home').click(function(){
				$('.loader').fadeIn('fast').delay(1000).fadeOut('fast');
				$('.servicePanel').css({'z-index':-1});
				$('.form1').css({'z-index':-1});
				$('.carlist').css({'z-index':1});
				$('.bookingDetails').css({'z-index':1});
				$('.progressBar li').css({'color':'#ddd','background':'#666'});
				$('.progressBar li:nth-child(2)').css({'color':'#FFF','background':'#000'});
				$('.bookingDetails table tr:nth-child(1) td input').val('Home Pickup').css({'font-size':'20px','font-weight':'bold'});
			});
			$('#airport').click(function(){
				$('.loader').fadeIn('fast').delay(1000).fadeOut('fast');
				$('.carlist').css({'z-index':1});
				$('.servicePanel').css({'z-index':-1});
				//$('.form').css({'z-index':1});
				$('.bookingDetails').css({'z-index':1});
				$('.progressBar li').css({'color':'#ddd','background':'#666'});
				$('.progressBar li:nth-child(2)').css({'color':'#FFF','background':'#000'});
				$('.bookingDetails table tr:nth-child(1) td input').val('Airport Transportation').css({'font-size':'20px','font-weight':'bold'});
			});
			
			$('#company').click(function(){
				$('.loader').fadeIn('fast').delay(1000).fadeOut('fast');
				$('.servicePanel').css({'z-index':-1});
				$('.form1').css({'z-index':1});
				$('.bookingDetails').css({'z-index':1});
				$('.progressBar li').css({'color':'#ddd','background':'#666'});
				$('.progressBar li:nth-child(2)').css({'color':'#fff','background':'#000'});
				$('.bookingDetails table tr:nth-child(1) td input').val('Company Contract').css({'font-size':'20px','font-weight':'bold'});
			});
			
			$('.btn').click(function(){
				$('.loader').fadeIn('fast').delay(1000).fadeOut('fast');
				//$('.servicePanel').css({'z-index':-1});
				$('.form1').css({'z-index':1});
				//$('.form2').css({'z-index':1});
				$('.carlist').css({'z-index':-1});
				//$('.bookingDetails').css({'z-index':1});
				$('.progressBar li').css({'color':'#ddd','background':'#666'});
				$('.progressBar li:nth-child(3)').css({'color':'#fff','background':'#000'});
				
			});
			
			$('#next').click(function(){
			
				$('.servicePanel').css({'z-index':-1});
				$('.form1').css({'z-index':-1});
				$('.form2').css({'z-index':1});
				$('.carlist').css({'z-index':-1});
				$('.bookingDetails').css({'z-index':1});
				$('.progressBar li').css({'color':'#fff','background':'#666'});
				$('.progressBar li:nth-child(4)').css({'color':'#ddd','background':'#000'});
				
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
		
		

		
		var lb = document.getElementById('myList');
		arrTexts = new Array();

		for (i = 0; i < lb.length; i++) {
			arrTexts[i] = lb.options[i].text;
		}

		arrTexts.sort();

		for (i = 0; i < lb.length; i++) {
			lb.options[i].text = arrTexts[i];
			lb.options[i].value = arrTexts[i];
		}
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
		    document.getElementById("dist").value=distance+" KM";
		    var serv=document.getElementById("serv").value;
			var newmsg = serv.replace(/[a-z]/g, '');
		  alert(newmsg);
		  
	if(serv==="Home Pickup"){
		a=20;
	}else if(serv==="Airport Transportation"){
			a=40;
		}else{
		a=50;	
		}
		
		  var chrge=  parseInt(document.getElementById("chrge").value);
		//  alert(chrge);
		  document.getElementById("fare").value=" "+(distance*a).toFixed(2);
		//alert(distance*a).toFixed(2);
		  calTotal(chrge,distance*a);
		  alert(distance);// the distance in KM
		  }
		  else {
		//alert("Sorry cannot find distance")
		  }
		});
		}
 	

	
	sum=0;
	
	function calTotal(chrge,amt){
		sum=chrge+amt;
		document.getElementById('tot').value=" "+ sum.toFixed(2);
	}
	
	
	function getName(){
	var name=document.getElementById('fullname').value;
	document.getElementById('9').value=name;
	
		}
	</script>
</body>
</html>