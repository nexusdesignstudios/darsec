<?php
// Database connection test for Hostinger
require_once 'config.php';

$config = include 'config.php';
$db_config = $config['database'];

$connection_status = 'Not Attempted';
$error_message = '';

try {
    // Create PDO connection
    $dsn = "mysql:host={$db_config['host']};dbname={$db_config['name']};charset={$db_config['charset']}";
    
    $pdo = new PDO($dsn, $db_config['user'], $db_config['pass'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
    
    $connection_status = 'Connected Successfully';
    
    // Test query
    $stmt = $pdo->query("SELECT VERSION() as version");
    $mysql_version = $stmt->fetch()['version'];
    
} catch (PDOException $e) {
    $connection_status = 'Connection Failed';
    $error_message = $e->getMessage();
    $mysql_version = 'N/A';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Test - Hostinger</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; }
        .status { padding: 15px; border-radius: 5px; margin: 10px 0; }
        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .info { background: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; }
        table { width: 100%; border-collapse: collapse; margin: 10px 0; }
        th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
        th { background: #f8f9fa; }
    </style>
</head>
<body>
    <h1>🗄️ Database Connection Test</h1>
    
    <div class="status <?php echo $connection_status === 'Connected Successfully' ? 'success' : 'error'; ?>">
        <h3>Status: <?php echo htmlspecialchars($connection_status); ?></h3>
    </div>
    
    <?php if ($error_message): ?>
    <div class="status error">
        <h3>Error Details:</h3>
        <p><?php echo htmlspecialchars($error_message); ?></p>
    </div>
    <?php endif; ?>
    
    <div class="info">
        <h3>Configuration Used:</h3>
        <table>
            <tr><th>Host</th><td><?php echo htmlspecialchars($db_config['host']); ?></td></tr>
            <tr><th>Database</th><td><?php echo htmlspecialchars($db_config['name']); ?></td></tr>
            <tr><th>Username</th><td><?php echo htmlspecialchars($db_config['user']); ?></td></tr>
            <tr><th>Password</th><td><?php echo str_repeat('*', strlen($db_config['pass'])); ?></td></tr>
        </table>
    </div>
    
    <?php if ($connection_status === 'Connected Successfully'): ?>
    <div class="status success">
        <h3>MySQL Version: <?php echo htmlspecialchars($mysql_version); ?></h3>
        <p>✅ Database connection is working!</p>
    </div>
    <?php endif; ?>
    
    <div class="info">
        <h3>Next Steps:</h3>
        <ol>
            <li>Update config.php with your actual Hostinger database credentials</li>
            <li>Upload these files to your Hostinger public_html directory</li>
            <li>Access this page to test your database connection</li>
            <li>Once working, set debug settings to false in config.php</li>
        </ol>
    </div>
    
    <p><a href="index.php">← Back to Main Test Page</a></p>
</body>
</html>
