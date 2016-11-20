<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Material Design Inspired Tabs Modal Demo</title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
/* CSS reset */



html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline
}

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block }

body { line-height: 1 }

ol, ul { list-style: none }

blockquote, q { quotes: none }

blockquote:before, blockquote:after, q:before, q:after {
  content: '';
  content: none
}

table {
  border-collapse: collapse;
  border-spacing: 0
}

html {
  width: 100%;
  height: 100%;
}

body {
  background: #ccc;
  color: rgba(0, 0, 0, 0.6);
  font-family: "Roboto", sans-serif;
  font-size: 14px;
  line-height: 1.6em;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
 [ripple] {
 z-index: 1;
 position: relative;
 overflow: hidden;
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
  top:00px;
  left:400px;
  background: #FFFFFF;
  width: 600px;
  border-radius: 4px;
  box-sizing: border-box;
  margin: 150px auto 10px;
  overflow: hidden;
}

.tabs-header {
  position: relative;
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


  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
  
}

.tabs-header a {
  z-index: 1;
  display: block;
  box-sizing: border-box;
  padding: 15px 20px;
  color: #999;
  font-weight: 500;
  text-decoration: none;
  text-transform: uppercase;
}

.tabs-nav {
  position: absolute;
  top: 0;
  right: 0;
  background: #fff;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  height: 100%;
  padding: 0 10px;
  color: #999;

}

.tabs-nav:before {
  content: '';
  z-index: 1;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  box-shadow: 0 0 20px 10px #4285F4;
}

.tabs-nav i {
  border-radius: 100%;
  cursor: pointer;
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
 
<div class="tabs">
  <div class="tabs-header">
    <div class="border"></div>
    <ul>
      <li class="active"><a href="#tab-1" tab-id="1" ripple="ripple" ripple-color="#ccc">General</a></li>
      <li><a href="#tab-2" tab-id="2" ripple="ripple" ripple-color="#ccc">Change Photo</a></li>
      <li><a href="#tab-3" tab-id="3" ripple="ripple" ripple-color="#ccc">Security</a></li>
      <li><a href="#tab-4" tab-id="4" ripple="ripple" ripple-color="#ccc">Tab 4</a></li>
    </ul>
   
  </div>
  <div class="tabs-content">
    <div tab-id="1" class="tab active">1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dictum enim. Aliquam pharetra efficitur quam, eu posuere ipsum venenatis a. Sed gravida eu sapien et pretium. Phasellus ullamcorper metus in dolor pellentesque lacinia. Nulla lacus risus, porta at purus id, faucibus scelerisque erat. Praesent congue sagittis nibh ut lobortis. Donec elit ante, lacinia sed sem non, condimentum pharetra leo. In eu fermentum felis. Suspendisse nec odio id tellus condimentum cursus ac ac orci. Etiam malesuada condimentum magna in consequat.</div>
    <div tab-id="2" class="tab">2. Donec vel nibh tortor. Donec ut nunc luctus, maximus metus at, accumsan purus.</div>
    <div tab-id="3" class="tab">3. Quisque suscipit ipsum velit, id sodales ante porta nec. Etiam ut suscipit nulla, id commodo ex.</div>
    <div tab-id="4" class="tab">4. Maecenas felis risus, mattis a hendrerit ut, placerat lobortis risus. Etiam vel ipsum ut quam interdum volutpat egestas vitae metus. </div>
  </div>
</div>
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
</script><script type="text/javascript">

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
