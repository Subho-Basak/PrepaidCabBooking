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
<title>Your booking summary</title>
<link href="Style/Home.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
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
	box-shadow:0px 1px 2px 2px #aaa;
	width:500px;
	background:#FFF;
	margin:125px 420px;	
	
}

table tr td{
	padding:20px 20px;
	font-size:15px;
	font-weight:550;
	border-bottom:1px solid #eee;
}
table tr th{

background:#0ca38d;	
color:white;
	padding:20px;
	font-weight:normal;
	
}
table tr td:nth-child(1){
width:100px;
font-size:14px;
}

table tr td i{
padding:12px 14px;
background:#ccc;
border-radius:50%;
}
table tr td:nth-child(2){
color:gray;
}
table tr td:nth-child(2) i{
padding:12px 14px;
background:none;
}

table tr td button{
background:#0ca38d;
margin:0;
width:100%;
border:none;
outline:none;
height:50px;
color:white;
cursor:pointer;
}

table tr td button:hover{
background:#097867;
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
    $source=mysql_result($result,$i,"source");
	$dest=mysql_result($result,$i,"dest");
	$pickup_date=mysql_result($result,$i,"pickup_date");
   	$pickup_time=mysql_result($result,$i,"pickup_time");
   	$distance=mysql_result($result,$i,"distance");
   	$time=mysql_result($result,$i,"time");
   	$fare=mysql_result($result,$i,"fare");
   	$addcost=mysql_result($result,$i,"add_cost");
   	$tot_cost=mysql_result($result,$i,"tot_cost");
   	
	  
	 
   	if($service=="Airport Transportation"){
   	
   	$srvicon="fa fa-plane";
   	}else if($service=="Company Contract"){
   	$srvicon="fa fa-building-o";
   	}else {$srvicon="fa fa-cab";} 
   
   ?> 
   
   
    <table>
    <tr>
    <th colspan="2">Booking Summary</th> 
    </tr>
    
    <tr>
    <td colspan="2" align="center"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Jane Doe<?php echo" $cus_name";?></td>
    </tr>
    
  
    <tr>
    <td align="center" colspan="2">Booking ID<br><span style="font-size:30px;"><?php echo "$book_id";?></span></td>
    </tr>
      
    <tr>
    <td>Service:</td>
    <td><i class="<?php echo "$srvicon";?>" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo "$service";?></td>
    </tr>
    
    <tr>
    <td>Cab Type:</td>
    <td><?php echo "$car_name";?></td>
    </tr>
    <tr>
    <td>Source:</td>
    <td><?php echo"$source";?></td>
    </tr>
    
    <tr>
    <td>Destination:</td>
    <td><?php echo "$dest";?></td>
    </tr>
     
    <tr>
    <td>Distance:</td>
    <td><?php echo"$distance";?></td>
    </tr>
      
    <tr>
    <td>Time:</td>
    <td><?php echo"$time";?></td>
    </tr>
    
    
    <tr>
    <td>Fare:</td>
    <td> &#8377; <?php echo"$fare";?></td>
    </tr>
    
    <tr>
    <td>Additional Charges:</td>
    <td> &#8377; <?php echo"$addcost";?></td>
    </tr>
    
    <tr>
    <td>Pickup Date:</td>
    <td><?php echo" $pickup_date";?></td>
    </tr>
    
    <tr>
    <td>Pickup Time:</td>
    <td><?php echo"$pickup_time";?></td>
    </tr>
    
    <tr>
    <td>Total Amount</td>
    <td style="font-size: 18px;font-weight: 600;color:black;"> &#8377; <?php echo"$tot_cost";?></td>
    </tr>
    
    <tr>
   
    <td colspan="2" ><button>Pay Now</button></td>
    </tr>
    
    
    </table>
</body>
</html>