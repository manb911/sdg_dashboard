
<?php include '../lib/header.php'; ?>

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html {
        height: 100%;
        margin: 0;
        padding: 0;
		text-align: center;
      }

      #map {
        height: 500px;
        width: 600px;
      }
    </style>
<?php 
    if($sysrole == 'Publisher' && $dash_url == '/PB190006' || $sysrole == 'admin'){
        echo '<div id="map"></div>';
    }else{
        echo 'Unauthorized Access';
    }
?>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script>

      function initMap() {
			var mapOptions = {
			  center: {lat: 13.847860, lng: 100.604274},
			  zoom: 14,
			}
				
			var maps = new google.maps.Map(document.getElementById("map"),mapOptions);

			var marker, info;
                        /*
			$.getJSON( "../lib/map_json.php", function( jsonObj ) {
					//*** loop
					$.each(jsonObj, function(i, item){
						marker = new google.maps.Marker({
						   position: new google.maps.LatLng(item.LAT, item.LNG),
						   map: maps,
						   title: item.LOC_NAME
						});

					  info = new google.maps.InfoWindow();

					  google.maps.event.addListener(marker, 'click', (function(marker, i) {
						return function() {
						  info.setContent(item.LOC_NAME);
						  info.open(maps, marker);
						}
					  })(marker, i));

					}); // loop

			 });*/

		}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU9vt_Asb0LSmkizxmWHwdhOmNxDzEgPw&callback=initMap">
    </script>

<?php include '../lib/footer.php'; ?>
