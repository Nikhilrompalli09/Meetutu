<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple Markers</title> 
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAapWo3qUUBvPD8L55bDSsQ6Q1kt9HCrPo"></script>
</head> 

<body>
  <div id="map" style="width:100%;height:800px"></div>

  <script type="text/javascript">
    var locations = [
      ['learner', 17.822835, 83.362911],
      ['teacher', 17.928067, 83.424331],
      ['teacher', 17.746412, 83.238556],
      ['learner', 18.1066576, 83.39555059999998],
      ['teacher', 18.2969747, 83.89678129999993]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 9,
      center: new google.maps.LatLng(17.822835, 83.362911),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.setContent(window.location.href = "userProfile.php");
          infowindow.open(map, marker);
          // window.location.href = this.url;
        }
      })(marker, i));
    }
  </script>
</body>
</html>
