function Start(myFunc, h1, jsonIndex) {
    var xmlhttp = new XMLHttpRequest();
    var url = "js/measurements.json";
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var myJSON = JSON.parse(xmlhttp.responseText);
            myFunc(h1, myJSON, jsonIndex);
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function Main(h1, myJSON, jsonIndex) {
    var html = `
    <h1>` + h1 + `</h1>
    <p>

    </p>
    <ul id="buttons">
    `;

    for (var key in myJSON[jsonIndex]) {
        var li = `
        <li>
            <button type="button" class="services" onclick="location.href='` + myJSON[jsonIndex][key] + `'">
                ` + key + `
            </button>
        </li>
        `;
        html += li;
    }

    html += '</ul>'
    document.getElementById('content').innerHTML = html;
}

function Content(path) {
    if (path === "") {
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var html = "";
                html += xmlhttp.responseText;

                document.getElementById("content").innerHTML = html;
            }
        };
        xmlhttp.open("GET", path, true);
        xmlhttp.send();
    }
    eval(document.getElementById('content').innerHTML);
}
