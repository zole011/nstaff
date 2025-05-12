<?php
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'Vendor.YourExtension',
    'web', // Make module a submodule of 'web'
    'm1', // Submodule key
    '', // Position
    [
        'Member' => 'list, new, create, edit, update, delete',
    ],
    [
        'access' => 'user,group',
        'icon'   => 'EXT:your_extension/Resources/Public/Icons/user_mod.svg',
        'labels' => 'LLL:EXT:your_extension/Resources/Private/Language/locallang_m1.xlf',
    ]
);
