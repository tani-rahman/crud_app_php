<?php

$dbhost = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'crud_app';

$conn = mysqli_connect($dbhost, $dbUserName, $dbPassword, $dbName);

if (!$conn) {
    die('Connection Failed: ' . mysqli_connect_error());
}
?>