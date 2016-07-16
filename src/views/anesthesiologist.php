<?php

if ($_SERVER['REQUEST_URI'] == "/server/src/views/anesthesiologist.php") {
    http_response_code(404);
} else {
    echo li(button("services/edu", "Educational Platform"));
    echo li(button("services/communication", "Communication"));
}