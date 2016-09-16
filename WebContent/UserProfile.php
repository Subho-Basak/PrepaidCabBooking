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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="Style/Home.css" rel="stylesheet">
<link href="Style/MyAccount.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<title>My Account | FastCab. </title>
</head>

<body bgcolor="#ccc">

<div class="header1">
<div class="dropdown" style="float:middle;">
  <button class="dropbtn">My Account&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></button>
  <div class="dropdown-content">
    <a href="#">Edit Account</a>
    <a href="#">Change Password</a>
    <a href="#">Change Location</a>
      <a href="#">Cancel Booking</a>
    <a href="#">LOG OUT</a>
</div>
</div>
		<a href="#" style="border:none;">BOOKING STATUS </a>  <a
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
      		<li style="background:#222;"><a href="UserProfile.php" style="color:#fff">My Account</a></li>
      		<li><a href="ChangePass.php">Change Password</a></li>
            <li>Change Location</li>
    	</ul>
    <li>BOOKINGS</li>
    	<ul>
      		<li><a href="BookingStatus.php">My Booking</a></li>
      		<li><a href="CancelBooking.php">Cancel Booking</a></li>
            
    	</ul>
    </ul>
    <div class="accountPanel">
    <?php
	$cus_name=$_SESSION['fullname'];
	$loc=$_SESSION['location'];
	$email=$_SESSION['email'];
	?>
    <h1>Hi, <?php echo $cus_name; ?></h1>
		<h5><?php echo $email; ?></h5>
	<h5><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<?php echo $loc; ?></h5>

    <a href="EditProfile.php" style="margin-left: 740px;font-size:14px"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp; Edit Profile</a>
		<hr />


		<h3>Current Booking</h3>

    </div>
    
</body>
</html>