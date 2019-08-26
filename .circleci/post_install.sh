#!/usr/bin/env bash

#install composer dependencies
composer install --no-interaction

# Clear the old boostrap/cache/compiled.php
php artisan clear-compiled

# Recreate boostrap/cache/compiled.php
php artisan optimize

# Migrate any database changes
php artisan migrate
