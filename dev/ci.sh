#!/bin/bash
set -e

/home/wwwroot/filament-info-alert/vendor/bin/pest
/home/wwwroot/filament-info-alert/vendor/bin/pint
/home/wwwroot/filament-info-alert/vendor/bin/phpstan analyse
