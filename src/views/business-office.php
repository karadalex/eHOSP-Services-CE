<?php

if ($_SERVER['REQUEST_URI'] == "/server/src/views/business-office.php") {
    http_response_code (404);
} else {
    echo li(button("services/third-party/accounting", "Accounting Analytics"));
    echo li(button("services/third-party/bpm", "Business Process Management (BPM)"));
    echo li(button("services/third-party/intelligence", "Business Intelligence"));
    echo li(button("services/third-party/cms-blogs", "Content Management Systems - Blogs"));
    echo li(button("services/", "Collaboration"));
    echo li(button("services/third-party/crm", "Customer Relationship Management (CRM)"));
    echo li(button("services/", "Document Management"));
    echo li(button("services/", "Email"));
    echo li(button("services/third-party/erp", "Enterprise Resource Planning (ERP)"));
    echo li(button("services/", "Forum"));
    echo li(button("services/third-party", "Human Resource Management"));
    echo li(button("services/", "Marketing Automation"));
    echo li(button("services/third-party", "Product Information Manager (PIM)"));
    echo li(button("services/third-party", "Project Management"));
    echo li(button("services/edu", "Educational Platform"));
}
