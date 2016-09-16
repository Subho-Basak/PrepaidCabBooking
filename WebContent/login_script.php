<?php
session_start();
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
    $car_name=$_SESSION['car_name'];
	//echo"$car_name";
	$book_id=$_SESSION['book_id'];
	$service=$_SESSION['service'];
	$location=$_SESSION['location'];
	$source=$_SESSION['source'];
	//$_SESSION['email_id']=$email_id;
	$dest=$_SESSION['dest'];
	//echo $dest;
	$pickup_date=$_SESSION['pickup_date'];
	$pickup_time=$_SESSION['pickup_time'];
	$distance=$_SESSION['distance'];
	$tot_cost=$_SESSION['tot_cost'];
	
$email=$_POST['email'];
//echo $email;
$pass=$_POST['pass'];
$sql="select * from cust_reg where email='$email' and password='$pass'";
//echo"$sql";
$i=0;
$result=mysql_query($sql,$connection);

    
$num= mysql_numrows($result);
//echo $num;
if($num==1)
{  	
	$_SESSION['email']=$email;
	$contact=mysql_result($result,$i,"contact");
	$fullname=mysql_result($result,$i,"fullname");
	$location=mysql_result($result,$i,"location");
	$zip=mysql_result($result,$i,"zip");
  
	//$_SESSION['type']=$login_type;
	

	
	//header("location:BookingConfirmation.php");
}
	$sql1="insert into boking_details(book_id,service,car_name,cus_name,contact,email,location,zip,source,dest,pickup_date,pickup_time,distance,tot_cost) values('$book_id','$service','$car_name','$fullname','$contact','$email','$location','$zip','$source','$dest','$pickup_date','$pickup_time','$distance','$tot_cost')" ;



//echo $sql1;
$result1=mysql_query($sql1,$connection);

if($result1){
	$_SESSION['book_id']=$book_id;
	
	header("location:BookingSlip.php");

}

else
{
  //echo "Invalid UserName or Password";
header("location:login.php");
}  
?>