<?php
$host = 'localhost';
$port = '3307'; 
$db   = 'db_camiseta';
$user = 'root';
$pass = 'usbw'; 
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);
?>