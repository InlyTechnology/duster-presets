<div align="center"><img src="https://inly.se/github.png" alt="Inly"/></div>
<br />

# Inly's presets for the duster package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/inly/duster-presets.svg?style=flat-square)](https://packagist.org/packages/inly/duster-presets)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/inly/duster-presets/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/inly/duster-presets/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/inly/duster-presets/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/inly/duster-presets/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/inly/duster-presets.svg?style=flat-square)](https://packagist.org/packages/inly/duster-presets)

To maintain the same presets for all projects the config files for [tighten/duster](https://github.com/tighten/duster) is stored here and published in each project. 

## Installation

You can install the package via composer:

```bash
composer require inly/duster-presets --dev
```

Install duster if not already done:
```bash
composer require tightenco/duster --dev
```

You can publish and update the config files with:

```bash
php artisan vendor:publish --tag="duster-presets" --ansi --force
```

Add this to your scrips in `composer.json`:
```json
"lint": "./vendor/bin/duster lint",
"format": "./vendor/bin/duster fix"
```

You can now run duster with one of these commands:
```bash
composer lint
composer format
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Joel Jensen](https://github.com/Joel-Jensen)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
