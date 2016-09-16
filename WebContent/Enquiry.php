
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Enquiry | Ask Anything You Want.</title>
<link href="Style/Home.css" rel="stylesheet">

<style type="text/css">



#msform{
	width: 800px;
	margin: 100px auto;
	text-align: center;
	position: relative;
	font-family:YU GOTHIC LIGHT;
}

#msform fieldset{
	background: white;
	border: 0 none;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 50px 50px;
	box-sizing: border-box;
	width: 90%;
	margin: 0 10%;
	position: absolute;
}

#msform fieldset:not(:first-of-type){
display:none;
}

#msform input,#msform textarea{
	padding: 8px;
	border: 1px solid #ccc;
	margin-bottom: 10px;
	width: 80%;
	box-sizing: border-box;
	color: #2C3E50;
	font-size: 15px;
}

#msform .action-button{

	width: 150px;
	background: #67a925;
	color: white;
	border: 0 none;
	border-radius: 0px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
	transition:all 0.3s ease-in-out;
}
#msform .action-button:hover{

	background: #4a7a1b;

	
}
.fs-title {
	font-size: 18px;
	font-weight:normal;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}

</style>

</head>
<body bgcolor="#ccc">
<div class="header1">

		<a href="#" style="border:none;">BOOKING STATUS </a> <a href="CancelBooking.php">CANCELLATION </a> <a
			href="Enquiry.php" style="color:#5695e0">ENQUERY </a>
	</div>
	<div class="header2">


		<a href="Faq.php">FAQ </a> <a href="ContactUs.php" >CONTACT US </a> <a href="Tariffs.php">TARIFFS
		</a> <a href="Gallery.php">GALLERY</a> <a href="Service.php">SERVICES </a> <a href="BookCab.php">BOOK
			FOR RIDE</a> <a href="HomePage.html">HOME
		</a>
	</div>
	
		
<div
		style="position: absolute; top: 120px; left: 0px; width: 1366px; height: 533px;z-index: -2;">

		<form id="msform" method="post" action="FIR">
	
		
			<fieldset>
				<h2 class="fs-title">ENTER YOUR FULL NAME HERE</h2>
				<input type="text" name="name">
				
				<input type="button" name="next" value="Next" class="next action-button">
			</fieldset>
			
			<fieldset>
				<h2 class="fs-title">ENTER YOUR EMAIL ID</h2>
				 <input type="email" name="name">
				<input type="button" name="previous" value="Previous" class="previous action-button">
				<input type="button" name="next" value="Next" class="next action-button">
			</fieldset>
			
			<fieldset>
				<h2 class="fs-title">ENTER YOUR SUBJECT</h2>
				<input type="text" name="c_date">
				<input type="button" name="previous" value="Previous" class="previous action-button">
				<input type="button" name="next" value="Next" class="next action-button">
			</fieldset>
			
			<fieldset>
				<h2 class="fs-title" >TYPE YOUR QUERY</h2>
				<textarea name="c_desc"></textarea>
				<input type="button" name="previous" value="Previous" class="previous action-button">
				<input type="button" name="next" value="Next" class="next action-button">
			</fieldset>
			
		</form>



	</div>

	<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>

<script>
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 200, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 200, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});


</script>
</body>
</html>