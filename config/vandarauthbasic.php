<?php


return [
    'model_name'       => Masoud5070\VandarAuthBasic\Models\Admin::class,
    'database_records' => [
        env('ADMINS_TABLE_EMAIL') => env('ADMINS_TABLE_PASSWORD'),
    ],
];
