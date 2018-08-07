# Prion Geeography (Lumen/Laraval 5 Package)

Prion Geography is an easy way to pull geography data.

Tested on Lumen 5.6

## Installation

`composer require "priondevelopment/geography:5.6.*"`

In config/app.php, add the following provider:
PrionDevelopment\Providers\PrionGeographyProvider::class

Publish configuration files
php artisan vendor:publish --tag="priongeography"

Clear or reset your Laravel config cache.
php artisan config:clear
php artisan config:cache


## License

Prion Geography is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
