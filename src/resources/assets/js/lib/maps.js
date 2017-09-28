var map = L.map('map', {
    attributionControl: false
}).setView([37.944, 24.115], 6);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);


var markers = new L.FeatureGroup();
setTimeout(function() {
    for (var i=0; i<gis_nodes.length; i++) {
    	var node_marker = L.marker([gis_nodes[i]["latitude"], gis_nodes[i]["longitude"]]);
    	markers.addLayer(node_marker);
    }
}, 1000);


var gis_remote_nodes_isPressed = false;

function gis_remote_nodes() {
	if (!gis_remote_nodes_isPressed) {
		map.addLayer(markers);
	}
	else {
		removeAllMarkers();
	}
	gis_remote_nodes_isPressed = !gis_remote_nodes_isPressed;
	return gis_remote_nodes_isPressed;
}

function removeAllMarkers(){
    map.removeLayer(markers);
}
