# Prion Settings (Lumen/Laraval 5 Package)

Prion Settings is an easy way to store and retrieve settings.

Tested on Lumen 5.6

## Installation

`composer require "prion-development/settings:5.6.*"`

In config/app.php, add the following provider:
PrionDevelopment\Providers\PrionSettingsProvider::class

Publish configuration files
php artisan vendor:publish --tag="prionsettings"

Clear or reset your Laravel config cache.
php artisan config:clear
php artisan config:cache


## License

Prion Users is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
