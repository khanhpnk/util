<?php
$hostname = 'localhost';
$username = 'mariadb_user';
$password = 'abcd1234???';
$dbname   = 'php';

$conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);