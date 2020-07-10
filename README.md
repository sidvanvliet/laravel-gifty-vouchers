# An easy to use Laravel wrapper for Gifty vouchers

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sidvanvliet/laravel-gifty-vouchers.svg?style=flat-square)](https://packagist.org/packages/sidvanvliet/laravel-gifty-vouchers)
[![Build Status](https://img.shields.io/travis/sidvanvliet/laravel-gifty-vouchers/master.svg?style=flat-square)](https://travis-ci.org/sidvanvliet/laravel-gifty-vouchers)
[![Quality Score](https://img.shields.io/scrutinizer/g/sidvanvliet/laravel-gifty-vouchers.svg?style=flat-square)](https://scrutinizer-ci.com/g/sidvanvliet/laravel-gifty-vouchers)
[![Total Downloads](https://img.shields.io/packagist/dt/sidvanvliet/laravel-gifty-vouchers.svg?style=flat-square)](https://packagist.org/packages/sidvanvliet/laravel-gifty-vouchers)

This package offers an easy to use Laravel wrapper for Gifty.nl gift cards / vouchers using the publicly available balance checker API.

## Installation

You can install the package via composer:

```bash
composer require sidvanvliet/laravel-gifty-vouchers
```

## Usage

``` php
$voucher = new Sidvanvliet\LaravelGiftyVouchers\Voucher("JW96–S75S-9FV8–L9S4");
```

Available functions

| Function      | Return type   | Description                                 |
| ------------- |:-------------:| ------------------------------------------: |
| isValid()     | bool          | Returns whether or not the voucher is valid |
| balance()     | float         | Returns the amount of credit on the voucher |
| currency()    | ?string       | Returns the currency (e.x. EUR)             |

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email sid@gifty.nl instead of using the issue tracker.

## Credits

- [Sid van Vliet](https://github.com/sidvanvliet)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

