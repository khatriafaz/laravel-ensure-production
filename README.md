
# Ensure Production

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
