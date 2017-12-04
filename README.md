# Google Static Map Generator

Generate static map using Google Map API in Laravel.

# Installation
### Requirements

    >= PHP 7.1

### Installation in Laravel 5.5 and up

```bash
$ composer require nmfzone/google-static-map-laravel
```

The package will automatically register itself.

### Installation in Laravel 5.4

```bash
$ composer require nmfzone/google-static-map-laravel
```

Next up, the service provider must be registered:

```php
// config/app.php

'providers' => [
    ...
    NMFCODES\GoogleStaticMap\GoogleStaticMapServiceProvider::class,
];
```

If you want to make use of the facade you must install it as well:

```php
// config/app.php

'aliases' => [
    ...
    'GoogleStaticMap' => NMFCODES\GoogleStaticMap\GoogleStaticMapFacade::class,
];
```

If you want to change the default config, you must publish the config file:

```bash
$ php artisan vendor:publish --provider="NMFCODES\GoogleStaticMap\GoogleStaticMap"
```

### Installation in Lumen

```bash
$ composer require nmfzone/google-static-map-laravel
```

Next up, the service provider must be registered:

```php
// bootstrap/app.php

$app->register(NMFCODES\GoogleStaticMap\GoogleStaticMapServiceProvider::class);
```

## Usage

TODO

## Security

If you discover any security related issues, please email 123.nabil.dev@gmail.com instead of using the issue tracker.

## Credits

- [Nabil M. Firdaus](https://twitter.com/nmfzone)
- [All contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
