<?php

if ($_SERVER['REQUEST_URI'] == "/server/src/views/doctor.php") {
    http_response_code(404);
} else {
    echo li(button("services/medical-diagnosis", "Medical diagnosis & Diseases Database"));
    echo li(button("services/patient-med-profile", "Patient Health Profile"));
    echo li(button("services/genetic-code", "Genetic Code Service"));
    echo li(button("services/med-gis", "Medical Geographic Information System"));
    echo li(button("services/edu", "Educational Platform"));
}