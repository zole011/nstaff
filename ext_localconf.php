<?php
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Gmbit.Staff',
    'Staff',
    [
        \Gmbit\Staff\Controller\MemberController::class => 'list, show',
    ],
    [
        \Gmbit\Staff\Controller\MemberController::class => 'list, show',
    ]
);
