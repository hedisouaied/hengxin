	if ($('#map-contact').length) {
		var map = L.map('map-contact', {
			zoom: 5,
			maxZoom: 20,
			tap: false,
			gestureHandling: true,
			center: [48.86267341632031, 2.350122588986946]
		});

		map.scrollWheelZoom.disable();

		var Hydda_Full = L.tileLayer('https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
			scrollWheelZoom: false,
			attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);

		var icon = L.divIcon({
			html: '<i class="fa fa-building"></i>',
			iconSize: [50, 50],
			iconAnchor: [50, 50],
			popupAnchor: [-20, -42]
		});

		var marker = L.marker([48.86267341632031, 2.350122588986946], {
			icon: icon
		}).addTo(map);
	}
