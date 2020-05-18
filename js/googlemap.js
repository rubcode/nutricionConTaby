//Google maps
function initMap() {
	var uluru = {lat: 19.328095389199227, lng: -99.12459919910185};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 18,
		center: uluru
	});
	var marker = new google.maps.Marker({
		position: uluru,
		map: map
	});
}