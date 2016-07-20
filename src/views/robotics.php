<?php
if ($_SERVER['REQUEST_URI'] == "/server/src/views/robotics.php") {
    http_response_code(404);
} else {
    echo li(button("services/robotics", "Robotics Dashboard"));
    echo li(button("services/med-gis", "Medical Geographic Information System"));
    echo li(button("services/research-platform", "Research Platform"));
    echo li(button("services/edu", "Educational Platform"));
    echo li(button("services/communication", "Communication"));
}