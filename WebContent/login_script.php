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
	$book_id=$n ."1437-" .$rand;
	$car_name=$_POST['cab'];
	$source=$_POST['source'];
	$dest=$_POST['destination'];
	$pickup_date=$_POST['pickup_date'];
	$pickup_time=$_POST['pickup_time'];
	$distance=$_POST['distance'];
	$time=$_POST['time'];
	$fare=$_POST['fare'];
	$addcost=$_POST['addCost'];
	$tot_cost=$_POST['total'];
	

	$cus_name=$_SESSION['fullname'];



	$sql1="insert into boking_details(book_id,service,car_name,cus_name,source,dest,pickup_date,pickup_time,distance,time,fare,add_cost,tot_cost,status) values('$book_id','$service','$car_name','$fullname','$source','$dest','$pickup_date','$pickup_time','$distance','$time','$fare','$addcost','$tot_cost','Running')" ;



//echo $sql1;
$result1=mysql_query($sql1,$connection);

if($result1){
	$_SESSION['book_id']=$book_id;
	
	header("location:BookingConfirm.php");

}

else
{
  //echo "Invalid UserName or Password";
header("location:login.php");
}  
?>