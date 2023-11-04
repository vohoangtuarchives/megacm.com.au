<?php
return [
    'dev' => [
        'enable_cache' => [
            'title' => 'admin.settings.dev.enable_cache_title',
            'key'   => 'enable_cache',
            'value' => false,
            'type' => 'boolean',
        ],
        'cache_time' => [
            'title' => 'admin.settings.dev.cache_time_title',
            'key'   => 'cache_time',
            'value' => 10,
            'type' => 'integer',
        ]
    ],
    'general' => [
        'site_title' => [
            'title' => 'admin.settings.general.site_title',
            'key'   => 'site_title',
            'value' => 'MegaCM',
            'type' => 'text',
        ],
        'acn' => [
            'title' => 'admin.settings.acn',
            'key'   => 'acn',
            'value' => '668 754 363',
            'type' => 'text',
        ],
        'hotline' => [
            'title' => 'admin.settings.general.hotline',
            'key'   => 'hotline',
            'value' => '481686339',
            'type' => 'text',
        ],
        'address' => [
            'title' => 'admin.settings.general.address',
            'key'   => 'address',
            'value' => 'Unit 9/41-43 Jamison RdKingswood NSW 2747',
            'type' => 'text',
        ],
        'email' => [
            'title' => 'admin.settings.general.email',
            'key'   => 'email',
            'value' => 'sales@megacm.com.au',
            'type' => 'text',
        ],
    ],
    'customers' => [
        'site_title' => [
            'title' => 'admin.settings.auto_delete_after',
            'key'   => 'auto_delete_after',
            'value' => 7,
            'type' => 'integer',
            'with' => 'days',
            'validation' => 'required|numeric|min:1'
        ],
    ]
];
