<?php
return [
    'ftp' => [
        'host' => env('B2B_FTP_HOST'),
        'user' => env('B2B_FTP_USER'),
        'pass' => env('B2B_FTP_PASS'),
        'dir'  => env('B2B_FTP_DIR'),
    ],
    'api' => [
        'auth'   => env('B2B_API_AUTH'),
        'scopes' => env('B2B_API_SCOPES'),
    ],
];
