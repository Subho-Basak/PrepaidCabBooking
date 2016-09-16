<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="Style/Home.css" rel="stylesheet">
<link href="Style/MyAccount.css" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="jquery-2.1.4.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<title>My Account | Change Password </title>
</head>

<body bgcolor="#ccc">

<div class="header1">

		<a href="#" style="border:none;">BOOKING STATUS </a> <a href="CancelBooking.php" style="color:#5695e0">CANCELLATION </a> <a
			href="Enquiry.php" >ENQUERY </a>
	</div>
	<div class="header2">


		<a href="Faq.php">FAQ </a> <a href="ContactUs.php" >CONTACT US </a> <a href="Tariffs.php">TARIFFS
		</a> <a href="Gallery.php">GALLERY</a> <a href="Service.php">SERVICES </a> <a href="BookCab.php">BOOK
			FOR RIDE</a> <a href="HomePage.html">HOME
		</a>
	</div>
    <ul class="accountMenu">
    <li>MY FASTCAB</li>
    	<ul>
      		<li ><a href="UserProfile.php" >My Account</a></li>
      		<li style="background:#222;"><a href="ChangePass.php" style="color:#fff">Change Password</a></li>
            <li><a href="">Change Location</a></li>
    	</ul>
    <li>BOOKINGS</li>
    	<ul>
      		<li><a href="BookingStatus.php">My Bookings</a></li>
      		<li ><a href="CancelBooking.php" >Cancel Booking</a></li>
            
    	</ul>
    </ul>
    <div class="cancelPanel">
    <div class="dropdown" style="float:right;">
  <button class="dropbtn">My Account&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></button>
  <div class="dropdown-content">
    <a href="#">LOG OUT</a>
</div>
</div>
<h1>CHANGE PASSWORD</h1>

<form class="flp" method="post" action="Registration_Script.php" name="reg" >


			<div style="position: absolute; left: 235px; top: 150px;">
				<input type="text" id="opwd" name="opwd" onblur="getName()" class="inputs" required="required"/>
				<label for="opwd">CURRENT PASSWORD</label>
			</div>
            
            <div style="position: absolute; left: 235px; top: 230px;">
				<input type="text" id="pwd" name="pwd" onblur="getName()" class="inputs" required="required"/>
				<label for="pwd">NEW PASSWORD</label>
			</div>
            
            <div style="position: absolute; left: 235px; top: 310px;">
				<input type="text" id="cpwd" name="cpwd" onblur="getName()" class="inputs" required="required"/>
				<label for="cpwd">CONFIRM PASSWORD</label>
			</div>
            
            <input type="submit" value="Save"/>
            <input type="button" value="Cancel"/>
            </form>




</div>
<script src="http://thecodeplayer.com/u/js/jquery.easing.min.js"
		type="text/javascript"></script>
 	<script src="js/TextAnimation.js"></script>   
</body>
</html>