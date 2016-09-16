<html> 
   <head> 
     <title>Contact Us | Find Us on Map.</title> 
     <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
     <script type="text/javascript"> 
   var directionDisplay; 
   var map; 
    
   function initialize() { 
    directionsDisplay = new google.maps.DirectionsRenderer(); 
     var melbourne = new google.maps.LatLng(-37.813187, 144.96298); 
    var myOptions = { 
      zoom:12, 
      mapTypeId: google.maps.MapTypeId.ROADMAP, 
       center: melbourne 
     } 
      
     map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 
     directionsDisplay.setMap(map); 
   } 
   var directionsService = new google.maps.DirectionsService(); 
    
       function calcRoute() { 
      var start = document.getElementById("start").value; 
      var end = document.getElementById("end").value; 
      var distanceInput = document.getElementById("distance");
      var request = { 
       origin:start, 
       destination:end, 
        travelMode: google.maps.DirectionsTravelMode.DRIVING 
     }; 
      
     directionsService.route(request, function(response, status) { 
        if (status == google.maps.DirectionsStatus.OK) { 
         directionsDisplay.setDirections(response); 
         distanceInput.value = response.routes[0].legs[0].distance.value / 1000;
        } 
      }); 
    } 

</script> 
     
     <style type="text/css"> 
       #map_canvas { 
         height: 100%; 
       } 
     </style> 
  </head> 
 <body onload="initialize()">
    
     <div id="map_canvas"></div> 
     <label>Hello<a href="#">This is alink</a></label>
   </body> 
 </html> 
