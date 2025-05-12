<?php

return [
    'staff' => [
        'parent' => 'web',
        'position' => ['after' => 'web_info'],
        'access' => 'user,group',
        'workspaces' => 'live',
        'path' => '/module/staff/member',
        'labels' => 'LLL:EXT:staff/Resources/Private/Language/locallang_mod.xlf',
        'extensionName' => 'Staff',
        'controllerActions' => [
            \Vendor\Staff\Controller\MemberController::class => [
                'list', 'new', 'create', 'edit', 'update', 'delete'
            ],
        ],
    ],
];