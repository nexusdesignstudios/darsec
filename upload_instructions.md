# Hostinger Upload Instructions

## 📁 Files Created
- `index.php` - Main test page
- `config.php` - Database configuration
- `database_test.php` - Database connection test
- `.htaccess` - Apache configuration

## 🚀 Upload Process

### Method 1: Hostinger File Manager
1. Login to Hostinger control panel
2. Go to **File Manager**
3. Navigate to `public_html/` directory
4. Upload all files from your local `htdocs/` folder

### Method 2: FTP/SFTP
1. Use FileZilla or similar FTP client
2. Connect with your Hostinger FTP credentials
3. Navigate to `public_html/`
4. Upload all files

### Method 3: GitHub Deployment (Advanced)
1. Push files to GitHub repository
2. Use Hostinger's Git integration
3. Deploy from repository

## ⚙️ Configuration Steps

### 1. Update Database Credentials
Edit `config.php` with your actual Hostinger database details:
- Get database info from Hostinger → MySQL Databases
- Replace placeholder values

### 2. Test Your Site
Access: `https://yourdomain.com/index.php`

### 3. Test Database
Access: `https://yourdomain.com/database_test.php`

## 🔧 Hostinger Specific Notes

### Database Setup
1. In Hostinger panel: MySQL Databases → Create Database
2. Create database user and password
3. Add user to database with all privileges
4. Use these credentials in `config.php`

### PHP Version
- Hostinger supports PHP 7.4, 8.0, 8.1, 8.2
- Change in: Hosting → Advanced → PHP Configuration

### Security
- After testing, set `debug.enabled = false` in config.php
- Remove `php_flag display_errors on` from .htaccess
- Keep config.php permissions restricted

## 📋 Upload Checklist
- [ ] Update config.php with real database credentials
- [ ] Upload all files to public_html/
- [ ] Test index.php loads correctly
- [ ] Test database connection
- [ ] Set debug to false for production
- [ ] Verify .htaccess is working

## 🐛 Troubleshooting

### 500 Error
- Check .htaccess syntax
- Verify PHP version compatibility
- Check file permissions (644 for files, 755 for directories)

### Database Connection Failed
- Verify database credentials
- Check if database exists
- Ensure user has proper privileges
- Confirm localhost is correct host

### White Screen
- Enable error display in .htaccess
- Check PHP error logs in Hostinger panel
- Verify file permissions

## 🌐 Live Preview
Once uploaded, your site will be live at:
`https://yourdomain.com`

For testing before pointing your domain:
`https://server.hostinger.com/~username/`
