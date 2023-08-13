<?php
// Set database connection variables
$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$dbname = $_ENV['DB_NAME'];
$read_username = $_ENV['DB_READ_USER'];
$read_password = $_ENV['DB_READ_PASSWORD'];

// Create database connection
try {
    $read_pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $read_username, $read_password);
    $read_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error connecting to database: " . $e->getMessage();
    exit();
}

?>
