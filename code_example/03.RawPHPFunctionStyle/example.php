<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>
<?php
require('mysqli_connect.php');
require('mysqli_query.php');

$result = getAllUsers();

if ($result->num_rows > 0) {
    echo '<table><tr><th>ID</th><th>Name</th></tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row['id']. '</td><td>' . $row['firstname']. ' ' . $row['lastname']. '</td></tr>';
    }
    echo '</table>';
}
?>
</body>
</html>
