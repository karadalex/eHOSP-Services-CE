<?php

if ($_SERVER['REQUEST_URI'] == "/server/src/views/physical-therapist.php") {
    http_response_code(404);
    header('Location: ../');
} else {
    echo li(button("services/patients", "Patients"));
    echo li(button("services/med-gis", "Medical Geographic Information System"));
    echo li(button("services/research-platform", "Research Platform"));
    echo li(button("services/", "Treatment Plans"));
    echo li(button("services/", "Rehabilitative Programs"));
    echo li(button("services/edu", "Educational Platform"));
    echo li(button("services/communication", "Communication"));
    echo "<hr>";
    echo li(button("services/emergency", "Emergency", "", "background-color: #ec5840"));
    echo li(button("services/first-aid", "First Aid", "", "background-color: #ec5840"));
}
