<?php

return [
    'dump_path' => database_path('dump'),
    'cleanup_tables' => [
        'password_resets',
        'projects',
        'sessions',
        'users'
    ]
];
