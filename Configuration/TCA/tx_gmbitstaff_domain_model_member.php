<?php
return [
    'rootLevel' => 0,
    'ctrl' => [
        'title' => 'LLL:EXT:gmbit_staff/Resources/Private/Language/locallang_db.xlf:tx_gmbitstaff_domain_model_member',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'name,surname,title,email,phone,address',
        'iconfile' => 'EXT:gmbit_staff/Resources/Public/Icons/tx_gmbitstaff_domain_model_member.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden, name, surname, title, email, phone, address',
    ],
    'types' => [
        '1' => ['showitem' => 'hidden, name, surname, title, email, phone, address'],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
        'name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:gmbit_staff/Resources/Private/Language/locallang_db.xlf:tx_gmbitstaff_domain_model_member.first_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'surname' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:gmbit_staff/Resources/Private/Language/locallang_db.xlf:tx_gmbitstaff_domain_model_member.last_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:gmbit_staff/Resources/Private/Language/locallang_db.xlf:tx_gmbitstaff_domain_model_member.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'email' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:gmbit_staff/Resources/Private/Language/locallang_db.xlf:tx_gmbitstaff_domain_model_member.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'phone' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:gmbit_staff/Resources/Private/Language/locallang_db.xlf:tx_gmbitstaff_domain_model_member.phone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'address' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:gmbit_staff/Resources/Private/Language/locallang_db.xlf:tx_gmbitstaff_domain_model_member.address',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ],
        ],
    ],
];
