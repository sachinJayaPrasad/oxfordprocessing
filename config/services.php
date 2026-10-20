<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'catalog' => [
        [
            'title' => 'NMBI Decision Letter (DL) Process',
            'category' => 'Overseas Registration & Licensing',
            'authority' => 'Nursing / Midwifery Board Ireland',
            'summary' => 'Guidance through Irish Nursing and Midwifery Board DL verification steps.',
            'requirements' => 'Valid nursing degree, state registration transcript, employer clinical verification reference & primary source verification.',
        ],
        [
            'title' => 'CORU Registration Process',
            'category' => 'Overseas Registration & Licensing',
            'authority' => 'Health & Social Care Ireland',
            'summary' => 'Structured assistance for health and social care professionals registering in Ireland.',
            'requirements' => 'Apostilled academic syllabus, notarized graduation certificates, professional standing letter & practice logbooks.',
        ],
        [
            'title' => 'AHPRA Registration Process',
            'category' => 'Overseas Registration & Licensing',
            'authority' => 'Australian Practitioner Board',
            'summary' => 'Support for Australian Health Practitioner Regulation Agency credential filings.',
            'requirements' => 'Valid passport, identity proofs, English language test clearance, verified qualification transcripts & Fit2Work checks.',
        ],
        [
            'title' => 'ANMAC Skills Assessment',
            'category' => 'Overseas Registration & Licensing',
            'authority' => 'Australian Skilled Migration',
            'summary' => 'Migration assessment dossier preparation for Australian nursing & midwifery.',
            'requirements' => 'Degree parchment, consolidated marks cards, registration certificates & direct nursing council verifications.',
        ],
        [
            'title' => 'NCLEX-RN Processing & Exam Booking',
            'category' => 'Overseas Registration & Licensing',
            'authority' => 'US / Canada Licensure',
            'summary' => 'Exam registration, ATT generation guidance, and Pearson VUE test scheduling.',
            'requirements' => 'State BON profile approval, CGFNS credential report, Pearson VUE profile & biometric authorization.',
        ],
        [
            'title' => 'LPN Registration Process',
            'category' => 'Overseas Registration & Licensing',
            'authority' => 'Practical Nursing',
            'summary' => 'Documentation and application filing for Licensed Practical Nurse boards.',
            'requirements' => 'Diploma/degree credentials, clinical hour hour-by-hour logs, board jurisprudence validation.',
        ],
        [
            'title' => 'DataFlow Verification',
            'category' => 'Overseas Registration & Licensing',
            'authority' => 'Gulf Licensure (PSV)',
            'summary' => 'Primary Source Verification (PSV) document compilation for Gulf healthcare licenses (DHA, MOH, HAAD, OMSB, QCHP).',
            'requirements' => 'Degree certificates, authenticated experience credentials, council good standing letter & passport copy.',
        ],
        [
            'title' => 'WES Evaluation',
            'category' => 'Overseas Registration & Licensing',
            'authority' => 'ECA / North America',
            'summary' => 'World Education Services transcript authentication and foreign credential evaluation filing.',
            'requirements' => 'Official sealed university transcripts, WES reference number transmission, degree certificates & mark sheets.',
        ],
        [
            'title' => 'NARIC / UK ENIC Process',
            'category' => 'Overseas Registration & Licensing',
            'authority' => 'United Kingdom Comparability',
            'summary' => 'UK National Information Centre statement of comparability assistance.',
            'requirements' => 'Final qualification certificate, full official academic transcripts in English, medium of instruction certification.',
        ],
        [
            'title' => 'IQAS Assessment',
            'category' => 'Overseas Registration & Licensing',
            'authority' => 'Canada / Alberta Provincial',
            'summary' => 'International Qualifications Assessment Service processing for Alberta and Canadian immigration.',
            'requirements' => 'University sealed transcripts, signed IQAS request form, color passport scans & translated mark records.',
        ],
        [
            'title' => 'Skills Assessment Services',
            'category' => 'Overseas Registration & Licensing',
            'authority' => 'Vocational & Migration',
            'summary' => 'Comprehensive documentation for vocational and skilled migration bodies.',
            'requirements' => 'Employment reference letters, pay slips/IT returns, tax filings, organizational charts & mapped job duty descriptions.',
        ],
        [
            'title' => 'Income Certificate Application',
            'category' => 'Documentation & Attestation',
            'authority' => 'Revenue & e-District',
            'summary' => 'Guidance and e-District portal filing support for state revenue certificates.',
            'requirements' => 'Ration card, salary slips/IT returns, land tax receipts & Aadhaar biometric identity record.',
        ],
        [
            'title' => 'Birth Certificate Download / Application Support',
            'category' => 'Documentation & Attestation',
            'authority' => 'Civil Registration Registry',
            'summary' => 'Local body and civil registry record search and documentation retrieval.',
            'requirements' => 'Hospital discharge slip, parents’ identity credentials, local authority register indices.',
        ],
        [
            'title' => 'Passport New Application & Renewal',
            'category' => 'Documentation & Attestation',
            'authority' => 'Ministry of External Affairs',
            'summary' => 'Tatkaal, normal, minor, and renewal slot scheduling and document checklist validation.',
            'requirements' => 'Aadhaar card, educational certificate (Non-ECR proof), old passport (for renewal), voter ID or bank passbook.',
        ],
        [
            'title' => 'Caste Certificate Application',
            'category' => 'Documentation & Attestation',
            'authority' => 'Revenue Authority',
            'summary' => 'Procedural guidance and verification dossier preparation for community certificates.',
            'requirements' => 'School Leaving Certificate (SSLC) showing caste, parents’ caste certificate, gazetted officer affidavit.',
        ],
        [
            'title' => 'Voter ID Application',
            'category' => 'Documentation & Attestation',
            'authority' => 'Election Commission (ECI)',
            'summary' => 'Form 6 submission assistance, electoral roll corrections, and digital EPIC retrieval.',
            'requirements' => 'Age proof document, residential address confirmation, passport size portrait photo.',
        ],
        [
            'title' => 'PSC One-Time Registration & Application',
            'category' => 'Documentation & Attestation',
            'authority' => 'Public Service Commission',
            'summary' => 'Kerala PSC profile creation, qualification updating, and post confirmation support.',
            'requirements' => 'Registered mobile number, SSLC book entry, digital signature file & standard specification photograph.',
        ],
        [
            'title' => 'School Application Support',
            'category' => 'Education & University Migration',
            'authority' => 'K-12 Admission',
            'summary' => 'Primary and secondary institution admission applications and document compilation.',
            'requirements' => 'Transfer certificate (TC), previous year mark records, conduct certificate, birth record.',
        ],
        [
            'title' => 'University Application Support',
            'category' => 'Education & University Migration',
            'authority' => 'Higher Education',
            'summary' => 'Guidance on university submission deadlines, statement compilation, and transcript courier.',
            'requirements' => 'Degree certificate, academic recommendations (LORs), Statement of Purpose (SOP), curriculum vitae.',
        ],
        [
            'title' => 'Course / College Allotment Checking',
            'category' => 'Education & University Migration',
            'authority' => 'CAP / Centralized Allotment',
            'summary' => 'Real-time tracking of centralized allotment rounds, merit lists, and reporting formalities.',
            'requirements' => 'Application registration number, entrance roll index, registered candidate credentials.',
        ],
        [
            'title' => 'Admission Application Assistance',
            'category' => 'Education & University Migration',
            'authority' => 'Intake Formalities',
            'summary' => 'Direct guidance through international and domestic higher-education intake portals.',
            'requirements' => 'Qualified examination certificates, English proficiency scores, passport biographical scan.',
        ],
        [
            'title' => 'ATS-Friendly CV / Resume',
            'category' => 'Career Support & Placement',
            'authority' => 'Candidate Dossier',
            'summary' => 'Tailored formatting optimized for Applicant Tracking Systems and international employer standards.',
            'requirements' => 'Existing resume copy, verified clinical/work experiences, licensure registries, skill highlights.',
        ],
        [
            'title' => 'Cover Letter (CL)',
            'category' => 'Career Support & Placement',
            'authority' => 'Professional Narrative',
            'summary' => 'Role-specific, persuasive letters articulating professional competencies and clinical milestones.',
            'requirements' => 'Target job requisition profile, key achievements checklist, career objective briefing.',
        ],
        [
            'title' => 'Interview Materials',
            'category' => 'Career Support & Placement',
            'authority' => 'Competency Kits',
            'summary' => 'Comprehensive preparation dossiers, competency frameworks, and situational response guides.',
            'requirements' => 'Target hospital/employer profile, specialty domain, clinical scenario outlines.',
        ],
        [
            'title' => 'Interview Preparation',
            'category' => 'Career Support & Placement',
            'authority' => 'Mock Simulation',
            'summary' => 'One-on-one virtual coaching simulations, behavioral question guidance, and feedback.',
            'requirements' => 'Scheduled simulation slot reservation, candidate CV evaluation, microphone & webcam setup.',
        ],
        [
            'title' => 'OET Exam Booking',
            'category' => 'Exam & Language Preparation',
            'authority' => 'Healthcare English',
            'summary' => 'Occupational English Test date selection, venue allocation, and candidate profile management.',
            'requirements' => 'Valid international passport, high-resolution ID photo, test venue preference (Kerala/National).',
        ],
        [
            'title' => 'IELTS Exam Booking',
            'category' => 'Exam & Language Preparation',
            'authority' => 'IDP Official Slots',
            'summary' => 'Academic and General Training test slot reservation with British Council / IDP.',
            'requirements' => 'Valid passport copy, module designation (Academic or General Training), preferred test date window.',
        ],
        [
            'title' => 'RCSI Exam Booking',
            'category' => 'Exam & Language Preparation',
            'authority' => 'Ireland Aptitude Test',
            'summary' => 'Royal College of Surgeons in Ireland aptitude test booking and candidate coordination.',
            'requirements' => 'NMBI Decision Letter specifying RCSI aptitude test route, candidate identification document.',
        ],
        [
            'title' => 'French Language Exam Booking',
            'category' => 'Exam & Language Preparation',
            'authority' => 'DELF / TEF / TCF',
            'summary' => 'DELF / TEF / TCF test slot booking assistance for immigration and academic pathways.',
            'requirements' => 'Candidate official identification, target level designation (A1 to C2 / Canada PR track).',
        ],
        [
            'title' => 'Online Language Preparation',
            'category' => 'Exam & Language Preparation',
            'authority' => 'Curriculum & Coaching',
            'summary' => 'Curated curriculum coordination, study schedule planning, and preparatory materials guidance.',
            'requirements' => 'Baseline diagnostic assessment completion, target test deadline, batch timing selection.',
        ],
    ],

];
