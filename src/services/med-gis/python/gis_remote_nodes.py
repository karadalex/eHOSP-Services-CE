# Open csv file and parse its contents
csvDataFile = open("../data/gis_remote_nodes.csv", "r")
dataArray = []
for line in csvDataFile:
	dataArray.append(line.split(";"))
csvDataFile.close()


# Javascript code to add a marker at a specific location
js_code_marker = '''
L.marker([{latitude}, {longitude}]).addTo(map);
'''

# Create Javascipt file
js_file =  open("../js/gis_remote_nodes.js", "a+")
commands = ""
for i in range(len(dataArray)):
	commands += js_code_marker.format(
		latitude = dataArray[i][6],
		longitude = dataArray[i][7]
	)
js_file.write(commands)
js_file.close()