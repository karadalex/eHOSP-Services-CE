<?php

$allUserTypes = include config('global.data').'/userTypes.php';

return array(
    '3D Bioprinting' => array(
        'route' => 'bioprinting',
        'userTypes' => ['SURGEON']
    ),

    'Accounting Analytics' => array(
        'route' => 'third-party/accounting',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'BPM' => array(
        'route' => 'third-party/bpm',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Business Intelligence' => array(
        'route' => 'third-party/business',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Communication' => array(
        'route' => 'communication',
        'userTypes' => $allUserTypes
    ),

    'Collaboration' => array(
        'route' => 'third-party/collaboration',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'CRM' => array(
        'route' => 'third-party/crm',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Diseases Diagnosis' => array(
        'route' => 'diagnosis',
        'userTypes' => ['RADIOLOGIST']
    ),

    'Document Management' => array(
        'route' => 'third-party/doc-manage',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Educational Platform' => array(
        'route' => 'edu',
        'userTypes' => $allUserTypes
    ),

    'Email' => array(
        'route' => 'third-party/email',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'ERP' => array(
        'route' => 'third-party/erp',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Genetic Code Service' => array(
        'route' => 'genetics',
        'userTypes' => $allUserTypes
    ),

    'Healthcare Policies' => array(
        'route' =>'health-policies',
        'userTypes' => ['PATIENT ADVOCATE']
    ),

    'Healthcare Servicies' => array(
        'route' => 'health-services',
        'userTypes' => ['Healthcare Servicies']
    ),

    'Human Resources' => array(
        'route' => 'third-party/human-resources',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Medical G.I.S.' => array(
        'route' => 'med-gis',
        'userTypes' => $allUserTypes
    ),

    'Medical Reports' => array(
        'route' => 'reports',
        'userTypes' => ['MEDICAL CODER']
    ),

    'Medical Lab' => array(
        'route' => 'med-lab',
        'userTypes' => ['MEDICAL LAB TECHNICIAN']
    ),

    'Marketing Automation' => array(
        'route' => 'third-party/marketing',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Patients' => array(
        'route' => 'patients',
        'userTypes' => ['DOCTOR', 'SURGEON']
    ),

    'Patient Health Profile' => array(
        'route' => 'patient-med-profile',
        'userTypes' => $allUserTypes
    ),

    'Patient Monitoring' => array(
        'route' => 'patient-monitor',
        'userTypes' => ['REGISTERED NURSE']
    ),

    'Pharmacy Lab' => array(
        'route' => 'pharmacy-lab',
        'userTypes' => ['PHARMACIST']
    ),

    'Physical Treatments' => array(
        'route' => 'physical-treats',
        'userTypes' => ['PHYSICAL THERAPIST']
    ),

    'Prescriptions' => array(
        'route' => 'prescriptions',
        'userTypes' => ['PHARMACY TECHNICIAN', 'PHARMACIST']
    ),

    'Post-Op Treatments' => array(
        'route' => 'postop',
        'userTypes' => ['SURGEON']
    ),

    'PIM' => array(
        'route' => 'third-party/pim',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Project Management' => array(
        'route' => 'third-party/project-manage',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Questions & Answers' => array(
        'route' => 'qa',
        'userTypes' => ['PHARMACY TECHNICIAN']
    ),

    'Radiology Lab' => array(
        'route' => 'radio-lab',
        'userTypes' => ['RADIOLOGIST', 'RADIOLOGIST TECHNOLOGIST']
    ),

    'Research Platform' => array(
        'route' => 'research-platform',
        'userTypes' => ['DOCTOR', 'SURGEON']
    ),

    'Robotics' => array(
        'route' => 'robotics',
        'userTypes' => ['ROBOTICS MANAGER']
    ),

    'Symptoms Checker' => array(
        'route' => 'symptoms',
        'userTypes' => $allUserTypes
    ),

    'Surgery' => array(
        'route' => 'surgery',
        'userTypes' => ['SURGEON']
    ),

    'Surgical Operations' => array(
        'route' => 'surgery-ops',
        'userTypes' => ['SURGICAL TECHNOLOGIST']
    ),

    'Tissue Sampling' => array(
        'route' => 'tissue-sample',
        'userTypes' => ['MEDICAL LAB TECHNICIAN']
    )
);
