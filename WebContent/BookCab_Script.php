<?php
session_start();
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
$service=$_POST['service'];
$n= substr($service, 0, 1);
$rand=mt_rand(10000000,100000000);
$book_id=$n ."1437-" .$rand;//$_POST['book_id'];

$car_name=$_POST['carname'];
//$cus_name=$_POST['fullname'];
//$contact=$_POST['contact'];
//$email_id=$_POST['email'];
$location=$_POST['location'];
//$zip=$_POST['zip'];
$source=$_POST['source'];
$dest=$_POST['destination'];
$pickup_date=$_POST['pickup_date'];
$pickup_time=$_POST['pickup_time'];
$distance=$_POST['distance'];
$tot_cost=$_POST['fare'];


/*$sql="insert into boking_details(book_id,service,car_name,cus_name,contact,email_id,location,zip,source,dest,pickup_date,pickup_time,distance,tot_cost) values('$book_id','$service','$car_name','$cus_name','$contact','$email_id','$location','$zip','$source','$dest','$pickup_date','$pickup_time','$distance','$tot_cost')" ;



//echo $sql;
$result=mysql_query($sql,$connection);

if($result)
{*/
	$_SESSION['car_name']=$car_name;
	//echo"$car_name";
	$_SESSION['book_id']=$book_id;
	$_SESSION['service']=$service;
	$_SESSION['location']=$location;
	$_SESSION['source']=$source;
	//$_SESSION['email_id']=$email_id;
	$_SESSION['dest']=$dest;
	$_SESSION['pickup_date']=$pickup_date;
	//echo $pickup_date;
	$_SESSION['pickup_time']=$pickup_time;
	$_SESSION['distance']=$distance;
	$_SESSION['tot_cost']=$tot_cost;
	header("location:login.php");
	
	
//}
/*else
{
	echo "error";
}*/






?>