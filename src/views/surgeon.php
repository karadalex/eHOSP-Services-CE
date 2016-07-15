<?php

if ($_SERVER['REQUEST_URI'] == "/server/src/views/doctor.php") {
    http_response_code(404);
} else {
    echo li(button("services/patients", "Patients"));
    echo li(button("services/med-gis", "Medical Geographic Information System"));
    echo li(button("services/research-platform", "Research Platform"));
    echo li(button("services/surgery-printing", "Remote Surgery & 3D Bioprinting tool"));
    echo li(button("services/research-platform", "Post-operative Treatments"));
    echo li(button("services/edu", "Educational Platform"));
}