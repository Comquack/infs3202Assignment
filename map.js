var API = "AIzaSyCMy7POvCCYeCbQz5TO49LqidMkCEFin_A" 
 var map;
 var pos;
  var Label = {
        Home: {
          label: 'H'
        },
        Airport: {
          label: 'A'
        }
      };
      function initMap() {
				map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: {lat: 0, lng: 0}
});
var geocoder = new google.maps.Geocoder();
var markers;
$.ajax({
  type: 'GET',
  url: '../mapcall.php',
  success: function (data) {
	   $(data).find("airports").each(function(){
		var address = $(this).attr("address");
		geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            var marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location
			})
			marker.addListener('click', function() {
			var directionsService = new google.maps.DirectionsService();
			directionsDisplay = new google.maps.DirectionsRenderer();
			 var request = {
				origin: pos,
				destination: results[0].geometry.location,
				travelMode: 'DRIVING'
			};
			directionsDisplay.setMap(map);
			directionsService.route(request, function(result, status) {
    if (status == 'OK') {
      directionsDisplay.setDirections(result);
    }
  });


        });
			}
		})

   });
  }
});



if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            pos = {
              lat: position.coords.latitude,
			  lng: position.coords.longitude
			}
			var centre = new google.maps.LatLng(pos);
			map.panTo(centre);
			var icon = Label["Home"] || {};
			var marker = new google.maps.Marker({
				position: centre,
				map: map,
				label: icon.label
			});
	
            }, function() {

		})};
      }
	  

	  
	  
