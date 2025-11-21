# Verve Management - Event Management Platform

<p align="center">
  <strong>A Professional Multi-Event Management Platform</strong><br>
  Built for <a href="https://verve-management.com">Verve Management</a>
</p>

<p align="center">
  <a href="https://event.redemption-studio.com">Live Demo</a>
</p>

---

## Overview

Professional event management system designed to showcase and manage business summits, conferences, and corporate events across the Middle East. Features a powerful admin panel for content management and a beautiful responsive frontend.

**Live Site:** [https://event.redemption-studio.com](https://event.redemption-studio.com)

---

## Features

### Core Functionality
- ✅ **Multi-Event Management** - Create and manage unlimited events
- ✅ **Custom Branding** - Unique colors, logos, and themes per event
- ✅ **Registration System** - Multi-type registration (Delegate, Sponsor, Speaker, Exhibitor)
- ✅ **Speaker Profiles** - Photos, bios, company info, LinkedIn integration
- ✅ **Sponsor Management** - Multi-tier sponsorship display
- ✅ **Topic Highlights** - Organized discussion topics
- ✅ **Industry Categories** - Tag events by industry
- ✅ **Rich Text Editor** - WYSIWYG content editing
- ✅ **Responsive Design** - Mobile-first, fully responsive
- ✅ **SEO Optimized** - Meta tags, sitemap generation

### Admin Features
- Full CRUD operations for all content
- Image uploads with built-in editor
- Bulk actions and advanced filtering
- Registration status management
- Search and sort capabilities
- Dashboard with analytics

---

## Tech Stack

### Backend
- Laravel 11
- Filament v4.2.3
- MySQL 8.x
- PHP 8.2+

### Frontend
- TailwindCSS 3.x
- Alpine.js 3.x
- Blade Templates
- Vite

### Libraries
- GSAP (animations)
- AOS (scroll effects)
- Spatie Laravel Sitemap

---

## Requirements

- PHP 8.2 or higher
- Composer 2.x
- Node.js 18.x or higher
- MySQL 8.0 or higher
- 1GB RAM minimum

---

## Installation
```bash
# Clone repository
git clone [https://github.com/natatheleader/summit-events.git](https://github.com/natatheleader/summit-events.git)
cd summit-events

# Install dependencies
composer install
npm install

# Environment setup
cp .env.example .env
php artisan key:generate

# Configure database in .env
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Run migrations and seed
php artisan migrate --seed

# Link storage
php artisan storage:link

# Build assets
npm run build

# Start server
php artisan serve

# Create admin user
php artisan make:filament-user
```

**Access:**
- Frontend: http://localhost:8000
- Admin: http://localhost:8000/admin

---

## Database Structure

### Main Tables
- **events** - Event information, branding, dates, statistics
- **registrations** - User registrations with status management
- **speakers** - Speaker profiles and details
- **sponsors** - Sponsor logos and tier information
- **topics** - Discussion topics for events
- **industries** - Industry categories
- **users** - Admin users

### Relationships
- Events have many: Registrations, Speakers, Sponsors, Topics
- Events belong to many: Industries
- All content belongs to specific Events

---

## Quick Deployment (Shared Hosting)
```bash
# 1. Build assets locally
npm run build

# 2. Push to GitHub
git add .
git commit -m "Production build"
git push origin main

# 3. On server (SSH/Terminal)
cd ~/your-subdomain-folder
git clone https://github.com/YOUR_REPO/summit-events.git .
composer install --no-dev --optimize-autoloader

# 4. Configure
cp .env.example .env
nano .env  # Edit database credentials
php artisan key:generate
php artisan migrate --seed --force
php artisan storage:link

# 5. Optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache
chmod -R 755 storage bootstrap/cache

# 6. Create admin
php artisan make:filament-user
```

---

## Configuration

### Update Branding
Edit `resources/views/layouts/app.blade.php` for:
- Company name and logo
- Contact information
- Social media links

### Environment Variables
Key `.env` settings:
```env
APP_NAME="Verve Management Events"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=mysql
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

---

## Updating Site
```bash
# Local: push changes
git add .
git commit -m "Update"
git push origin main

# Server: pull and update
cd ~/your-site-folder
git pull origin main
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan optimize
```

---

## Common Commands
```bash
# Clear all caches
php artisan optimize:clear

# Rebuild caches
php artisan optimize

# Generate sitemap
php artisan sitemap:generate

# Check routes
php artisan route:list

# Check migrations
php artisan migrate:status
```

---

## Applications

### Industries Served
- Banking & Finance
- Technology & Innovation
- Real Estate & Construction
- Healthcare & Pharmaceuticals
- Energy & Sustainability
- Retail & E-commerce

### Event Types
- Business Conferences
- Industry Summits
- Corporate Events
- Trade Shows
- Networking Events

---

## Browser Support

- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Mobile browsers (iOS 14+, Android 10+)

---

## Security

- CSRF protection
- SQL injection prevention
- XSS protection
- Secure password hashing
- Rate limiting
- Environment variable protection

---

## Credits

**Development:** [Redemption Studio](https://redemption-studio.com)  
**Client:** [Verve Management](https://verve-management.com)

### Built With
Laravel • Filament • TailwindCSS • Alpine.js • GSAP • AOS

---

## Support

**Email:** info@redemption-studio.com  
**Website:** https://redemption-studio.com

---

## License

Proprietary - All rights reserved by Verve Management.

---

<p align="center">
  Built with ❤️ by <a href="https://redemption-studio.com">Redemption Studio</a>
</p>
