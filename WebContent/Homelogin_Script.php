<?php
session_start();
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}


$uname=$_POST['usrid'];
$password=$_POST['pwd'];


$sql="select * from cust_reg where email='$uname' and password='$password'";


//echo $sql;
$i=0;
$result=mysql_query($sql,$connection);

$cus_name=mysql_result($result,$i,"fullname");
$num= mysql_numrows($result);

if($num==1){
$_SESSION['email']=$uname;
$_SESSION['fullname']=$cus_name;
$_SESSION['location']=$loc;

	header("location:UserProfile.php");
	
	
}
else
{
	header("location:Failed.php");
}



?>