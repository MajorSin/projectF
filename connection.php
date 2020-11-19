<?php
$dsn = 'mysql:dbname=projectf;host=localhost';
$user = 'root';
$password = '';

try {
    $dbh = new PDO('sqlite:D:\Program Files\XAMPP\htdocs\Files\projectF\BETA\database\projectf.db', '', '', array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>