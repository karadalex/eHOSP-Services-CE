var xmlhttp = new XMLHttpRequest();
var url = "data/diagnosis.json";
selection = "";

// Parse JSON file and call selectList function
xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        // Define Global variable holding JSON
        diagnosisJSON = JSON.parse(xmlhttp.responseText);
        selectList(diagnosisJSON, "pathologies-section", "diagnosis_form_1");

    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

$(document).on('click', function() {
    $(document).ready(function() {
        $('#pathologies-section').change(function() {
            // Grab the value selected
            selection = this.value;
            document.getElementById('diagnosis_form_2').innerHTML = '<h5>Please select a sub-category for ' + selection + ' below:</h5><br>';
            document.getElementById('diagnosis_form_3').innerHTML = '';
            selectList(diagnosisJSON["pathologies-section"], selection, "diagnosis_form_2");
        });
    });
});

$(document).on('click', function() {
    $(document).ready(function() {
        $('#'+selection.replace(/\s+/g, '')).change(function() {
            // Grab the value selected
            var new_selection = this.value;
            document.getElementById('diagnosis_form_3').innerHTML = '<h5>Please select a sub-category for ' + new_selection + ' below:</h5><br>';
            selectListArray(diagnosisJSON["pathologies-section"][selection], new_selection, "diagnosis_form_3");
            document.getElementById('diagnosis_form_3').innerHTML += "<button id=\"SubmitDiagnosis\" type=\"button\" class=\"services\">Submit Diagnosis </button>";
        });
    });
});


// Creates an HTML select list, using <select> tag, with id be the primaryKey
function selectList(json, primaryKey, div_id) {
	var output = '<select id="' + primaryKey.replace(/\s+/g, '') + '">';
	var object = json[primaryKey];
    output += '<option>Click to select</option>';
	for (key in object) {
		output += '<option ' + 'value=' + '"' + key + '">' + key + '</option>';
	}
	output += '</select>';
	var update = document.getElementById(div_id);
	update.innerHTML += output;
}

function selectListArray(json, primaryKey, div_id) {
    var output = '<select id="' + primaryKey.replace(/\s+/g, '') + '">';
    var object = json[primaryKey];
    output += '<option>Click to select</option>';
    for (i =0; i<object.length; i++) {
        output += '<option ' + 'value=' + '"' + object[i] + '">' + object[i] + '</option>';
    }
    output += '</select>';
    var update = document.getElementById(div_id);
    update.innerHTML += output;
}
