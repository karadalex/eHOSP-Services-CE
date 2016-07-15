<?php

if ($_SERVER['REQUEST_URI'] == "/server/src/views/business-office.php") {
    http_response_code (404);
} else {
    echo li(button("services/", "Accounting Analytics"));
    echo li(button("services/", "Business Process Management (BPM)"));
    echo li(button("services/", "Business Intelligence"));
    echo li(button("services/", "Content Management Systems - Blogs"));
    echo li(button("services/", "Collaboration"));
    echo li(button("services/", "Customer Relationship Management (CRM)"));
    echo li(button("services/", "Document Management"));
    echo li(button("services/", "Email"));
    echo li(button("services/", "Enterprise Resource Planning (ERP)"));
    echo li(button("services/", "Forum"));
    echo li(button("services/", "Human Resource Management"));
    echo li(button("services/", "Marketing Automation"));
    echo li(button("services/", "Product Information Manager (PIM)"));
    echo li(button("services/", "Project Management"));
    echo li(button("services/edu", "Educational Platform"));
}
