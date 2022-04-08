<?php




return[
    'sandbox.clientid'=>env('PAYPAL_SANDBOX_CLIENT_ID'),
    'sandbox.secret'=> env('PAYPAL_SANDBOX_SECRET'),


    'setting'=>[
      'mode' =>env('PAYPAL_MODE','sandbox')  ,
        'http.connectiontimeout'=>3000,
        'log.longenabled'=>true,

    ],
];
