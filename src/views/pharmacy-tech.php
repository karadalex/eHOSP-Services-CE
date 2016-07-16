<?php

if ($_SERVER['REQUEST_URI'] == "/server/src/views/doctor.php") {
    http_response_code(404);
} else {
    echo li(button("services/patients", "Patients"));
    echo li(button("services/", "Prescriptions"));
    echo li(button("services/", "Questions & Answers"));
    echo li(button("services/edu", "Educational Platform"));
    echo li(button("services/communication", "Communication"));
}