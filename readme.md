# VandarAuthBasic

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This package implement auth basic for vandar services

## Installation

Via Composer

``` bash
$ composer require masoud5070/vandarauthbasic
```

If you do not run Laravel 5.5 (or higher), then add the service provider and alias in config/app.php:

provider :

``` bash
"Masoud5070\VandarAuthBasic\VandarAuthBasicServiceProvider"
```

alias:

``` bash
"VandarAuthBasic" => "Masoud5070\VandarAuthBasic\Facades\VandarAuthBasic"
```

## Usage

first publish config file and select 'vandarauthbasic.config' tag with command below:

``` bash
$ php artisan vandar:publish
```

after config file was published you can change 'model_name' with your model and set your data that create into database with 'database_records'.

NOTE: when change 'model_name' with your model class, table name will automatically change with '$table' of model. 

NOTE: you should set 'email' and 'password' into env file.

then rum migration for create table : 

``` bash
$ php artisan migrate
```

for generate users into table run command below:

``` bash
$ php artisan vandar:admins-consideration
```

NOTE: this package use 'Admin' model and 'admins' table by default.

then add provider to 'auth.php' config file:

``` bash
'guards' => [
         'web' => [
             'driver' => 'session',
             'provider' => 'users',
         ],
    
         ...
    ],   

'providers' => [
         'users' => [
             'driver' => 'eloquent',
             'model' => \Masoud5070\VandarAuthBasic\Models\Admin::class,
         ],
    ],
```


after run command and set provider you can set 'auth.basic:web' middleware on routes that you want:

``` bash
$ Route::get('your-uri', 'YourController@method')->middleware('auth.basic:web');
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Masoud Haji Ali Tajer][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/masoud5070/vandarauthbasic.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/masoud5070/vandarauthbasic.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/masoud5070/vandarauthbasic/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/masoud5070/vandarauthbasic
[link-downloads]: https://packagist.org/packages/masoud5070/vandarauthbasic
[link-travis]: https://travis-ci.org/masoud5070/vandarauthbasic
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/masoud5070
[link-contributors]: ../../contributors
