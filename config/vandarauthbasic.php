<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Model Name
    |--------------------------------------------------------------------------
    |
    | Set model that you want use as auth basic.
    |
    */

    'model_name'       => Masoud5070\VandarAuthBasic\Models\Admin::class,

    /*
    |--------------------------------------------------------------------------
    | Records
    |--------------------------------------------------------------------------
    |
    | This value is array of records that push into table for auth basic,
    | ADMINS_TABLE_EMAIL and ADMINS_TABLE_PASSWORD that you save in .env
    | file use as key => value for save in table.
    |
    */

    'database_records' => [
        env('ADMINS_TABLE_EMAIL') => env('ADMINS_TABLE_PASSWORD'),
    ],
];
