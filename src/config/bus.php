<?php

return [
    'sidebar_path' => 'bustracking::common.sidebar.bus',
    'url_prefix' => 'ssgroup',
    'asset_path' => 'ssgroup',
    'middleware' => ['web','dev_mode','auth'],
    'middleware_dev_mode' => 'dev_mode',
    'dev_mode' => env('BUS_TRACKING_DEV_MODE', true),
    'googlemap_key' => env('GOOGLE_MAP_KEY', false),
    'validation' => [
        'mobile_no' => [
//            'regex' => "^[9][6-8]\d{8}$",
            'regex' => "^(980|984|985|986|974|975|981|982|961|988|972|963)\d{7}$",
            'regex_message' => 'Enter the valid phone number.',
            'sim_type' => ['ntc','cdma','ncell','smart','utl', 'nst'],
            'sim_range' => [
                'ntc' => ['984', '985', '986'],
                'cdma' => ['974', '975'],
                'ncell' => ['980', '981', '982'],
                'smart' => ['961', '988'],
                'utl' => ['972'],
                'nst' => ['963'],
            ]
        ]
    ]
];