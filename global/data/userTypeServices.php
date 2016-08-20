<?php

$allUserTypes = include config('global.data').'/userTypes.php';

return array(
    '3D Bioprinting' => array(
        'route' => 'services/bioprinting',
        'userTypes' => ['SURGEON']
    ),

    'Accounting Analytics' => array(
        'route' => 'services/third-party/accounting',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'BPM' => array(
        'route' => 'services/third-party/bpm',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Business Intelligence' => array(
        'route' => 'services/third-party/business',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Communication' => array(
        'route' => 'services/communication',
        'userTypes' => $allUserTypes
    ),

    'Collaboration' => array(
        'route' => 'services/third-party/collaboration',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'CRM' => array(
        'route' => 'services/third-party/crm',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Diseases Diagnosis' => array(
        'route' => 'services/diagnosis',
        'userTypes' => ['RADIOLOGIST']
    ),

    'Document Management' => array(
        'route' => 'services/third-party/doc-manage',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Educational Platform' => array(
        'route' => 'services/edu',
        'userTypes' => $allUserTypes
    ),

    'Email' => array(
        'route' => 'services/third-party/email',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'ERP' => array(
        'route' => 'services/third-party/erp',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Genetic Code Service' => array(
        'route' => 'services/genetics',
        'userTypes' => $allUserTypes
    ),

    'Healthcare Policies' => array(
        'route' =>'services/health-policies',
        'userTypes' => ['PATIENT ADVOCATE']
    ),

    'Healthcare Servicies' => array(
        'route' => 'services/health-services',
        'userTypes' => ['Healthcare Servicies']
    ),

    'Human Resources' => array(
        'route' => 'services/third-party/human-resources',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Medical G.I.S.' => array(
        'route' => 'services/med-gis',
        'userTypes' => $allUserTypes
    ),

    'Medical Reports' => array(
        'route' => 'services/reports',
        'userTypes' => ['MEDICAL CODER']
    ),

    'Medical Lab' => array(
        'route' => 'services/med-lab',
        'userTypes' => ['MEDICAL LAB TECHNICIAN']
    ),

    'Marketing Automation' => array(
        'route' => 'services/third-party/marketing',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Patients' => array(
        'route' => 'services/patients',
        'userTypes' => ['DOCTOR', 'SURGEON']
    ),

    'Patient Health Profile' => array(
        'route' => 'services/patient-med-profile',
        'userTypes' => $allUserTypes
    ),

    'Patient Monitoring' => array(
        'route' => 'services/patient-monitor',
        'userTypes' => ['REGISTERED NURSE']
    ),

    'Pharmacy Lab' => array(
        'route' => 'services/pharmacy-lab',
        'userTypes' => ['PHARMACIST']
    ),

    'Physical Treatments' => array(
        'route' => 'services/physical-treats',
        'userTypes' => ['PHYSICAL THERAPIST']
    ),

    'Prescriptions' => array(
        'route' => 'services/prescriptions',
        'userTypes' => ['PHARMACY TECHNICIAN', 'PHARMACIST']
    ),

    'Post-Op Treatments' => array(
        'route' => 'services/postop',
        'userTypes' => ['SURGEON']
    ),

    'PIM' => array(
        'route' => 'services/third-party/pim',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Project Management' => array(
        'route' => 'services/third-party/project-manage',
        'userTypes' => ['BUSINESS OFFICE']
    ),

    'Questions & Answers' => array(
        'route' => 'services/qa',
        'userTypes' => ['PHARMACY TECHNICIAN']
    ),

    'Radiology Lab' => array(
        'route' => 'services/radio-lab',
        'userTypes' => ['RADIOLOGIST', 'RADIOLOGIST TECHNOLOGIST']
    ),

    'Research Platform' => array(
        'route' => 'services/research-platform',
        'userTypes' => ['DOCTOR', 'SURGEON']
    ),

    'Robotics' => array(
        'route' => 'services/robotics',
        'userTypes' => ['ROBOTICS MANAGER']
    ),

    'Symptoms Checker' => array(
        'route' => 'services/symptoms',
        'userTypes' => $allUserTypes
    ),

    'Surgery' => array(
        'route' => 'services/surgery',
        'userTypes' => ['SURGEON']
    ),

    'Surgical Operations' => array(
        'route' => 'services/surgery-ops',
        'userTypes' => ['SURGICAL TECHNOLOGIST']
    ),

    'Tissue Sampling' => array(
        'route' => 'services/tissue-sample',
        'userTypes' => ['MEDICAL LAB TECHNICIAN']
    )
);
