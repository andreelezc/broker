<?php 

return [
    'driver' => env('MAIL_DRIVER',' smtp'),
    'host' => env('MAIL_HOST', 'smtp.gmail.com'),
    'port' => env('MAIL_PORT', 587),
    // 'to' => ['address' => "linsse.unne@gmail.com", 'name' => "MOHA WEB"],
    'from' => ['address' => "linsse.unne@gmail.com" , 'name' => "MOHA WEB"],
    'encryption' => env('MAIL_ENCRYPTION',''),
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,
];