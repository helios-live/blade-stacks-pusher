# Push arbitrary content to laravel stacks from anywhere

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ideatocode/blade-stacks-pusher.svg?style=flat-square)](https://packagist.org/packages/ideatocode/blade-stacks-pusher)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ideatocode/blade-stacks-pusher/run-tests?label=tests)](https://github.com/ideatocode/blade-stacks-pusher/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ideatocode/blade-stacks-pusher/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ideatocode/blade-stacks-pusher/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ideatocode/blade-stacks-pusher.svg?style=flat-square)](https://packagist.org/packages/ideatocode/blade-stacks-pusher)

Push arbitrary content to laravel stacks from anywhere.

## Installation

You can install the package via composer:

```bash
composer require ideatocode/blade-stacks-pusher
```


## Usage

```php
use Ideatocode\BladeStacksPusher\Facades\BSP;

BSP::push('scripts', function () {
    return '<script>console.log("It Works!")</script>';
});
BSP::push('scripts', '<script>console.log("This also works!")</script>');
BSP::push('scripts', view('test'));
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alexandru Eftimie](https://github.com/ideatocode)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
