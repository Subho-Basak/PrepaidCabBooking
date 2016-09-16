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
    <div class="editPanel">
    <?php 
	$uname=$_SESSION['email'];
	$cus_name=$_SESSION['fullname'];
	$sql="select * from cust_reg where email='$uname'";
	$i=0;
   $result=mysql_query($sql,$connection);

   $cus_name=mysql_result($result,$i,"fullname");
   $contact=mysql_result($result,$i,"contact");
   $zip=mysql_result($result,$i,"zip");
   $email=mysql_result($result,$i,"email");
   $location=mysql_result($result,$i,"location");


   

	
	
	
	?>
    <H1>CUSTOMER INFO</H1>
    <button><i class="fa fa-pencil" aria-hidden="true"></i></button>
    <table>
    <tr>
    <td>Name:</td>
    <td><?php echo $cus_name ;?></td>
    </tr>
    
    <tr>
    <td>Contact No:</td>
    <td><?php echo $contact ;?></td>
    </tr>
    
    <tr>
    <td>Location:</td>
    <td><?php echo $location ;?></td>
    </tr>
    
    <tr>
    <td>Email ID:</td>
    <td><?php echo $email ;?></td>
    </tr>
    
    <tr>
    <td>Zip Code:</td>
    <td><?php echo $zip ;?></td>
    </tr>
    </table>
</div>
    
</body>
</html>