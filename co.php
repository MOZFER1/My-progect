<?php

$dsn = 'mysql:host=localhost;dbname=users_dbi;charset=utf8';
$user = 'root';
$pass = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
);
try {
    $conn = new PDO($dsn, $user, $pass, $options);
    echo "Connection successful!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>