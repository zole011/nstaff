<?php

return [
    'staff' => [
        'parent' => 'web',
        'position' => ['after' => 'web_info'],
        'access' => 'user,group',
        'workspaces' => 'live',
        'path' => '/module/staff/member',
        'labels' => 'LLL:EXT:gmbit_staff/Resources/Private/Language/locallang_mod.xlf:mod_title',
        'extensionName' => 'Staff',
        'controllerActions' => [
            \Gmbit\Staff\Controller\MemberController::class => [
                'list', 'new', 'create', 'edit', 'update', 'delete'
            ],
        ],
    ],
];