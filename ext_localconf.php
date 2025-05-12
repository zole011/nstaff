<?php
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Gmbit.Staff',
    'Memberlist',
    [
        'Member' => 'list, show'
    ],
    // Non-cacheable actions
    [
        'Member' => ''
    ]
);
