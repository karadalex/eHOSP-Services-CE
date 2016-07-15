<?php

if ($_SERVER['REQUEST_URI'] == "/server/src/views/doctor.php") {
    http_response_code(404);
} else {
    echo li(button("services/patients/", "Patients"));
    echo li(button("services/", "Imaging"));
    echo li(button("services/", "Diseases Diagnosis"));
    echo li(button("services/edu", "Educational Platform"));
}
