<?php


return [
    'model_name'       => Masoud5070\VandarAuthBasic\Models\Admin::class,
    'database_records' => [
        ['email' => env('ADMINS_TABLE_EMAIL'), 'password' => env('ADMINS_TABLE_PASSWORD')],
    ],
];
