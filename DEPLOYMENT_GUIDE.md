# 🚀 Careway Website Deployment Guide

## 📋 **Prerequisites**
- Web hosting with PHP 8.1+ support
- MySQL/MariaDB database
- SSH access (recommended) or FTP/SFTP
- Domain name (optional but recommended)

## 🎯 **Step-by-Step Deployment Process**

### **Step 1: Prepare Your Local Project**

1. **Optimize for Production**
   ```bash
   # In your local project directory
   composer install --optimize-autoloader --no-dev
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

2. **Create Production Environment File**
   ```bash
   cp .env.example .env.production
   ```

3. **Update Production Environment**
   - Set `APP_ENV=production`
   - Set `APP_DEBUG=false`
   - Configure database credentials
   - Set `APP_URL` to your domain

### **Step 2: Choose Your Hosting Provider**

#### **Option A: Shared Hosting (cPanel)**
- **Recommended**: Hostinger, SiteGround, A2 Hosting
- **Pros**: Easy setup, good support
- **Cons**: Limited control

#### **Option B: VPS/Dedicated Server**
- **Recommended**: DigitalOcean, Linode, Vultr
- **Pros**: Full control, better performance
- **Cons**: Requires server management

#### **Option C: Cloud Platforms**
- **Recommended**: Heroku, Vercel, Netlify
- **Pros**: Easy deployment, good performance
- **Cons**: May have limitations

### **Step 3: Database Setup**

1. **Create Database**
   - Create MySQL database on your hosting
   - Note database name, username, password, and host

2. **Update .env File**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=your_host
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

### **Step 4: Upload Files**

#### **Method A: Using FTP/SFTP**
1. **Download FTP Client**: FileZilla, WinSCP
2. **Connect to Server**:
   - Host: your_domain.com
   - Username: your_ftp_username
   - Password: your_ftp_password
   - Port: 21 (FTP) or 22 (SFTP)

3. **Upload Files**:
   - Upload all files EXCEPT:
     - `vendor/` (will be installed on server)
     - `node_modules/` (if exists)
     - `.git/` folder
     - `.env` (use .env.production)

#### **Method B: Using Git (Recommended)**
1. **Initialize Git** (if not already done):
   ```bash
   git init
   git add .
   git commit -m "Initial commit"
   ```

2. **Push to Repository**:
   ```bash
   git remote add origin your_repository_url
   git push -u origin main
   ```

3. **Deploy from Repository** (if hosting supports it)

### **Step 5: Server Configuration**

#### **For Shared Hosting (cPanel)**:
1. **Set Document Root**:
   - Point to `public/` folder
   - Or upload files to `public_html/`

2. **Create .htaccess** (if not exists):
   ```apache
   <IfModule mod_rewrite.c>
       RewriteEngine On
       RewriteRule ^(.*)$ public/$1 [L]
   </IfModule>
   ```

#### **For VPS/Dedicated Server**:
1. **Install Dependencies**:
   ```bash
   composer install --optimize-autoloader --no-dev
   ```

2. **Set Permissions**:
   ```bash
   chmod -R 755 storage/
   chmod -R 755 bootstrap/cache/
   chown -R www-data:www-data storage/
   chown -R www-data:www-data bootstrap/cache/
   ```

3. **Configure Web Server**:

   **Apache Configuration**:
   ```apache
   <VirtualHost *:80>
       ServerName your_domain.com
       DocumentRoot /path/to/your/project/public
       
       <Directory /path/to/your/project/public>
           AllowOverride All
           Require all granted
       </Directory>
   </VirtualHost>
   ```

   **Nginx Configuration**:
   ```nginx
   server {
       listen 80;
       server_name your_domain.com;
       root /path/to/your/project/public;
       
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
           fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
           fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
           include fastcgi_params;
       }
       
       location ~ /\.(?!well-known).* {
           deny all;
       }
   }
   ```

### **Step 6: Final Configuration**

1. **Generate Application Key**:
   ```bash
   php artisan key:generate
   ```

2. **Run Migrations**:
   ```bash
   php artisan migrate
   ```

3. **Clear Caches**:
   ```bash
   php artisan config:clear
   php artisan cache:clear
   php artisan view:clear
   ```

4. **Optimize for Production**:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

### **Step 7: SSL Certificate (HTTPS)**

#### **Using Let's Encrypt (Free)**:
```bash
sudo apt install certbot
sudo certbot --apache -d your_domain.com
```

#### **Using cPanel**:
- Go to SSL/TLS in cPanel
- Install Let's Encrypt certificate

### **Step 8: Test Your Website**

1. **Visit Your Domain**: `https://your_domain.com`
2. **Test All Pages**:
   - Home page
   - Business Men Services page
   - Transport & Customs page
3. **Test Mobile Responsiveness**
4. **Check Performance**: Use Google PageSpeed Insights

### **Step 9: Monitoring & Maintenance**

1. **Set Up Monitoring**:
   - Uptime monitoring
   - Error logging
   - Performance monitoring

2. **Regular Maintenance**:
   ```bash
   # Weekly tasks
   php artisan cache:clear
   composer update
   ```

3. **Backup Strategy**:
   - Database backups
   - File backups
   - Automated backup scripts

## 🔧 **Troubleshooting Common Issues**

### **500 Internal Server Error**:
- Check file permissions
- Verify .env configuration
- Check error logs

### **404 Not Found**:
- Verify .htaccess file
- Check document root configuration
- Ensure mod_rewrite is enabled

### **Database Connection Error**:
- Verify database credentials
- Check database host accessibility
- Ensure database exists

### **Permission Denied**:
- Set proper file permissions
- Check ownership settings
- Verify web server user

## 📞 **Support Resources**

- **Laravel Documentation**: https://laravel.com/docs
- **Hosting Provider Support**: Check your hosting provider's documentation
- **Community Forums**: Laravel Forums, Stack Overflow

## 🎉 **Success Checklist**

- [ ] Website loads without errors
- [ ] All pages are accessible
- [ ] Mobile responsiveness works
- [ ] Door animation functions properly
- [ ] Logos display correctly
- [ ] Contact information is visible
- [ ] SSL certificate is active
- [ ] Performance is acceptable
- [ ] Backups are configured
- [ ] Monitoring is set up

---

**Congratulations! Your Careway website is now live! 🚀** 