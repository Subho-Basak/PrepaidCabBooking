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
<title>Thank you for your request</title>
<link href="Style/Home.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<style type="text/css">

h1{
margin:150px 400px;
width:480px;
padding:14px 60px;
font-weight:normal;
font-size:55px;

}
h5{
margin-left:400px;
margin-top:-150px;
padding:14px 60px;
font-size:18px;
}
span{
position:absolute;
left:357px;
top:150px;
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

button{
margin-left:460px;
background:black;
outline:none;
border:none;
color:white;
padding:8px 20px;
font-size:14px;
}
.cancel{
margin-left:660px;
margin-top:-35px;
background:#ddd;
padding:8px 28px;
color:black;
}
</style>
</head>

<body>
<div class="header1">



		<a href="#" style="border:none;">BOOKING STATUS </a> <a href="#">CANCELLATION </a> <a
			href="Enquiry.php">ENQUERY </a>
	</div>
	<div class="header2">


		<a href="Faq.php">FAQ </a> <a href="ContactUs.php">CONTACT US </a> <a href="#">TARIFFS
		</a> <a href="Gallery.php">GALLERY</a> <a href="Service.php">SERVICES </a> <a href="BookCab.php" style="padding: 16px 12px 16px 12px; border-bottom: 1px solid cyan">BOOK
			FOR RIDE</a> <a href="HomePage.php">HOME </a>
	</div>

	<span><img src="Images\Ok.png" width="100dp" ></img></span>
	<h1>Thank you!</h1>
	<h5>Your cab will reach at your pickup place soon.</h5>
   

    <form action="BookSlip.php">
    <button type="submit" name="slip" value=""><i class="fa fa-eye"></i> &nbsp;VIEW SUMMARY</button>
    </form>

  <!--   <form action="">
    <button type="submit" name="slip" class="cancel"> &#9932; &nbsp;CANCEL RIDE</button>
    </form>  -->

    
    
 </body>
</html>