<?php	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
$name = $_POST['fullname'];
$contact=$_POST['contact'];
$zip=$_POST['zip'];
$email=$_POST['email'];
$loc=$_POST['loc'];
$sec_qst=$_POST['sqst'];
$sec_ans=$_POST['s_ans'];
//$pwd=$_POST['pwd'];
$cpwd=$_POST['pass'];

$sql = "insert into cust_reg(fullname,contact,zip,email,location,password,sec_qst,seq_ans) values('$name', '$contact','$zip', '$email','$loc','$cpwd','$sec_qst','$sec_ans')";
//echo $sql;
$result=mysql_query($sql,$connection);

if($result)
{
header('location:Success.php');

}
else{
echo "error";
}

?>