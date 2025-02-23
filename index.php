<?php
// Database connection parameters from Render's dashboard
$host = 'dpg-cut8iltumphs73cgcrc0-a.oregon-postgres.render.com';  // External hostname
$port = '5432';  // Default PostgreSQL port
$dbname = 'sampla_database';  // Your database name
$user = 'sampla_database_user';  // Your database username
$password = 'kUgQ1yWVGnnE9I8PWjDyUPwfaq2S1Mqo';  // Your database password

// Connection string with SSL mode enabled
$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require";

try {
    // Create a new PDO connection to the database
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    // Handle any connection errors
    echo "Error: " . $e->getMessage();
}
?>
