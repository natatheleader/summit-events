# Verve Management - Event Management Platform

A professional event management platform built with Laravel 11 and Filament v4, designed for Verve Management to showcase and manage business summits and conferences across the Middle East.

## Features

- 🎯 Multi-event management system
- 📊 Comprehensive admin panel with Filament v4
- 🎨 Beautiful, responsive frontend with Tailwind CSS
- 📝 Event registration system
- 👥 Speaker management
- 🏢 Sponsor/partner management
- 📋 Topic highlights
- 🏭 Industry categorization
- 🎨 Per-event custom branding
- 📱 Fully responsive design

## Tech Stack

- **Backend**: Laravel 11
- **Admin Panel**: Filament v4.2.3
- **Frontend**: Blade Templates, Tailwind CSS, Alpine.js
- **Animations**: GSAP, AOS
- **Database**: MySQL/SQLite

## Installation
```bash
# Clone repository
git clone <repo-url>
cd summit-events

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Database setup
php artisan migrate --seed

# Storage link
php artisan storage:link

# Build assets
npm run build

# Serve
php artisan serve
```

## Admin Access

URL: `/admin`
Default credentials:
- Email: admin@summit.com
- Password: password

## Deployment
```bash
# Optimize for production
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run build
```

## Credits

Built by [Redemption Studio](https://redemptionstudio.ae)
For [Verve Management](https://verve-management.com)