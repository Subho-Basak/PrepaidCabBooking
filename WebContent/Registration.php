<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Sign Up | Create XXX Account</title>
<link href='http://fonts.googleapis.com/css?family=Roboto'
	rel='stylesheet' type='text/css'>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css"
	rel="stylesheet" type="text/css">
<link href="Style/Home.css" rel="stylesheet">
<link rel="stylesheet" href="Style/calendar.css">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="jquery-2.1.4.js"></script>
<link rel="stylesheet" href="Style\Checkbox.css" />

<style type="text/css">
label.css-label {
	background-image: url("Images/csscheckbox.png");
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

a.tooltip {outline:none; float:right;margin-top:5px;}
a.tooltip strong {line-height:30px;}
a.tooltip:hover {text-decoration:none;} 
a.tooltip span {
    z-index:10;display:none; padding:24px 10px;
    margin-top:-30px; margin-left:18px;
    width:300px; line-height:16px;
}
a.tooltip:hover span{
    display:inline; position:absolute; color:#111;
    border:1px solid #DCA; background:#fffAF0;}
.callout {z-index:20;position:absolute;top:30px;border:0;left:-12px;}
    
/*CSS3 extras*/
a.tooltip span{
font-size:12px;
    border-radius:4px;
    box-shadow: 5px 5px 8px #CCC;
}
</style>

</head>
<body bgcolor="#ccc">

	<div class="header1">



		<a href="#" style="border: none;">BOOKING STATUS </a> <a href="#">CANCELLATION
		</a> <a href="Enquiry.php">ENQUERY </a>
	</div>
	<div class="header2">


		<a href="Faq.php">FAQ </a> <a href="ContactUs.php">CONTACT US </a> <a
			href="#">TARIFFS </a> <a href="Gallery.php">GALLERY</a> <a href="Service.php">SERVICES
		</a> <a href="BookCab.php">BOOK FOR RIDE</a> <a href="HomePage.html">HOME
		</a>
	</div>




<canvas id="canvas" width="400" height="400"></canvas>
<label style=position:absolute;left:1005px;top:300px;color:#4a7a1b>Completed!</label>
	<div class="form1"
		style="width: 500px; margin-left: 400px; margin-top: -120px;height:1000px">

		<h5 style="margin-left:85px">CREATE  FASTCAB  ACCOUNT</h5>
		
		
		
		<form class="flp" method="post" action="Registration_Script.php" name="reg" >


			<div style="position: absolute; left: 35px; top: 150px;">
				<input type="text" id="fullname" name="fullname" onblur="getName()" class="inputs" required="required"/>
				<label for="fullname">FULL NAME*</label>
			</div>


			<div style="position: absolute; left: 35px; top: 220px;">
				<input type="text" id="contact" maxlength="10" name="contact" class="inputs" required="required"/> <label
					for="contact">PHONE NO(+XX)XXX-XXX-XXXX</label>
			</div>



			<div style="position: absolute; left: 35px; top: 290px;">
				<input type="text" id="zip" name="zip" class="inputs" required="required"/> <label for="zip">ZIP CODE</label>
			</div>

			<div style="position: absolute; left: 35px; top: 360px;">
				<input type="email" id="email" name="email" class="inputs" required="required"/> <label for="email">EMAIL ID*</label>
			</div>

<label style="position:absolute;top:430px;left:20px;">CHOOSE LOCATION</label>

			<div data-select-box
				style="position: absolute; left: 235px; top: 470px;">
				<select id="myList" name="loc" required="required">
					<option value="1">MUMBAI</option>
					<option value="2">DELHI</option>
					<option value="3">BANGALORE</option>
					<option value="4">PUNE</option>
					<option value="5">CHENNAI</option>
					<option value="6">DIBRUGARH</option>
					<option value="7">ROORKEE</option>
					<option value="8">JABALPUR</option>
					<option value="9">NOIDA</option>
					<option value="10">GAYA</option>
					<option value="11">RAIPUR</option>
					<option value="12">SILLIGURI</option>
					<option value="13">ALLAHABAAD</option>
					<option value="14">HARIDWAR</option>
					<option value="15">THIRUVANANTHAPURAM</option>
					<option value="16">ALIGARH</option>
					<option value="17">VARANASI</option>
					<option value="18">THANJAVUR</option>
					<option value="19">PONDICHERRY</option>
					<option value="20">AGRA</option>
					<option value="22">WARANGAL</option>
					<option value="23">TIRUPATI</option>
					<option value="24">DURGAPUR</option>
					<option value="25">RAURKELLA</option>
					<option value="12">KOLHAPUR</option>
					<option value="12">GOA</option>
					<option value="12">JAIPUR</option>
					<option value="12">HAIDERABAD</option>
					<option value="12">CHANDIGARH</option>
					<option value="12">AHMEDABAAD</option>
					<option value="12">SURAT</option>
					<option value="12">INDORE</option>
					<option value="12">LUCKNOW</option>
					<option value="12">AMRITSAR</option>
					<option value="12">LUDHIANA</option>
					<option value="12">VISHAKHAPATNAM</option>
					<option value="12">COIMBATORE</option>
					<option value="12">NAGPUR</option>
					<option value="12">VADODARA</option>
					<option value="12">KOLKATA</option>
					<option value="12">MADURAI</option>
					<option value="12">TIRUCHIRAPALLY</option>
					<option value="12">RAJKOT</option>
					<option value="12">MORADABAAD</option>
					<option value="12">MATHURA</option>
					<option value="12">AMRABATI</option>
					<option value="12">UDAIPUR</option>
					<option value="12">MYSORE</option>
					<option value="12">SALEM</option>
					<option value="12">BALLARI</option>
					<option value="12">PATIALA</option>
					<option value="12">JODHPUR</option>
					<option value="12">PATNA</option>
					<option value="12">GWALIOR</option>
					<option value="12">RANCHI</option>
					<option value="12">UJJAIN</option>
					<option value="12">GUWAHATI</option>
					<option value="12">BHUBANESHWAR</option>
					<option value="12">JAMSHEDPUR</option>
					<option value="12">AJMER</option>
					<option value="12">CUTTACK</option>
					<option value="12">DEHRADUN</option>
					<option value="12">KANPUR</option>
					<option value="12">KOCHI</option>
					<option value="12">BHOPAL</option>

				</select>
			</div>

		<div style="position: absolute; left: 35px; top: 540px;">
				<input type="password" id="pwd" class="inputs" name="pwd" required="required" onchange="CheckPassword(document.reg.pwd)"/> <label for="pwd">CREATE PASSWORD</label>
			
			<label id="check" style="position:absolute;left:330px;top:0px;font-size:15px;"></label>
			<a href="#" class="tooltip"><img src="Images/info.png"><span><img class="callout" src="Images/callout.gif" /><b>Note:</b> Password must be minimum 8 character long and must contain at least one Uppercase letter. </span></a>

			
			</div>
			
		<div style="position: absolute; left: 35px; top: 610px;">
				<input type="password" id="cpwd" name="pass" class="inputs" required="required" onchange="matchPass()"/> <label for="cpwd">CONFIRM PASSWORD</label>
			</div>
			
            <label style="position:absolute;top:680px;left:20px;">CHOOSE A SECURITY QUESTION ?</label>
            
			<div data-select-box
				style="position: absolute; left: 235px; top: 720px;">
				<select  name="sqst" required="required">
					<option >What is Your Favourie Food?</option>
					<option >Who is Your Favourite Author?</option>
					<option >What is Your Mother's Maiden Name?</option>
					<option >What is Your Favourite color?</option>
					<option >What was the Name of Your Elementary / Primary School?</option>
					<option >In What City or Town does Your Nearest Sibling Live?</option>
					<option >What is Youf First Mobile Number?</option>
			
</select>
</div>

            <div style="position: absolute; left: 35px; top: 790px;">
				<input type="text" id="sq" name="s_ans" class="inputs" required="required"/> <label for="sq">YOUR SECURITY ANSWER...</label>
			</div>

            
			<div style="position: absolute; top: 860px; left: 35px;">

				<input type="checkbox" name="checkboxG4" id="checkboxG4"
					class="css-checkbox" required="required"/><label for="checkboxG4" class="css-label"></label>
				<p style="margin-left: 90px; font-size: 15px;">
					I accept the <a href="Terms&Condition.php" style="color: #e25">Terms and
						Condition</a> and <br>would like to continue.
				</p>

			</div>
			<input type="submit" value="Create My Account" name="sbmt"
				id="register" disabled>
		</form>
	</div>

	<script src="http://thecodeplayer.com/u/js/jquery.easing.min.js"
		type="text/javascript"></script>

	<script src="js/TextAnimation.js"></script>
	<script src="js/custom-select.js"></script>

	<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		
	</script>

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push([ '_setAccount', 'UA-36251023-1' ]);
		_gaq.push([ '_setDomainName', 'jqueryscript.net' ]);
		_gaq.push([ '_trackPageview' ]);

		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl'
					: 'http://www')
					+ '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();

		var lb = document.getElementById('myList');
		arrTexts = new Array();

		for (i = 0; i < lb.length; i++) {
			arrTexts[i] = lb.options[i].text;
		}

		arrTexts.sort();

		for (i = 0; i < lb.length; i++) {
			lb.options[i].text = arrTexts[i];
			lb.options[i].value = arrTexts[i];
		}
	</script>

	<script src="js/calendar.js"></script>
	<script>
		$('#dd').calendar({
			trigger : '#dt',
			//offset: [0, 1],
			zIndex : 1000,
			onSelected : function(view, date, data) {
				console.log('event: onSelected')
			},
			onClose : function(view, date, data) {
				console.log('event: onClose')
				console.log('view:' + view)
				console.log('date:' + date)
				console.log('data:' + (data || 'None'));
			}
		});
		
		
	</script>

<script type="text/javascript">


window.onload = function(){
	var count=0;
	$(document).ready(function(){
	    $('.inputs').on('change', function(){
	        var cntreq = 0;
	        var cntvals = 0;
	        $('.inputs').each(function(i, val) {
	            if($('.inputs').attr('required') == 'required') {
	                cntreq++;
	                if($(this).val() != '' && $('#mylist').val() !='SELECT LOCATION') {
	                    cntvals++;
	                }
	            }
	        });
	         count = ((cntvals/cntreq)*100).toFixed(0);
	       
	      draw(count);
	    });
	});
	
	
	//canvas initialization
	var canvas = document.getElementById("canvas");
	var ctx = canvas.getContext("2d");
	//dimensions
	var W = canvas.width;
	var H = canvas.height;
	//Variables
	var degrees = 0;
	var new_degrees = 0;
	var difference = 0;
	var color = "#4a7a1b"; //green looks better to me
	var bgcolor = "#ccc";
	var text;
	var animation_loop, redraw_loop;
	
	function init()
	{
		//Clear the canvas everytime a chart is drawn
		ctx.clearRect(0, 0, W, H);
		
		//Background 360 degree arc
		ctx.beginPath();
		ctx.strokeStyle = bgcolor;
		ctx.lineWidth = 3;
		ctx.arc(W/2, H/2, 100, 0, Math.PI*2, false); //you can see the arc now
		ctx.stroke();
		
		//gauge will be a simple arc
		//Angle in radians = angle in degrees * PI / 180
		var radians = degrees * Math.PI / 180;
		ctx.beginPath();
		ctx.strokeStyle = color;
		ctx.lineWidth = 3;
		//The arc starts from the rightmost end. If we deduct 90 degrees from the angles
		//the arc will start from the topmost end
		ctx.arc(W/2, H/2, 100, 0 - 90*Math.PI/180, radians - 90*Math.PI/180, false); 
		//you can see the arc now
		ctx.stroke();
		
		//Lets add the text
		ctx.fillStyle = color;
		ctx.font = "50px century gothic";
		text = count + "%";
		//Lets center the text
		//deducting half of text width from position x
		text_width = ctx.measureText(text).width;
		//adding manual value to position y since the height of the text cannot
		//be measured easily. There are hacks but we will keep it manual for now.
		ctx.fillText(text, W/2 - text_width/2, H/2 + 15);
	}
	
	function draw(count)
	{
		//Cancel any movement animation if a new chart is requested
		//if(typeof animation_loop != undefined) clearInterval(animation_loop);
		
		//random degree from 0 to 360
		new_degrees = ((count/100)*360);
		//difference = new_degrees - degrees;
		//This will animate the gauge to new positions
		//The animation will take 1 second
		//time for each frame is 1sec / difference in degrees
		animation_loop = setInterval(animate_to, 1000/new_degrees);
	}
	
	//function to make the chart move to new degrees
	function animate_to()
	{
		//clear animation loop if degrees reaches to new_degrees
		if(degrees == new_degrees){
			clearInterval(animation_loop);
		}
		if(degrees < new_degrees)
			degrees++;
		else
			degrees--;
			
		init();
	}
	
	//Lets add some animation for fun
	draw(0);
	//redraw_loop = setInterval(draw, 2000); //Draw a new chart every 2 seconds
	
	
	
	
}

$(function() {
    $('#checkboxG4').click(function() {
        if ($(this).is(':checked')) {
            
            $('#register').removeAttr('disabled');
        } else {
        	$('#register').attr('disabled', 'true');
        }
    });
});

function CheckPassword(inputtxt)   
{   
var passw=  /^[A-Za-z]\w{8,}$/;  
if(inputtxt.value.match(passw))   
{   
$('#check').html('&#10004;');
$('#check').css({'color':'green'});
return true;  
}  
else  
{   
	$('#check').html('&#10006;');
	$('#check').css({'color':'red'});
	$('#pwd').val("");
return false;  
}  
}

function matchPass(){
	var pwd=document.getElementById("pwd").value;
	var cpwd=document.getElementById("cpwd").value;
	
	if(pwd==cpwd){
		alert("Equal : OK");
	}else{
		alert("Unequal : Try Again!");
	document.getElementById("cpwd").value="";
	}
}
</script>

</body>
</html>