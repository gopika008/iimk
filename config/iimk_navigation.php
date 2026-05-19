<?php
return [
    'main' => [
        ['label' => 'About', 'url' => '/about', 'active' => 'about*'],
        ['label' => 'Academics', 'url' => '#', 'active' => 'academics*', 'mega' => [
            ['title' => 'Regular Programmes', 'links' => [
                ['label' => 'Doctoral Programmes (PhD)', 'url' => '#'],
                ['label' => 'Post Graduate Programme (PGP)', 'url' => '#'],
                ['label' => 'PGP in Finance', 'url' => '#'],
                ['label' => 'PGP Liberal Studies & Management', 'url' => '#'],
                ['label' => 'PGP in Business Leadership', 'url' => '#'],
                ['label' => 'Bachelor of Management Studies', 'url' => '#'],
            ]],
            ['title' => 'Executive Programmes', 'links' => [
                ['label' => 'MBA for Working Executives', 'url' => '#'],
                ['label' => 'Kochi Campus Programme', 'url' => '#'],
                ['label' => 'Diploma in Management', 'url' => '#'],
                ['label' => 'MDP', 'url' => '#'],
                ['label' => 'FDP', 'url' => '#'],
            ]],
        ]],
        ['label' => 'Research', 'url' => '#', 'active' => 'research*'],
        ['label' => 'Campus Life', 'url' => '#', 'active' => 'campus*'],
        ['label' => 'Admission', 'url' => '#', 'active' => 'admission*'],
        ['label' => 'Infrastructure', 'url' => '#', 'active' => 'infrastructure*'],
        ['label' => 'Centres', 'url' => '#', 'active' => 'centres*'],
    ],
    'about_sidebar' => [
    [
        'label' => 'The Institute',
        'children' => [
            ['label' => 'Overview', 'url' => '/about#overview', 'key' => 'overview'],
            ['label' => 'Vision 2047', 'url' => '/about#vision', 'key' => 'vision'],
            ['label' => 'Programmes', 'url' => '/about#programmes', 'key' => 'programmes'],
            ['label' => 'Accreditations & Rankings', 'url' => '/about#accreditations', 'key' => 'accreditations'],
            ['label' => 'Innovation & Inclusion', 'url' => '/about#innovation', 'key' => 'innovation'],
            ['label' => 'International Exchange', 'url' => '/about#international', 'key' => 'international'],
            ['label' => 'Centres of Excellence', 'url' => '/about#centres', 'key' => 'centres'],
        ]
    ],

    [
        'label' => 'Governance',
        'children' => [
            ['label' => 'Director', 'url' => '/about/director', 'key' => 'director'],
            ['label' => 'Board of Governors', 'url' => '/about/board-of-governors', 'key' => 'bog'],
            ['label' => 'Deans & Administration', 'url' => '/about/deans', 'key' => 'deans'],            
        ]
    ],
    [
        'label' => 'RTI',
        'children' => [
            [
                'label' => 'Organization and Function',
                'url' => '/about/rti/organization-and-function',
                'key' => 'rti-organization'
            ],
            [
                'label' => 'Budget and Programmes',
                'url' => '/about/rti/budget-and-programmes',
                'key' => 'rti-budget'
            ],
            [
                'label' => 'Publicity and Public Interface',
                'url' => '/about/rti/publicity-and-public-interface',
                'key' => 'rti-publicity'
            ],
            [
                'label' => 'E-Governance',
                'url' => '/about/rti/e-governance',
                'key' => 'rti-e-governance'
            ],
            [
                'label' => 'Information as may be Prescribed',
                'url' => '/about/rti/information-as-may-be-prescribed',
                'key' => 'rti-prescribed'
            ],
            [
                'label' => 'Information Disclosed on Own Initiative',
                'url' => '/about/rti/information-disclosed-on-own-initiative',
                'key' => 'rti-own-initiative'
            ],
        ]
    ],
    ['label' => 'Accreditation', 'url' => '/about/accreditation', 'key' => 'accreditation'],
    ['label' => 'Green Initiatives', 'url' => '/about/green-initiatives', 'key' => 'green-initiatives'],
    ],

    
      
        'international_sidebar' => [
                        [
                 
                            'label' => 'About IR',
                            'url' => '/international-relations/',
                            'key' => 'international-about'
                        ],
                        [
                            'label' => 'International Admissions',
                            'key' => 'international-admissions',
                            'children' => [
                            [
                                'label' => 'Programs Offered',
                                'url' => '/international-relations/admissions/programs-offered',
                                'key' => 'ir-programs-offered'
                            ],
                            [
                                'label' => 'Eligibility',
                                'url' => '/international-relations/admissions/eligibility',
                                'key' => 'ir-eligibility'
                            ],
                            [
                                'label' => 'Programme Fees',
                                'url' => '/international-relations/admissions/programme-fees',
                                'key' => 'ir-programme-fees'
                            ],
                            [
                                'label' => 'Admission/Selection Process',
                                'url' => '/international-relations/admissions/selection-process',
                                'key' => 'ir-selection-process'
                            ],
                            [
                                'label' => 'Courses Offered',
                                'url' => '/international-relations/admissions/courses-offered',
                                'key' => 'ir-courses-offered'
                            ],
                            [
                                'label' => 'Scholarships',
                                'url' => '/international-relations/admissions/scholarships',
                                'key' => 'ir-scholarships'
                            ],
                            [
                                'label' => 'Apply Online',
                                'url' => '/international-relations/admissions/apply-online',
                                'key' => 'ir-apply-online'
                            ],
                            ]
                        ],
                        [
                            'label' => 'Student Exchange',
                            'key' => 'student-exchange',
                            'children' => [
                            [
                                'label' => 'Incoming Student Exchange',
                                'url' => '/international-relations/student-exchange/incoming',
                                'key' => 'ir-incoming-student-exchange'
                            ],
                            [
                                'label' => 'Outgoing Student Exchange',
                                'url' => '/international-relations/student-exchange/outgoing',
                                'key' => 'ir-outgoing-student-exchange'
                            ],
                            [
                                'label' => 'Partner Institutions',
                                'url' => '/international-relations/student-exchange/partner-institutions',
                                'key' => 'ir-partner-institutions'
                            ],
                            [
                                'label' => 'Events',
                                'url' => '/international-relations/student-exchange/events',
                                'key' => 'ir-events'
                            ],
                            ]
                        ],
                    ],
 

];
