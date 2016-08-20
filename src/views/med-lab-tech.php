<?php

if ($_SERVER['REQUEST_URI'] == "/server/src/views/med-lab-tech.php") {
    http_response_code(404);
    header('Location: ../');
} else {
    echo li(button("services/", "Laboratory"));
    echo li(button("services/", "Tissue Sampling"));
    echo li(button("services/edu", "Educational Platform"));
    echo li(button("services/communication", "Communication"));
    echo "<hr>";
    echo li(button("services/emergency", "Emergency", "", "background-color: #ec5840"));
    echo li(button("services/first-aid", "First Aid", "", "background-color: #ec5840"));
}
