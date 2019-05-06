<?php
return [
    'ftp'  => [
        'host' => env('B2B_FTP_HOST'),
        'user' => env('B2B_FTP_USER'),
        'pass' => env('B2B_FTP_PASS'),
        'dir'  => env('B2B_FTP_DIR'),
    ],
    'api'  => [
        'auth'        => env('B2B_API_AUTH'),
        'scopes'      => env('B2B_API_SCOPES'),
        'environment' => env('B2B_API_ENV', 'development'),
    ],
    'soap' => [
        'service_code' => env('B2B_SOAP_SERVICE_CODE'),
        'username'     => env('B2B_SOAP_USERNAME'),
        'password'     => env('B2B_SOAP_PASSWORD'),
        'vendor_code'  => env('B2B_SOAP_VENDOR_CODE'),
    ],
];
