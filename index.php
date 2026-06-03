<?php
// Basic PHP test page for Hostinger
session_start();

// Server information
$server_info = [
    'PHP Version' => phpversion(),
    'Server Software' => $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown',
    'Document Root' => $_SERVER['DOCUMENT_ROOT'] ?? 'Unknown',
    'Server Name' => $_SERVER['SERVER_NAME'] ?? 'Unknown',
    'Request Method' => $_SERVER['REQUEST_METHOD'] ?? 'Unknown'
];

// Test database connection (modify with your credentials)
$db_config = [
    'host' => 'localhost',
    'database' => 'your_database_name',
    'username' => 'your_username',
    'password' => 'your_password'
];

$db_status = 'Not configured';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test Page - Hostinger</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; }
        .header { background: #f4f4f4; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
        .info-section { background: #e8f4fd; padding: 15px; margin: 10px 0; border-radius: 5px; }
        .success { background: #d4edda; color: #155724; }
        .warning { background: #fff3cd; color: #856404; }
        table { width: 100%; border-collapse: collapse; margin: 10px 0; }
        th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
        th { background: #f8f9fa; }
    </style>
</head>
<body>
    <div class="header">
        <h1>🚀 PHP Test Page for Hostinger</h1>
        <p>This page confirms your PHP environment is working correctly.</p>
    </div>

    <div class="info-section">
        <h2>📊 Server Information</h2>
        <table>
            <?php foreach ($server_info as $key => $value): ?>
            <tr>
                <th><?php echo htmlspecialchars($key); ?></th>
                <td><?php echo htmlspecialchars($value); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <div class="info-section">
        <h2>🔧 PHP Configuration</h2>
        <ul>
            <li>Memory Limit: <?php echo ini_get('memory_limit'); ?></li>
            <li>Max Execution Time: <?php echo ini_get('max_execution_time'); ?>s</li>
            <li>Upload Max Filesize: <?php echo ini_get('upload_max_filesize'); ?></li>
            <li>Post Max Size: <?php echo ini_get('post_max_size'); ?></li>
        </ul>
    </div>

    <div class="info-section">
        <h2>📁 Directory Structure</h2>
        <p>Current directory: <strong><?php echo __DIR__; ?></strong></p>
        <p>Document root: <strong><?php echo $_SERVER['DOCUMENT_ROOT'] ?? 'Unknown'; ?></strong></p>
    </div>

    <div class="info-section <?php echo $db_status === 'Connected' ? 'success' : 'warning'; ?>">
        <h2>🗄️ Database Status</h2>
        <p>Status: <strong><?php echo $db_status; ?></strong></p>
        <?php if ($db_status === 'Not configured'): ?>
        <p><small>Configure database credentials in this file to test connection.</small></p>
        <?php endif; ?>
    </div>

    <div class="info-section">
        <h2>✅ Features Working</h2>
        <ul>
            <li>✓ PHP execution</li>
            <li>✓ Session management</li>
            <li>✓ Server variables</li>
            <li>✓ File system access</li>
        </ul>
    </div>

    <div class="info-section">
        <h2>🕒 Current Time</h2>
        <p>Server Time: <strong><?php echo date('Y-m-d H:i:s'); ?></strong></p>
        <p>Timezone: <strong><?php echo date_default_timezone_get(); ?></strong></p>
    </div>
</body>
</html>
