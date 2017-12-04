<?php

return [

    'api_key' => env('GOOGLE_MAPS_API_KEY', 'key'),

    'static_map' => [

        'zoom' => 10,

        'width' => 300,

        'height' => 300,

        'scale' => 1,

        'format' => 'png',

        'type' => 'roadmap',

    ],

];
