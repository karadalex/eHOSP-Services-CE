var xmlhttp = new XMLHttpRequest();
var url = "data/diagnosis.json";

// Parse JSON file and call selectList function
xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var diagnosisJSON = JSON.parse(xmlhttp.responseText);
		selectList(diagnosisJSON, "pathologies-section");
    }
};

xmlhttp.open("GET", url, true);
xmlhttp.send();

// Creates an HTML select list, (using <select> tag)
function selectList(json, primaryKey) {
	var output = '<select>';
	var object = json[primaryKey];
	for (key in object) {
		output += '<option ' + 'value=' + '"' + key + '">' + key + '</option>';
	}
	output += '</select>';
	var update = document.getElementById('diagnosis-form');
	update.innerHTML += output;
}
