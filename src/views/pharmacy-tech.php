<?php

if ($_SERVER['REQUEST_URI'] == "/server/src/views/pharmacy-tech.php") {
    http_response_code(404);
    header('Location: ../');
} else {
    echo li(button("services/patients", "Patients"));
    echo li(button("services/", "Prescriptions"));
    echo li(button("services/", "Questions & Answers"));
    echo li(button("services/edu", "Educational Platform"));
    echo li(button("services/communication", "Communication"));
    echo "<hr>";
    echo li(button("services/emergency", "Emergency", "", "background-color: #ec5840"));
    echo li(button("services/first-aid", "First Aid", "", "background-color: #ec5840"));
}
