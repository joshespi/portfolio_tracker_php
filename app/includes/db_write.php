<?php
// Set database connection variables
$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$dbname = $_ENV['DB_NAME'];
$write_username = $_ENV['DB_USERNAME'];
$write_password = $_ENV['DB_PASSWORD'];

// Create database connection
try {
    $write_pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $write_username, $write_password);
    $write_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error connecting to database: " . $e->getMessage();
    exit();
}

?>
