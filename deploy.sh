#!/bin/bash

# 🚀 Careway Website Deployment Script
# This script helps prepare your Laravel project for production deployment

echo "🚀 Starting Careway Website Deployment Preparation..."

# Step 1: Install production dependencies
echo "📦 Installing production dependencies..."
composer install --optimize-autoloader --no-dev

# Step 2: Clear all caches
echo "🧹 Clearing application caches..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Step 3: Generate application key (if not exists)
if [ -z "$(grep 'APP_KEY=base64:' .env)" ]; then
    echo "🔑 Generating application key..."
    php artisan key:generate
fi

# Step 4: Optimize for production
echo "⚡ Optimizing for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Step 5: Set proper permissions
echo "🔐 Setting file permissions..."
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/

# Step 6: Create deployment package
echo "📦 Creating deployment package..."
tar -czf careway-deployment-$(date +%Y%m%d-%H%M%S).tar.gz \
    --exclude='vendor' \
    --exclude='node_modules' \
    --exclude='.git' \
    --exclude='.env' \
    --exclude='*.log' \
    --exclude='storage/logs/*' \
    --exclude='storage/framework/cache/*' \
    --exclude='storage/framework/sessions/*' \
    --exclude='storage/framework/views/*' \
    .

echo "✅ Deployment package created successfully!"
echo "📋 Next steps:"
echo "1. Upload the tar.gz file to your server"
echo "2. Extract it in your web root directory"
echo "3. Run 'composer install --optimize-autoloader --no-dev' on server"
echo "4. Copy .env.production to .env and configure it"
echo "5. Run 'php artisan migrate' on server"
echo "6. Set proper file permissions on server"
echo ""
echo "📖 See DEPLOYMENT_GUIDE.md for detailed instructions" 