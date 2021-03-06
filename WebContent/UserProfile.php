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
<link href="Style/Home.css" rel="stylesheet">
<link href="Style/MyAccount.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<title>My Account | FastCab. </title>

<style type="text/CSS">
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {

  padding: 0;
  border: 0;
  font-size: 100%;
  vertical-align: baseline
}


ol, ul { list-style: none }

blockquote, q { quotes: none }

blockquote:before, blockquote:after, q:before, q:after {
  content: '';
  content: none
}

[ripple] .ripple {
  position: absolute;
  background: #ddd;
  width: 12px;
  height: 12px;
  border-radius: 100%;
  -webkit-animation: ripple 1.6s;
  animation: ripple 1.6s;
}



 @-webkit-keyframes 
ripple {  0% {
 -webkit-transform: scale(1);
 transform: scale(1);
 opacity: 0.2;
}
 100% {
 -webkit-transform: scale(40);
 transform: scale(40);
 opacity: 0;
}
}
 @keyframes 
ripple {  0% {
 -webkit-transform: scale(1);
 transform: scale(1);
 opacity: 0.2;
}
 100% {
 -webkit-transform: scale(40);
 transform: scale(40);
 opacity: 0;
}
}

.tabs {
  z-index: 15px;
  position: fixed;
  top:20px;
  left:400px;
  background: #FFFFFF;
  width: 600px;
  box-sizing: border-box;
  margin: 150px auto 10px;
  overflow: hidden;
  padding:0;
}

.tabs-header {
  position: relative;
  left:0;
  background: #fff;
  overflow: hidden;
}

.tabs-header .border {
  position: absolute;
  bottom: 0;
  left: 0;
  background: #999;
  width: auto;
  height: 2px;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
}

.tabs-header ul {
	margin:0;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  width: calc(100% - 68px);
}

.tabs-header li {

font-size:14px;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
  
}
.tabs-header li i{
background:none;
color:#999;
}
.tabs-header a {
  z-index: 1;
  display: block;
  box-sizing: border-box;
  margin:0;
  padding: 15px 36px;
  color: #999;
  font-weight: 500;
  text-decoration: none;
  text-transform: uppercase;
  
}


.tabs-content {
  position: relative;
  padding: 15px 20px;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
  overflow: hidden;
}

.tabs-content:after {
  content: '';
  position: absolute;
  bottom: -1px;
  left: 0;
  display: block;
  width: 100%;
  height: 1px;

}

.tabs-content .tab { display: none; }

.tabs-content .tab.active { display: block; }


</style>

</head>

<body>

<div class="header1">

	<?php include("Header.php");?>
	</div>
	<div class="header2">
	<?php include("Header2.php");?>
	</div>
	
	<img src="Images\procover.jpg" width="1340dp" height="270dp" style="margin:0;"></img>
	
	    <?php
	$cus_name=$_SESSION['fullname'];
	$loc=$_SESSION['location'];
	$email=$_SESSION['email'];
	?>
	
    <ul class="accountMenu">
    <li><img src="Images\coverimg.jpg"></img></li>
    <li><p style="font-size:16px;color:black"><?php echo $cus_name; ?></p></li>
	<li><p><?php echo $email; ?></p></li>
	<li><p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $loc; ?></p></li>
	<li><button id="editBtn" style="margin-left:30px;font-size:14px"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp; Edit Profile</button></li>
    </ul>



	<div class="accountPanel">

			<button class="dropbtn"><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp;&nbsp;Sign Out</button>
			

		
		
		
		<ul class="accntHdr">
		<li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;Current Booking</li>
		<li><i class="fa fa-history" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;History</li>
		</ul>
		<h3>Current Booking</h3>
		</div>



	<!--edit profile tabs hidden  --> 
  <div style="position:fixed;left:0;top:0px;background:rgba(50,50,50,0.7);width:100%;height:100%;" id="editPanel"> 
  <div class="tabs">
  <div class="tabs-header">
    <div class="border"></div>
    <ul>
      <li class="active"><a href="#tab-1" tab-id="1" ripple="ripple" ripple-color="#ccc"><i class="fa fa-cog" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;General</a></li>
      <li><a href="#tab-2" tab-id="2" ripple="ripple" ripple-color="#ccc"><i class="fa fa-camera" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;Change Photo</a></li>
      <li><a href="#tab-3" tab-id="3" ripple="ripple" ripple-color="#ccc"><i class="fa fa-unlock-alt" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;Security</a></li>
      
    </ul>
   
  </div>
  
  <div class="tabs-content">
    <div tab-id="1" class="tab active">1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dictum enim. Aliquam pharetra efficitur quam, eu posuere ipsum venenatis a. Sed gravida eu sapien et pretium. Phasellus ullamcorper metus in dolor pellentesque lacinia. Nulla lacus risus, porta at purus id, faucibus scelerisque erat. Praesent congue sagittis nibh ut lobortis. Donec elit ante, lacinia sed sem non, condimentum pharetra leo. In eu fermentum felis. Suspendisse nec odio id tellus condimentum cursus ac ac orci. Etiam malesuada condimentum magna in consequat.</div>
    <div tab-id="2" class="tab">2. Donec vel nibh tortor. Donec ut nunc luctus, maximus metus at, accumsan purus.</div>
    <div tab-id="3" class="tab">3. Quisque suscipit ipsum velit, id sodales ante porta nec. Etiam ut suscipit nulla, id commodo ex.</div>
    <div tab-id="4" class="tab">4. Maecenas felis risus, mattis a hendrerit ut, placerat lobortis risus. Etiam vel ipsum ut quam interdum volutpat egestas vitae metus. </div>
  </div>
