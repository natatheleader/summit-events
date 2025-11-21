#!/bin/bash

echo "🚀 Starting deployment..."

# Pull latest code
git pull origin main

# Install/Update Composer dependencies
composer install --no-dev --optimize-autoloader

# Clear and cache config
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
php artisan migrate --force

# Link storage
php artisan storage:link

# Generate sitemap
php artisan sitemap:generate

# Clear application cache
php artisan cache:clear

# Set permissions
chmod -R 755 storage
chmod -R 755 bootstrap/cache

echo "✅ Deployment complete!"