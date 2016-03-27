var xmlhttp = new XMLHttpRequest();
var url = "data/diagnosis.json";

xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var pathologiesSection = JSON.parse(xmlhttp.responseText);

		var output = '<select>';
		var db = pathologiesSection['pathologies-section'];
	    for (key in db) {
	        output += '<option>' + key + '</option>';
	    }
		output += '</select>';
		var update = document.getElementById('diagnosis-form');
		update.innerHTML = output;
    }
};

xmlhttp.open("GET", url, true);
xmlhttp.send();
