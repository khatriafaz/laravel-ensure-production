
# Ensure Production

[![Latest Version on Packagist](https://img.shields.io/packagist/v/khatriafaz/laravel-ensure-production.svg?style=flat-square)](https://packagist.org/packages/khatriafaz/laravel-ensure-production)
[![Build Status](https://img.shields.io/travis/khatriafaz/laravel-ensure-production/master.svg?style=flat-square)](https://travis-ci.org/khatriafaz/laravel-ensure-production)
[![Quality Score](https://img.shields.io/scrutinizer/g/khatriafaz/laravel-ensure-production.svg?style=flat-square)](https://scrutinizer-ci.com/g/khatriafaz/laravel-ensure-production)
[![Total Downloads](https://img.shields.io/packagist/dt/khatriafaz/laravel-ensure-production.svg?style=flat-square)](https://packagist.org/packages/khatriafaz/laravel-ensure-production)

Add this package to your project and configure domains where the environment must stay only production.
That's it. The you don't have to remember where to update the env or a specific config for production domains.

## Installation
You can install the package via composer:

    composer require khatriafaz/laravel-ensure-production
You can publish the config to change to configured domains for production:

    php artisan vendor:publish --provider="Khatriafaz\EnsureProductionServiceProvider"

You will find a new config published `ensureproduction.php`.
You should modify the domains array to list your domains:

```php
return [
	/**
	 *	The domains for production must be added to this array
	 */
	'domains' => [
		 'domain.com'
	],

	'override_config' => [
		/**
		 *	You can override config variables for
		 *	the configured domains above
		 */

		 'app.name' => 'Laravel'
	]
];
```
And that's it, the configured domains will now work on the production configuration always.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email khatriafaz@gmail.com instead of using the issue tracker.

## Credits

- [Afaz Khatri](https://github.com/khatriafaz)
- [Rakshit Patel](https://github.com/rakshitbharat)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
