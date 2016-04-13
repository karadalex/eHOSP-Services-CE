var xmlhttp = new XMLHttpRequest();
var url = "data/diagnosis.json";

// Parse JSON file and call selectList function
xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        // Define Global variable holding JSON
        diagnosisJSON = JSON.parse(xmlhttp.responseText);
        document.getElementById('diagnosis-form').innerHTML = '<h5>Please select a category below:</h5><br>';
        selectList(diagnosisJSON, "pathologies-section");

    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

$(document).on('click', function() {
    $(document).ready(function() {
        $('#pathologies-section').change(function() {
            // Grab the value selected
            var selection = this.value;
            document.getElementById('diagnosis-form').innerHTML += '<h5>Please select a sub-category for ' + selection + ' below:</h5><br>';
            selectList(diagnosisJSON["pathologies-section"], selection);
        });
    });
});

// Creates an HTML select list, using <select> tag, with id be the primaryKey
function selectList(json, primaryKey) {
	var output = '<select id="' + primaryKey + '">';
	var object = json[primaryKey];
	for (key in object) {
		output += '<option ' + 'value=' + '"' + key + '">' + key + '</option>';
	}
	output += '</select>';
	var update = document.getElementById('diagnosis-form');
	update.innerHTML += output;
}
