#  Geetest

This package is no longer maintained but not archived, pull requests and upgrade is welcomed. Thanks very much.

[![Build Status](https://travis-ci.org/Nelsons/LaravelGeetest.svg?branch=master)](https://travis-ci.org/Nelsons/LaravelGeetest)
[![DUB](https://img.shields.io/dub/l/vibe-d.svg?maxAge=2592000?style=plastic)](https://github.com/Nelsons/LaravelGeetest)
[![Support](https://img.shields.io/badge/support-laravel-orange.svg)](https://laravel.com/)


## Installation


This Package now supports Geetest 3.1. 

To get the latest version of Laravel Geetest, simply require the project using Composer:

```
$ composer require nelsons/geetest
```

then run:

```
$ composer update
```

Next, You should need to register the service provider. Open up `config/app.php` and add following into the `providers` key:

```php
Nelsons\Geetest\GeetestServiceProvider::class
```

And you can register the Geetest Facade in the `aliases` of `config/app.php` :

```php
'Geetest' => Nelsons\Geetest\Geetest::class
```

## Configuration

To get started, you need to publish vendor assets using the following command:

```
$ php artisan vendor:publish --tag=geetest
```

This will create a config file named `config/geetest.php` which you can configure geetest as you like.

It will also generate a views folder named `resources/views/vendor/geetest`, there will be a view file named `geetest.blade.php`. Here you can configure styles of geetest. For example, you can change the script `alert()` as you like.

## Usage

Firstly, You need to register in [Geetest](http://www.geetest.com/). Creating an app and get `ID` and `KEY`.

Then configure them in your `.env` file because you'd better not make them public.

Add them to `.env` as follows:

```
GEETEST_ID=0f1097bef7xxxxxx9afdeced970c63e4
GEETEST_KEY=c070f0628xxxxxxe68e138b55c56fb3b
```


## License

Laravel Geetest is licensed under [The MIT License (MIT)](https://github.com/Nelsons/LaravelGeetest/blob/master/LICENSE).



 

