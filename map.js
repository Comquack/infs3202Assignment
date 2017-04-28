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
 //var geocoder = new google.maps.Geocoder();



      function initMap() {
				var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: {lat: 0, lng: 0}
});

$.ajax({
  type: 'GET',
  url: '../mapcall.php',
  success: function (data) {
	  console.log(data);
     document.getElementsByTagName("airport").innerHTML = data; 
	 		
  }
});

        /*request.onreadystatechange = function() {
			var xml = request.responseXML;
            var airports = xml.documentElement.getElementsByTagName('airports');
            Array.prototype.forEach.call(airports, function(markerElem) {
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));
              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
            });

		}*/


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
	  

	  
	  
