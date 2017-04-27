var API = "AIzaSyCMy7POvCCYeCbQz5TO49LqidMkCEFin_A" 
 var map;
  var Label = {
        Home: {
          label: 'H'
        },
        Airport: {
          label: 'A'
        }
      };



      function initMap() {
				var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: {lat: 0, lng: 0}
});

if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
			  lng: position.coords.longitude
			}
			console.log(pos);
			var centre = new google.maps.LatLng(pos);
			console.log(centre);
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
	  

	  
	  
