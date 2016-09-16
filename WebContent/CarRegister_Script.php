<?php	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
$car_id = $_POST['id'];
$car_brand=$_POST['brand'];
$car_name=$_POST['name'];
$car_type=$_POST['type'];
$capacity=$_POST['capacity'];
$cost=$_POST['cost'];
$timestamp=time();
$photo= $_FILES['photo']['name'];
//$avatar=$_POST['avatar'];
$pic=0;
if ( strlen ( $photo ) > 0)
{
$pic=1;
$ary=explode("." , $photo);
$newfilename=$timestamp.".".$ary[1];
copy($_FILES["photo"]["tmp_name"],
      "image/".$newfilename);
}

if (strlen($newfilename)>0)
{
$sql="insert into car_reg(car_id,car_brand,car_name,car_type,capacity,cost,car_image,status) values('$car_id','$car_brand','$car_name','$car_type','$capacity','$cost','$newfilename','unbooked')" ;


}
//echo $sql;
$result=mysql_query($sql,$connection);

if($result)
{
	header("location:Home.php");
	
}
else
{
	echo "error";
}





?>