</div>
    
    </div>
    <!-- js for tab pane -->
    
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
<script>
$(document).ready(function () {

  // Intial Border Position
  var activePos = $('.tabs-header .active').position();

  // Change Position
  function changePos() {

    // Update Position
    activePos = $('.tabs-header .active').position();

    // Change Position & Width
    $('.border').stop().css({
      left: activePos.left,
      width: $('.tabs-header .active').width()
    });
  }

  changePos();

  // Intial Tab Height
  var tabHeight = $('.tab.active').height();

  // Animate Tab Height
  function animateTabHeight() {

    // Update Tab Height
    tabHeight = $('.tab.active').height();

    // Animate Height
    $('.tabs-content').stop().css({
      height: tabHeight + 'px'
    });
  }

  animateTabHeight();

  // Change Tab
  function changeTab() {
    var getTabId = $('.tabs-header .active a').attr('tab-id');

    // Remove Active State
    $('.tab').stop().fadeOut(300, function () {
      // Remove Class
      $(this).removeClass('active');
    }).hide();

    $('.tab[tab-id=' + getTabId + ']').stop().fadeIn(300, function () {
      // Add Class
      $(this).addClass('active');

      // Animate Height
      animateTabHeight();
    });
  }

  // Tabs
  $('.tabs-header a').on('click', function (e) {
    e.preventDefault();

    // Tab Id
    var tabId = $(this).attr('tab-id');

    // Remove Active State
    $('.tabs-header a').stop().parent().removeClass('active');

    // Add Active State
    $(this).stop().parent().addClass('active');

    changePos();

    // Update Current Itm
    tabCurrentItem = tabItems.filter('.active');

    // Remove Active State
    $('.tab').stop().fadeOut(300, function () {
      // Remove Class
      $(this).removeClass('active');
    }).hide();

    // Add Active State
    $('.tab[tab-id="' + tabId + '"]').stop().fadeIn(300, function () {
      // Add Class
      $(this).addClass('active');

      // Animate Height
      animateTabHeight();
    });
  });

  // Tab Items
  var tabItems = $('.tabs-header ul li');

  // Tab Current Item
  var tabCurrentItem = tabItems.filter('.active');

  // Next Button
  $('#next').on('click', function (e) {
    e.preventDefault();

    var nextItem = tabCurrentItem.next();

    tabCurrentItem.removeClass('active');

    if (nextItem.length) {
      tabCurrentItem = nextItem.addClass('active');
    } else {
      tabCurrentItem = tabItems.first().addClass('active');
    }

    changePos();
    changeTab();
  });

  // Prev Button
  $('#prev').on('click', function (e) {
    e.preventDefault();

    var prevItem = tabCurrentItem.prev();

    tabCurrentItem.removeClass('active');

    if (prevItem.length) {
      tabCurrentItem = prevItem.addClass('active');
    } else {
      tabCurrentItem = tabItems.last().addClass('active');
    }

    changePos();
    changeTab();
  });

  // Ripple
  $('[ripple]').on('click', function (e) {
    var rippleDiv = $('<div class="ripple" />'),
      rippleOffset = $(this).offset(),
      rippleY = e.pageY - rippleOffset.top,
      rippleX = e.pageX - rippleOffset.left,
      ripple = $('.ripple');

    rippleDiv.css({
      top: rippleY - (ripple.height() / 2),
      left: rippleX - (ripple.width() / 2),
      background: $(this).attr("ripple-color")
    }).appendTo($(this));

    window.setTimeout(function () {
      rippleDiv.remove();
    }, 1500);
  });
});
</script>


<script type="text/javascript">

$(document).ready(function(){
	$("#editPanel").fadeOut(300);
	
	$("#editBtn").click(function(){
	$("#editPanel").fadeIn(300);	
	});
});
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>