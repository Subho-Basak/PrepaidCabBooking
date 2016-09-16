<?php
session_start();
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="Style/Home.css" rel="stylesheet">
<script src="jquery-2.1.4.js"></script>

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="http://thecodeplayer.com/u/js/jquery.easing.min.js"
		type="text/javascript"></script>
<style>
body{
	margin:0;
	
}


.form1 a{
text-decoration:none;
color:#555;
position:absolute;
left:100px;
top:300px;
font-size:14px;	
}
.form1 a:hover{
color:#5695e0;	
}
#sub{
background:#67a925;
border:none;
color:#FFF;
height:50px;
width:330px;
transition:all 0.3s ease-in-out;
	outline:none;
	cursor:pointer;
}
#sub:hover{
	background:#4a7a1b;
}
.progressBar li i{
color:#fff;	
}
</style>
</head>

<body bgcolor="#ccc">

<div class="header1">



		<a href="#" style="border:none;">BOOKING STATUS </a> <a href="#">CANCELLATION </a> <a
			href="Enquiry.jsp">ENQUERY </a>
	</div>
	<div class="header2">


		<a href="Faq.jsp">FAQ </a> <a href="ContactUs.jsp">CONTACT US </a> <a href="#">TARIFFS
		</a> <a href="Gallery.jsp">GALLERY</a> <a href="Service.jsp">SERVICES </a> <a href="BookCab.jsp" style="padding: 16px 12px 16px 12px; border-bottom: 1px solid cyan">BOOK
			FOR RIDE</a> <a href="HomePage.html">HOME </a>
	</div>
<div class="bookPanel">
<h1>BOOK A CAB</h1><hr>
<div class="container">
<ul class="progressBar">
<li><i class="fa fa-cogs" aria-hidden="true" ></i></i>&nbsp;&nbsp;CHOOSE SERVICE</li>
<li><i class="fa fa-car" aria-hidden="true"></i></i>&nbsp;&nbsp;CHOOSE CAB</li>
<li><i class="fa fa-book" aria-hidden="true"></i></i>&nbsp;&nbsp;BOOKING DETAILS</li>
<li style="background:#000;"><i class="fa fa-users" aria-hidden="true" ></i>&nbsp;&nbsp;PERSONAL DETAILS</li>
</ul>
</div>
<form action="login_script.php" method="post">
<div class="form1" style="top:250px;left:400px;border-bottom:1px solid #eee;width:530px;height:400px;">
<h5 style="position:absolute;top:-40px;left:80PX">SIGN IN YOUR ACCOUNT</h5>
<div class="flp">
<div style="position:absolute;left:50px;top:80px;">
				<input type="email" id="email" name="email"/> <label for="email" required >EMAIL ID*</label>
			</div>
		     <div style="position:absolute;left:50px;top:150px;">
				<input type="password" id="pwd" name="pass"/> <label for="pass" required >PASSWORD</label>
			</div>
            
            <div style="position:absolute;left:50px;top:230px;">
				<input type="submit" id="sub" value="Login"/> 
			</div>
 
</form>
<a href="Registration.php" target="_blank">Create Your Account</a>
<a href="#" style="text-decoration:none;

position:absolute;
left:280px;
top:300px;border-left:1px solid #ccc;padding-left:35px">Forgot Password?</a>
</div>

</div>

</div>


	<script type="text/javascript">

	$(".flp label").each(function() {
		var sop = '<span class="ch">'; //span opening
		var scl = '</span>'; //span closing
		//split the label into single letters and inject span tags around them
		$(this).html(sop + $(this).html().split("").join(scl + sop) + scl);
		//to prevent space-only spans from collapsing
		$(".ch:contains(' ')").html("&nbsp;");
	})

	var d;
	//animation time
	$(".flp input").focus(
			function() {
				//calculate movement for .ch = half of input height
				var tm = $(this).outerHeight() / 2 * -1 + "px";
				//label = next sibling of input
				//to prevent multiple animation trigger by mistake we will use .stop() before animating any character and clear any animation queued by .delay()
				$(this).next().addClass("focussed").children().stop(true)
						.each(function(i) {
							d = i * 50;//delay
							$(this).delay(d).animate({
								top : tm
							}, 200, 'easeOutBack');
							
						})
			})
	$(".flp input").blur(
			function() {
				//animate the label down if content of the input is empty
				if ($(this).val() == "") {
					$(this).next().removeClass("focussed").children().stop(
							true).each(function(i) {
						d = i * 50;
						$(this).delay(d).animate({
							top : 0
						}, 500, 'easeInOutBack');
					})
				}
				
			})
			</script>
</body>
</html>