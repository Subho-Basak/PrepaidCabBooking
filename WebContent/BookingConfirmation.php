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
<title>Booking Confirmation</title>
<link href="Style/Home.css" rel="stylesheet">
<style type="text/css">

h1{
margin:150px 400px;
width:480px;
padding:14px 60px;
background:#fff;
font-weight:normal;
font-size:15px;
box-shadow:0px 2px 2px 2px #aaa;
}

span{
position:absolute;
left:357px;
top:150px;
background:black;
color:white;
padding:14px 20px;
font-size:15px;
box-shadow:0px 2px 2px 2px #aaa;

}

table{
	box-shadow:0px 2px 2px 2px #aaa;
	width:650px;
	background:#FFF;
	margin:-145px 350px;	
}

table tr td{
	padding:8px 20px;
	font-size:12px;
}
table tr th{
background:#999;	
	padding:10px;
	font-weight:normal;
}
table tr td:nth-child(1){
width:150px;

}
</style>
</head>

<body bgcolor="#ccc">
<div class="header1">



		<a href="#" style="border:none;">BOOKING STATUS </a> <a href="#">CANCELLATION </a> <a
			href="Enquiry.php">ENQUERY </a>
	</div>
	<div class="header2">


		<a href="Faq.php">FAQ </a> <a href="ContactUs.php">CONTACT US </a> <a href="#">TARIFFS
		</a> <a href="Gallery.php">GALLERY</a> <a href="Service.php">SERVICES </a> <a href="BookCab.php" style="padding: 16px 12px 16px 12px; border-bottom: 1px solid cyan">BOOK
			FOR RIDE</a> <a href="HomePage.html">HOME </a>
	</div>

	<span>:)</span>
	<h1>YOUR BOOKING PROCESS HAS BEEN COMPLETED SUCCESSFULLY.</h1>
    
    <form action="BookSlip.php">
    <input type="submit" name="Generate Slip" value="Generate Slip">
    </form>
    
 </body>
</html>