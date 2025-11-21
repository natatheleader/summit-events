# Verve Management - Event Management Platform

<p align="center">
  <img src="public/images/verve-logo.png" alt="Verve Management Logo" width="200">
</p>

<p align="center">
  <strong>A Professional Multi-Event Management Platform</strong><br>
  Built for <a href="https://verve-management.com">Verve Management</a> - Leading Event Management Company in the Middle East
</p>

<p align="center">
  <a href="https://event.redemption-studio.com">Live Demo</a> •
  <a href="#features">Features</a> •
  <a href="#tech-stack">Tech Stack</a> •
  <a href="#installation">Installation</a> •
  <a href="#deployment">Deployment</a>
</p>

---

## 📋 Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Applications](#applications)
- [System Requirements](#system-requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Database Structure](#database-structure)
- [Admin Panel](#admin-panel)
- [Frontend Features](#frontend-features)
- [Deployment](#deployment)
- [Maintenance](#maintenance)
- [Troubleshooting](#troubleshooting)
- [Credits](#credits)
- [License](#license)

---

## 🎯 Overview

The Verve Management Event Platform is a comprehensive, enterprise-grade event management system designed to showcase and manage business summits, conferences, and corporate events across the Middle East. Built with modern web technologies, it provides a seamless experience for both event organizers and attendees.

**Live Site:** [https://event.redemption-studio.com](https://event.redemption-studio.com)

### Key Highlights

- 🎨 **Multi-Event Support** - Manage unlimited events with unique branding per event
- 🎭 **Dynamic Theming** - Each event can have its own colors, logo, and visual identity
- 📊 **Powerful Admin Panel** - Built with Filament v4 for intuitive content management
- 📱 **Fully Responsive** - Optimized for desktop, tablet, and mobile devices
- 🚀 **High Performance** - Optimized for speed with caching and lazy loading
- 🔒 **Secure** - Built with Laravel's security best practices
- 🌐 **SEO Optimized** - Meta tags, sitemap, and semantic HTML

---

## ✨ Features

### Event Management
- ✅ **Unlimited Events** - Create and manage multiple events simultaneously
- ✅ **Custom Branding** - Unique color schemes, logos, and hero images per event
- ✅ **Event Details** - Venue, location, dates, descriptions, and statistics
- ✅ **Featured Events** - Highlight important events on homepage
- ✅ **Active/Inactive Status** - Control event visibility

### Content Management
- ✅ **Speaker Profiles** - Photo, bio, job title, company, LinkedIn integration
- ✅ **Topic Highlights** - Organized discussion topics with descriptions
- ✅ **Sponsor Management** - Multi-tier sponsorship (Platinum, Gold, Silver, Bronze, Partner)
- ✅ **Industry Categories** - Tag events with relevant industries
- ✅ **Rich Text Editing** - WYSIWYG editor for detailed content

### Registration System
- ✅ **Online Registration** - Multi-type registration (Delegate, Sponsor, Speaker, Exhibitor)
- ✅ **Status Management** - Pending, Approved, Rejected workflow
- ✅ **Registration Analytics** - Track registrations per event
- ✅ **Email Notifications** - (Ready for integration)

### Frontend Features
- ✅ **Modern UI/UX** - Clean, professional design with smooth animations
- ✅ **Interactive Elements** - GSAP animations, AOS scroll effects
- ✅ **Event Showcase** - Featured, upcoming, and past events sections
- ✅ **Event Detail Pages** - Comprehensive event information display
- ✅ **Statistics Display** - Attendees, speakers, organizations counts
- ✅ **Responsive Design** - Mobile-first approach
- ✅ **Dark Mode Ready** - Prepared for dark theme implementation

### Admin Panel (Filament v4)
- ✅ **Dashboard** - Overview of all events and registrations
- ✅ **Event Management** - Full CRUD operations with image uploads
- ✅ **Registration Management** - View and manage all registrations
- ✅ **Speaker Management** - Add, edit, and organize speakers
- ✅ **Sponsor Management** - Manage sponsor tiers and logos
- ✅ **Topic Management** - Create and order discussion topics
- ✅ **Industry Management** - Define industry categories
- ✅ **User Management** - Admin user accounts
- ✅ **Bulk Actions** - Efficient batch operations
- ✅ **Search & Filters** - Advanced filtering capabilities
- ✅ **Image Editor** - Built-in cropping and editing tools

---

## 🛠️ Tech Stack

### Backend Framework
- **Laravel 11.x** - Modern PHP framework with elegant syntax
  - MVC architecture for clean code organization
  - Eloquent ORM for database interactions
  - Blade templating engine for views
  - Built-in authentication and authorization
  - Database migrations and seeders
  - Form validation and request handling

### Admin Panel
- **Filament v4.2.3** - Modern TALL-stack admin panel
  - Built on Livewire for reactive components
  - Beautiful UI with TailwindCSS
  - Form builder with validation
  - Table builder with filters and actions
  - Resource-based CRUD operations
  - File upload with image editing
  - Relationship management

### Frontend Technologies
- **TailwindCSS 3.x** - Utility-first CSS framework
  - Custom color palette for Verve branding
  - Responsive breakpoints
  - Custom animations and transitions
  - Dark mode support ready

- **Alpine.js 3.x** - Lightweight JavaScript framework
  - Mobile menu toggling
  - Interactive UI components
  - Reactive data binding

- **GSAP (GreenSock)** - Professional animation library
  - Smooth scroll animations
  - Counter animations for statistics
  - Hero section effects

- **AOS (Animate On Scroll)** - Scroll animation library
  - Fade-in effects
  - Slide animations
  - Staggered animations for lists

- **Vite** - Modern build tool
  - Fast hot module replacement
  - Optimized production builds
  - Asset bundling and minification

### Database
- **MySQL 8.x** - Relational database
  - Optimized queries with indexes
  - Foreign key constraints
  - Migration-based schema management
  - Seeders for sample data

### Additional Libraries
- **Spatie Laravel Sitemap** - Automatic sitemap generation
- **Intervention Image** - Image manipulation (ready for integration)
- **Laravel Debugbar** - Development debugging tool

### Development Tools
- **Composer** - PHP dependency management
- **NPM** - Node package management
- **Git** - Version control
- **VS Code** - Recommended IDE with extensions:
  - Laravel Extension Pack
  - Tailwind CSS IntelliSense
  - PHP Intelephense

---

## 🎯 Applications

This platform serves multiple use cases:

### 1. Event Organizers
- **Conference Management** - Tech summits, business conferences
- **Summit Organization** - Industry-specific summits
- **Corporate Events** - Company meetings, product launches
- **Trade Shows** - Exhibitions and expos
- **Networking Events** - Business networking sessions

### 2. Industries Served
- Banking & Finance
- Technology & Innovation
- Real Estate & Construction
- Healthcare & Pharmaceuticals
- Energy & Sustainability
- Retail & E-commerce
- Manufacturing & Industrial
- Education & Training

### 3. Stakeholder Benefits

**Event Managers:**
- Centralized event management
- Easy content updates
- Registration tracking
- Sponsor management
- Speaker coordination

**Attendees:**
- Easy event discovery
- Simple registration process
- Event information access
- Speaker profiles
- Schedule and topics

**Sponsors:**
- Brand visibility
- Tiered exposure options
- Direct website linking
- Logo showcase

**Speakers:**
- Professional profiles
- LinkedIn integration
- Company representation
- Bio and credentials display

---

## 💻 System Requirements

### Development Environment
- **PHP**: 8.2 or higher
- **Composer**: 2.x
- **Node.js**: 18.x or higher
- **NPM**: 9.x or higher
- **MySQL**: 8.0 or higher (or MariaDB 10.3+)
- **Web Server**: Apache 2.4+ or Nginx 1.18+

### PHP Extensions Required
```
- BCMath
- Ctype
- cURL
- DOM
- Fileinfo
- JSON
- Mbstring
- OpenSSL
- PCRE
- PDO
- PDO MySQL
- Tokenizer
- XML
- GD or Imagick
```

### Server Requirements (Production)
- **RAM**: Minimum 1GB (2GB+ recommended)
- **Storage**: 500MB+ free space
- **SSL Certificate**: Required for production
- **PHP Memory Limit**: 256M or higher

---

## 🚀 Installation

### Step 1: Clone Repository
```bash
# Clone the repository
git clone https://github.com/YOUR_USERNAME/summit-events.git

# Navigate to project directory
cd summit-events
```

### Step 2: Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### Step 3: Environment Setup
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### Step 4: Configure Environment

Edit `.env` file with your settings:
```env
APP_NAME="Verve Management Events"
APP_ENV=local
APP_KEY=base64:GENERATED_KEY_HERE
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost:8000

# Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=summit_events
DB_USERNAME=root
DB_PASSWORD=your_password

# Mail Configuration (for notifications)
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="noreply@verve-management.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### Step 5: Database Setup
```bash
# Create database
mysql -u root -p
CREATE DATABASE summit_events CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;

# Run migrations and seed sample data
php artisan migrate --seed
```

### Step 6: Storage Link
```bash
# Create symbolic link for public storage
php artisan storage:link
```

### Step 7: Build Frontend Assets
```bash
# Development build with hot reload
npm run dev

# OR Production build (optimized)
npm run build
```

### Step 8: Start Development Server
```bash
# Start Laravel development server
php artisan serve

# Application will be available at:
# http://localhost:8000
```

### Step 9: Create Admin User
```bash
# Create Filament admin user
php artisan make:filament-user

# Enter details when prompted:
# Name: Admin
# Email: admin@summit.com
# Password: (your secure password)
```

### Step 10: Access Application

- **Frontend**: http://localhost:8000
- **Admin Panel**: http://localhost:8000/admin

---

## ⚙️ Configuration

### Customization

#### 1. Update Branding

**resources/views/layouts/app.blade.php**
- Update company name
- Change logo paths
- Modify contact information
- Update social media links

#### 2. Configure Email

**config/mail.php**
- Setup SMTP credentials
- Configure email templates
- Set sender information

#### 3. Customize Colors

**tailwind.config.js**
```javascript
colors: {
  verve: {
    DEFAULT: '#E31E24', // Verve red
    // Add custom shades
  },
}
```

#### 4. SEO Settings

**Update meta tags in:**
- `resources/views/layouts/app.blade.php`
- `resources/views/home.blade.php`
- `resources/views/events/show.blade.php`

---

## 🗄️ Database Structure

### Main Tables

**events** - Event information
- id, name, slug, tagline, description, overview
- start_date, end_date, venue, location
- primary_color, secondary_color, logo, hero_image
- expected_attendees, speakers_count, organizations_count
- is_featured, is_active, timestamps

**registrations** - Event registrations
- id, event_id, name, email, phone
- company, job_title, registration_type
- status (pending/approved/rejected), message
- timestamps

**speakers** - Event speakers
- id, event_id, name, title, company
- photo, bio, linkedin, order
- timestamps

**sponsors** - Event sponsors
- id, event_id, name, logo, website
- tier (platinum/gold/silver/bronze/partner)
- order, timestamps

**topics** - Discussion topics
- id, event_id, title, description, order
- timestamps

**industries** - Industry categories
- id, name, slug, timestamps

**event_industry** - Pivot table
- event_id, industry_id

**users** - Admin users
- id, name, email, password, timestamps

### Relationships

- Event → hasMany → Registrations, Speakers, Sponsors, Topics
- Event → belongsToMany → Industries
- Registration → belongsTo → Event
- Speaker → belongsTo → Event
- Sponsor → belongsTo → Event
- Topic → belongsTo → Event

---

## 👨‍💼 Admin Panel

### Access
URL: `https://your-domain.com/admin`

### Features Overview

#### Dashboard
- Total events count
- Active events
- Total registrations
- Recent activity

#### Events Management
1. **Create Event**
   - Basic information (name, slug, tagline)
   - Event details (dates, venue, location)
   - Branding (colors, logo, hero image)
   - Statistics (attendees, speakers, organizations)
   - Content sections (overview, why attend, why sponsor)
   - Industry selection
   - Contact information
   - Settings (featured, active)

2. **Edit Event**
   - Update all event information
   - Upload/change images
   - Modify dates and details
   - Toggle visibility

3. **View Registrations**
   - Filter by event
   - Approve/reject registrations
   - Export data (ready for implementation)

#### Registrations Management
- View all registrations
- Filter by event, type, status
- Approve/reject/delete
- Search by name, email, company
- View full details

#### Speakers Management
- Add speaker profiles
- Upload photos with cropping
- Set display order
- Link to LinkedIn profiles
- Assign to events

#### Sponsors Management
- Add sponsor logos
- Set sponsorship tier
- Order within tier
- Link to websites
- Assign to events

#### Topics Management
- Create discussion topics
- Add descriptions
- Set display order
- Assign to events

#### Industries Management
- Define industry categories
- Auto-generate slugs
- View event count per industry

---

## 🎨 Frontend Features

### Homepage Sections

1. **Hero Section**
   - Verve Management branding
   - Animated statistics counter
   - Call-to-action buttons
   - Smooth scroll indicator

2. **About Verve Management**
   - Company overview
   - Core features
   - Link to main website

3. **Featured Events**
   - Highlighted events carousel
   - Event cards with images
   - Quick access to details

4. **Upcoming Events**
   - Grid layout
   - Date badges
   - Industry tags
   - Registration CTA

5. **Past Events**
   - Success stories
   - Archive section

6. **Footer**
   - Company information
   - Quick links
   - Contact details
   - Social media links

### Event Detail Page

1. **Hero Section**
   - Dynamic event branding
   - Event logo and colors
   - Key information (date, location)
   - Register CTA

2. **Statistics Bar**
   - Expected attendees
   - Speaker count
   - Organization count
   - Custom stats

3. **About Event**
   - Full description
   - Overview content
   - Industry tags

4. **Topics Section**
   - Numbered list
   - Topic descriptions
   - Visual hierarchy

5. **Speakers Section**
   - Speaker cards grid
   - Photos and bios
   - LinkedIn integration

6. **Sponsors Section**
   - Tiered display
   - Logo showcase
   - Website links

7. **Registration Form**
   - Multi-field form
   - Type selection
   - AJAX submission
   - Success feedback

---

## 🚀 Deployment

### Shared Hosting (cPanel)

#### Pre-Deployment Checklist
```bash
# On local machine

# 1. Update .env.example with production values
# 2. Build production assets
npm run build

# 3. Commit built assets
git add public/build
git commit -m "Add production build"
git push origin main

# 4. Test everything locally
php artisan serve
```

#### Deployment Steps

1. **Setup Database**
   - Create MySQL database in cPanel
   - Create database user
   - Grant all privileges
   - Note credentials

2. **Create Subdomain**
   - Add subdomain in cPanel
   - Set document root to: `/public_html/subdomain/public`

3. **Clone Repository**
```bash
cd ~/subdomain_folder
git clone https://github.com/YOUR_REPO/summit-events.git .
```

4. **Install Dependencies**
```bash
composer install --no-dev --optimize-autoloader
```

5. **Configure Environment**
```bash
cp .env.example .env
nano .env  # Edit with production values
```

6. **Setup Application**
```bash
php artisan key:generate
php artisan migrate --seed --force
php artisan storage:link
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

7. **Set Permissions**
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

8. **Install SSL**
   - Use Let's Encrypt in cPanel
   - Force HTTPS in .htaccess

9. **Create Admin User**
```bash
php artisan make:filament-user
```

10. **Test Site**
    - Visit homepage
    - Test event pages
    - Test registration
    - Login to admin panel

### VPS (DigitalOcean/AWS/Linode)

#### Server Setup
```bash
# Update system
sudo apt update && sudo apt upgrade -y

# Install required packages
sudo apt install -y php8.2 php8.2-fpm php8.2-mysql php8.2-mbstring \
php8.2-xml php8.2-bcmath php8.2-curl php8.2-gd php8.2-zip \
mysql-server nginx git composer nodejs npm

# Configure Nginx
sudo nano /etc/nginx/sites-available/summit-events

# Add configuration:
server {
    listen 80;
    server_name event.redemption-studio.com;
    root /var/www/summit-events/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}

# Enable site
sudo ln -s /etc/nginx/sites-available/summit-events /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx

# Install SSL
sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d event.redemption-studio.com
```

#### Application Deployment
```bash
cd /var/www
sudo git clone https://github.com/YOUR_REPO/summit-events.git
cd summit-events

sudo composer install --no-dev --optimize-autoloader
sudo npm install && sudo npm run build

sudo cp .env.example .env
sudo nano .env  # Configure

sudo php artisan key:generate
sudo php artisan migrate --seed --force
sudo php artisan storage:link
sudo php artisan optimize

# Set permissions
sudo chown -R www-data:www-data /var/www/summit-events
sudo chmod -R 755 /var/www/summit-events/storage
sudo chmod -R 755 /var/www/summit-events/bootstrap/cache
```

### Laravel Forge (Easiest)

1. Connect GitHub repository
2. Configure environment
3. Deploy with one click
4. Automatic SSL and optimization

---

## 🔧 Maintenance

### Regular Updates
```bash
# Pull latest changes
git pull origin main

# Update dependencies
composer install --no-dev --optimize-autoloader
npm install && npm run build

# Run migrations
php artisan migrate --force

# Clear and recache
php artisan optimize
```

### Backup Strategy

**Database Backup**
```bash
# Manual backup
mysqldump -u username -p database_name > backup.sql

# Restore
mysql -u username -p database_name < backup.sql
```

**Automated Backup (Add to cron)**
```bash
0 2 * * * cd /path/to/app && php artisan backup:run
```

### Performance Optimization
```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer dump-autoload --optimize

# Clear all caches
php artisan optimize:clear
```

### Monitoring

- **Error Logs**: `storage/logs/laravel.log`
- **Web Server Logs**: Check Apache/Nginx logs
- **Database Performance**: Use query logging
- **Uptime Monitoring**: Use services like UptimeRobot

---

## 🐛 Troubleshooting

### Common Issues

**500 Internal Server Error**
```bash
# Check permissions
chmod -R 755 storage bootstrap/cache

# Clear caches
php artisan config:clear
php artisan cache:clear

# Check logs
tail -50 storage/logs/laravel.log
```

**Assets Not Loading**
```bash
# Rebuild assets
npm run build

# Check public/build exists
ls -la public/build/

# Clear view cache
php artisan view:clear
```

**Database Connection Failed**
- Verify .env database credentials
- Check database server is running
- Test connection: `php artisan migrate:status`

**Images Not Displaying**
```bash
# Relink storage
php artisan storage:link

# Check permissions
chmod -R 755 storage/app/public
```

**Admin Panel Not Loading**
```bash
# Clear Filament cache
php artisan filament:clear-cached-components

# Publish Filament assets
php artisan filament:assets
```

---

## 📊 Performance Benchmarks

### Page Load Times
- **Homepage**: ~800ms
- **Event Detail**: ~900ms
- **Admin Panel**: ~1.2s

### Optimization Features
- ✅ Vite asset bundling
- ✅ Lazy image loading
- ✅ Route caching
- ✅ View caching
- ✅ Query optimization
- ✅ CDN ready (for static assets)

---

## 🔐 Security Features

- ✅ CSRF protection on all forms
- ✅ SQL injection prevention (Eloquent ORM)
- ✅ XSS protection (Blade escaping)
- ✅ Password hashing (Bcrypt)
- ✅ Rate limiting on API endpoints
- ✅ Secure session management
- ✅ Environment variable protection
- ✅ File upload validation

---

## 📱 Browser Support

- ✅ Chrome/Edge (latest 2 versions)
- ✅ Firefox (latest 2 versions)
- ✅ Safari (latest 2 versions)
- ✅ Mobile Safari (iOS 14+)
- ✅ Chrome Mobile (Android 10+)

---

## 🤝 Contributing

This is a proprietary project built for Verve Management. For feature requests or bug reports, please contact the development team.

---

## 📄 License

Proprietary - All rights reserved by Verve Management.

This software is licensed exclusively for use by Verve Management and its authorized partners. Unauthorized copying, distribution, or use is strictly prohibited.

---

## 👏 Credits

### Development Team
- **Lead Developer**: [Redemption Studio](https://redemption-studio.com)
- **Client**: [Verve Management](https://verve-management.com)
- **Project Type**: Custom Event Management Platform

### Technologies Used
- [Laravel](https://laravel.com) - PHP Framework
- [Filament](https://filamentphp.com) - Admin Panel
- [TailwindCSS](https://tailwindcss.com) - CSS Framework
- [Alpine.js](https://alpinejs.dev) - JavaScript Framework
- [GSAP](https://greensock.com/gsap/) - Animation Library
- [AOS](https://michalsnik.github.io/aos/) - Scroll Animation

### Special Thanks
- Laravel Community
- Filament Community
- Open Source Contributors

---

## 📞 Support

For technical support or inquiries:

- **Email**: info@redemption-studio.com
- **Website**: https://redemption-studio.com
- **Client**: https://verve-management.com

---

## 📅 Version History

### v1.0.0 (November 2024)
- ✅ Initial release
- ✅ Multi-event management system
- ✅ Filament v4 admin panel
- ✅ Registration system
- ✅ Speaker & sponsor management
- ✅ Responsive frontend
- ✅ Dynamic event branding

### Future Enhancements
- 🔄 Email notification system
- 🔄 Payment integration for paid events
- 🔄 Attendee check-in system
- 🔄 Event analytics dashboard
- 🔄 Export registration data
- 🔄 Multi-language support
- 🔄 Calendar integration
- 🔄 Mobile app (PWA)

---

<p align="center">
  Built with ❤️ by <a href="https://redemption-studio.com">Redemption Studio</a> for <a href="https://verve-management.com">Verve Management</a>
</p>

<p align="center">
  <strong>Delivering World-Class Business Events Across the Middle East</strong>
</p>