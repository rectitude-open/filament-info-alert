#!/bin/bash
set -e

php artisan test
/home/wwwroot/filament-info-alert/vendor/bin/pint
/home/wwwroot/filament-info-alert/vendor/bin/phpstan analyse
