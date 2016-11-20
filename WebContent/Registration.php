<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Sign Up | Create XXX Account</title>
<link href='http://fonts.googleapis.com/css?family=Roboto'
	rel='stylesheet' type='text/css'>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css"
	rel="stylesheet" type="text/css">

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="Style/RegisterCSS.css" rel="stylesheet">
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




	<div class="regPanel">

	<img src="Images\reg.jpg" width="500dp" height="720dp" style="margin-left:100px;">
	<div style="position:absolute;left:100px;top:50px;width:500px;height:720px;background:rgba(230,2,6,0.7)">
	<i class="fa fa-check" aria-hidden="true" style="margin:300px 200px;font-size:50px;padding:20px;background:#ccc;border-radius:50%;"></i>
	<p align="center" style="margin: -280px 100px;font-size:25px;color:white">CREATE ACCOUNT<br> FOR FREE</p>
	
	</div>
	
	
	
		<form class="regform" method="post" action="Registration_Script.php" name="reg" >

				<h3 >CREATE  FASTCAB  ACCOUNT</h3><br>
<table >
	
	<tr>
				<td><label for="fullname">FIRST NAME</label><br>
				<input type="text" id="fullname" name="fullname" class="inputs" required="required" size="31"/></td>
				
				<td><label for="fullname">LAST NAME</label><br>
				<input type="text" id="fullname" name="fullname" class="inputs" required="required" size="31"/><br></td>
	</tr>
	
	<tr>
				<td colspan="2"><label for="contact">MOBILE</label><br>
				<input type="text" id="contact" maxlength="10" name="contact" class="inputs" required="required" size="72"/> </td>
	</tr>		

	<tr>
		<td colspan="2"><label for="email">EMAIL ID</label><br>
			<input type="email" id="email" name="email" class="inputs" required="required" size="72"/> </td>
	</tr>
		
	<tr>
	
		<td ><label for="zip">ZIP CODE</label><br>
		<input type="text" id="zip" name="zip" class="inputs" required="required" size="31"/> </td>

		<td ><label >LOCATION</label><br>
		<input type="text" id="zip" name="zip" class="inputs" required="required" size="31"/></td>

	</tr>	


	<tr><td colspan="2"><span>SECURITY</span></td></tr>
	<tr>
	
			<td colspan="2"><label for="pwd">CREATE PASSWORD</label><br>
			<input type="password" id="pwd" class="inputs" name="pwd" required="required" onchange="CheckPassword(document.reg.pwd)" size="72"/> </td>
			
	</tr>
	
	<tr>
				<td colspan="2"><label for="cpwd">CONFIRM PASSWORD</label><br>
				<input type="password" id="cpwd" name="pass" class="inputs" required="required" onchange="matchPass()" size="72"/> </td>
				
	</tr>
			
	<tr>

				<td colspan="2"><input type="checkbox" name="checkboxG4" id="checkboxG4"
					class="css-checkbox" required="required"/><label for="checkboxG4" class="css-label"></label>
				<p style="margin-left: 30px;margin-top:-15px; font-size: 12px;">
					I accept the <a href="Terms&Condition.php" style="color: #e25">Terms and
						Condition</a> and would like to continue.
				</p></td>
				
	</tr>
		
		<tr>
			<td colspan="2"><input type="submit" value="Create My Account" name="sbmt"
				id="register" disabled></td>
				
		</tr>
				
				</table>
		</form>
	</div>

	<script src="http://thecodeplayer.com/u/js/jquery.easing.min.js"
		type="text/javascript"></script>

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