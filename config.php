<?php
// Configuration file for Hostinger
// Update these values with your actual Hostinger database credentials

return [
    // Database configuration
    'database' => [
        'host' => 'localhost',  // Usually localhost on Hostinger
        'name' => 'your_database_name',  // Your database name from Hostinger panel
        'user' => 'your_username',  // Your database username
        'pass' => 'your_password',  // Your database password
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci'
    ],
    
    // Site configuration
    'site' => [
        'name' => 'My PHP Site',
        'url' => 'https://yourdomain.com',  // Update with your domain
        'email' => 'admin@yourdomain.com',
        'timezone' => 'UTC'
    ],
    
    // Security settings
    'security' => [
        'encryption_key' => 'your_32_character_encryption_key_here',
        'session_lifetime' => 3600, // 1 hour
        'enable_csrf' => true
    ],
    
    // Debug settings (set to false in production)
    'debug' => [
        'enabled' => true,  // Set to false when live
        'show_errors' => true,  // Set to false when live
        'log_errors' => true
    ]
];
?>
