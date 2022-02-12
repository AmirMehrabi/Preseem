<?php

/*
 * You can place your custom package configuration in here.
 */

return [


    # Preseem API URL (default)
    'api_url' => env('PRESEEM_URL', 'https://api.preseem.com/model/v1/'),

    # Preseem API key (default)
    'api_key' => env('PRESEEM_API_KEY', 'YOUR_API_KEY'),

    
    # Locationof log file
    'logfile' => 'logs/preseem.log',
    
    # Process ID - to be used in the log entries
    'pid' => getmypid(),
    
    # Timestamp format used 
    # Any format that is valid for date() can be used here
    'timestamp' => 'Y/m/d H:i:s',
];