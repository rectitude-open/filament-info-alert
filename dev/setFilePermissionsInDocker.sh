#!/bin/sh
set -e
cd /home/wwwroot/filament-info-alert || exit
chown -R www-data:www-data /home/wwwroot/filament-info-alert && \
find /home/wwwroot/filament-info-alert -type f -exec chmod 644 {} \; && \
find /home/wwwroot/filament-info-alert -type d -exec chmod 755 {} \; && \
chmod -R +x /home/wwwroot/filament-info-alert/vendor/bin/ && \
chmod -R +x /home/wwwroot/filament-info-alert/dev/
