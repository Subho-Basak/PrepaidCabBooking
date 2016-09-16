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


table{
	box-shadow:0px 2px 2px 2px #aaa;
	width:650px;
	background:#FFF;
	margin:145px 350px;	
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

	 <?php
       $book_id=$_SESSION['book_id'];
	   //echo "$email_id";
       $query=" select * from boking_details where book_id= '$book_id' ";
  		//echo  $query;			
						$i=0;	
				    		$result=mysql_query($query,$connection);
	$book_id=mysql_result($result,$i,"book_id");
	$service=mysql_result($result,$i,"service");
	$car_name=mysql_result($result,$i,"car_name");
	$cus_name=mysql_result($result,$i,"cus_name");
	$contact=mysql_result($result,$i,"contact");
	$email=mysql_result($result,$i,"email");
	$location=mysql_result($result,$i,"location");
	$zip=mysql_result($result,$i,"zip");
    $source=mysql_result($result,$i,"source");
	$dest=mysql_result($result,$i,"dest");
	$pickup_date=mysql_result($result,$i,"pickup_date");
   	$pickup_time=mysql_result($result,$i,"pickup_time");
   	$distance=mysql_result($result,$i,"distance");
   	$tot_cost=mysql_result($result,$i,"tot_cost");


  
  
  
   ?>
    <table>
    <tr>
    <th colspan="2">Personal Details</th> 
    </tr>
    
    <tr>
    <td>Name</td>
    <td><?php echo" $cus_name";?></td>
    </tr>
    
    <tr>
    <td>Contact No</td>
    <td><?php echo" $contact";?></td>
    </tr>
    
    <tr>
    <td>Email</td>
    <td><?php echo "$email";?></td>
    </tr>
    
    <tr>
    <td>Location</td>
    <td><?php echo"$location";?></td>
    </tr>
    
    <tr>
    <td>Zip</td>
    <td><?php echo "$zip";?></td>
    </tr>
    
    <tr>
    <th colspan="2">Booking Details</th> 
    </tr>
    
    <tr>
    <td>Booking ID</td>
    <td><?php echo "$book_id";?></td>
    </tr>
      
    <tr>
    <td>Service</td>
    <td><?php echo "$service";?></td>
    </tr>
    
    <tr>
    <td>Car</td>
    <td><?php echo "$car_name";?></td>
    </tr>
    <tr>
    <td>Source</td>
    <td><?php echo"$source";?></td>
    </tr>
    
    <tr>
    <td>Destination</td>
    <td><?php echo "$dest";?></td>
    </tr>
     
    <tr>
    <td>Distance</td>
    <td><?php echo"$distance";?></td>
    </tr>
      
    <tr>
    <td>Pickup Date</td>
    <td><?php echo" $pickup_date";?></td>
    </tr>
    
    <tr>
    <td>Pickup Time</td>
    <td><?php echo"$pickup_time";?></td>
    </tr>
    <tr>
    <td>Total Cost</td>
    <td><?php echo"$tot_cost";?></td>
    </tr>
    
    </table>
</body>
</html>