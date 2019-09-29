<?php
$dbServername ="51.158.118.84";
$dbUsername="ritikraj";
$dbPassword="12345678";
$dbName="testdatabase";
$conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database


?>



