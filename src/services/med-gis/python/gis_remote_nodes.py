# Open csv file and parse its contents
csvDataFile = open("../data/gis_remote_nodes.csv", "r")
dataArray = []
for line in csvDataFile:
	dataArray.append(line.split(";"))
csvDataFile.close()


# Javascript code to add a marker at a specific location
coord_array = \
''' 
var coordinates_array = [
	{coordinates}
];
'''
js_remote_nodes_code = \
'''
var markers = new L.FeatureGroup();
for (var i=0; i<coordinates_array.length; i++) {
	var marker = L.marker(coordinates_array[i]);
	markers.addLayer(marker);
}
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
'''
single_array = "\t[{latitude}, {longitude}],\n"

coords = ""
for i in range(len(dataArray)-1):
	coords += single_array.format(
		latitude = dataArray[i][6],
		longitude = dataArray[i][7]
	)
# Avoid comma and new-line in the last entry
coords += "\t[{latitude}, {longitude}]".format(
		latitude = dataArray[i+1][6],
		longitude = dataArray[i+1][7]
	)
js_remote_nodes_code = coord_array.format(coordinates = coords) + js_remote_nodes_code

# Create Javascipt file
js_file =  open("../js/gis_remote_nodes.js", "a+")
js_file.write(js_remote_nodes_code)
js_file.close()