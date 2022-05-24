<?php

$serverName = 'localhost';
$dbName = 'online_shopping_system';
$userName = 'root';
$password = '';

/**connecting to the database */
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if (!$conn) {
    die("Database Connection Failed : " . mysqli_connect_error());
}
