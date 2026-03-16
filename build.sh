#!/bin/bash

# Install PHP dependencies
composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# Install Node dependencies
npm install

# Build assets with Vite
npm run vite-build

# Cache configuration and routes (optional but recommended for production)
# php artisan config:cache
# php artisan route:cache
# php artisan view:cache

# Generate Filament assets
php artisan filament:assets
