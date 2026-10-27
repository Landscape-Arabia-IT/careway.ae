# Careway Website

A modern Laravel 12 website for Careway with two distinct company sections and coming soon pages. Based in UAE.

## Features

- **Modern Design**: Clean, professional design with brand colors
- **Two Company Sections**: 
  - CARE WAY BUSINESS MEN SERVICES - SOLE PROPRIETORSHIP L.L.C
  - CARE WAY TRANSPORT AND CUSTOMS CLEARANCE - L.L.C - S.P.C
- **Responsive Layout**: Works perfectly on all devices
- **Brand Colors**: 
  - Text: Black (#000000)
  - Background: Light Gray (#f4f4f4)
  - Brand Gold: #d1af7e
  - Brand Brown: #886c4d

See [DEVELOPMENT.md](DEVELOPMENT.md) for the verified local setup and startup commands.

## Setup Instructions

1. **Install Dependencies**:
   ```bash
   composer install
   npm install
   ```

2. **Environment Setup**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Database Setup**:
   ```bash
   php artisan migrate
   ```

4. **Start Development Server**:
   ```bash
   php artisan serve
   ```

5. **Build Assets** (if using Vite):
   ```bash
   npm run dev
   ```

## Logo Upload Instructions

### Directory Structure
Logos should be uploaded to: `public/images/logos/`

### Required Logo Files
1. **Business Men Services Logo**:
   - File: `public/images/logos/business-men-logo.png` (or .jpg, .svg)
   - Recommended size: 300x300px minimum
   - Format: PNG, JPG, or SVG

2. **Transport & Customs Logo**:
   - File: `public/images/logos/transport-logo.png` (or .jpg, .svg)
   - Recommended size: 300x300px minimum
   - Format: PNG, JPG, or SVG

### How to Replace Placeholder Logos

1. **Upload your logo files** to the `public/images/logos/` directory
2. **Update the view files** to use your actual logos:

   **For Business Men Services** (`resources/views/home.blade.php`):
   ```html
   <!-- Replace this placeholder div -->
   <div class="w-32 h-32 mx-auto bg-gradient-to-br from-careway-gold to-careway-brown rounded-full flex items-center justify-center mb-4">
       <span class="text-white text-2xl font-bold">BM</span>
   </div>
   
   <!-- With your actual logo -->
   <img src="{{ asset('images/logos/business-men-logo.png') }}" alt="Business Men Services Logo" class="w-32 h-32 mx-auto mb-4">
   ```

   **For Transport & Customs** (`resources/views/home.blade.php`):
   ```html
   <!-- Replace this placeholder div -->
   <div class="w-32 h-32 mx-auto bg-gradient-to-br from-careway-brown to-careway-gold rounded-full flex items-center justify-center mb-4">
       <span class="text-white text-2xl font-bold">TC</span>
   </div>
   
   <!-- With your actual logo -->
   <img src="{{ asset('images/logos/transport-logo.png') }}" alt="Transport & Customs Logo" class="w-32 h-32 mx-auto mb-4">
   ```

3. **Also update the coming soon pages**:
   - `resources/views/business-men/coming-soon.blade.php`
   - `resources/views/transport/coming-soon.blade.php`

## Routes

- `/` - Main landing page with company selection
- `/business-men` - Business Men Services coming soon page
- `/transport` - Transport & Customs Clearance coming soon page

## File Structure

```
careway-laravel/
├── app/Http/Controllers/
│   ├── HomeController.php
│   ├── BusinessMenController.php
│   └── TransportController.php
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php
│   ├── home.blade.php
│   ├── business-men/
│   │   └── coming-soon.blade.php
│   └── transport/
│       └── coming-soon.blade.php
├── public/images/logos/
│   ├── business-men-logo.png (upload your logo here)
│   └── transport-logo.png (upload your logo here)
└── routes/
    └── web.php
```

## Customization

### Brand Colors
The brand colors are defined in `resources/views/layouts/app.blade.php`:
- `careway-gold`: #d1af7e
- `careway-brown`: #886c4d
- `careway-bg`: #f4f4f4

### Font
The website uses Inter font family for a modern, professional look.

## Deployment

1. Set up your web server (Apache/Nginx)
2. Point the document root to `public/`
3. Ensure proper permissions on `storage/` and `bootstrap/cache/`
4. Configure your environment variables in `.env`

## Contact Information

- **Email**: info@careway.ae
- **Phone**: 02-5551662
- **Fax**: 02-5551663
- **Address**: Abu Dhabi 39752 United Arab Emirates

## Support

For any questions or customization needs, please refer to the Laravel documentation or contact the development team.
