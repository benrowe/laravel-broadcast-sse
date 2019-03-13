# Laravel Broadcast SSE

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-circleci]][link-circleci]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

[!Server Sent Events][link-wikipedia] is a technology that allows servers to push
events via a normal (but long lived) http request. 

This package provides a broadcast connection adapter for SSE, plus the relevant 
route/controller to serve the incoming SSE requests from the client.

This package utilizes the existing [!event broadcasting][link-laravel-broadcast] feature from laravel.

 This package allows you to use a SSE connection to broadcast your laravel events
 via a SSE http endpoint. 

 https://en.wikipedia.org/wiki/Server-sent_events

Help resolve psr4 based namespaces to directories and thus related language constructs (classes, interfaces &amp; traits).

## Install

The best way to install this package is via composer.

``` bash
$ composer require benrowe/laravel-broadcast-sse
```

Inside your `config/broadcasting.php` configuration file, add the following connection, in the `connections` array

```php
    'sse' => [
        'driver' => 'sse',
    ]
```

@todo complete installation instructions

## Usage

Once installed correctly, a endpoint is exposted from laravel `/sse`. This is now
available 

A package is available on npm that wraps the sse api and exposes some laravel
broadcast behaviours (such as subscribing to channels, auth, etc). Please refer
to this page for installation and usage instructions

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email ben.rowe.83@gmail.com instead of using the issue tracker.

## Credits

- [Ben Rowe][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/benrowe/laravel-broadcast-sse.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-circleci]: https://img.shields.io/circleci/project/benrowe/laravel-broadcast-sse/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/benrowe/laravel-broadcast-sse.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/benrowe/laravel-broadcast-sse.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/benrowe/laravel-broadcast-sse.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/benrowe/laravel-broadcast-sse
[link-circleci]: https://circleci.com/gh/benrowe/laravel-broadcast-sse
[link-scrutinizer]: https://scrutinizer-ci.com/g/benrowe/laravel-broadcast-sse/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/benrowe/laravel-broadcast-sse
[link-downloads]: https://packagist.org/packages/benrowe/laravel-broadcast-sse
[link-author]: https://github.com/benrowe
[link-contributors]: ../../contributors
[link-wikipedia]: https://en.wikipedia.org/wiki/Server-sent_events
[link-laravel-broadcast]: https://laravel.com/docs/5.4/broadcasting
 