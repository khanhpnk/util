<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>
<?php
$hostname = 'localhost';
$username = 'mariadb_user';
$password = 'abcd1234???';
$dbname   = 'php';

$conn = new mysqli($hostname, $username, $password, $dbname);

$sql = 'SELECT * FROM users';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table><tr><th>ID</th><th>Name</th></tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row['id']. '</td><td>' . $row['firstname']. ' ' . $row['lastname']. '</td></tr>';
    }
    echo '</table>';
}

$conn->close();
?>
</body>
</html>
