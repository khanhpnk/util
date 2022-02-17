<?php
$hostname = 'localhost';
$username = 'mariadb_user';
$password = 'abcd1234???';
$dbname   = 'php';

$conn = new mysqli($hostname, $username, $password, $dbname);

$sql = 'SELECT * FROM users';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "id | Name\n";
    while($row = $result->fetch_assoc()) {
        echo "{$row['id']}  | {$row['lastname']} {$row['firstname']} \n";
    }
}

$conn->close();
