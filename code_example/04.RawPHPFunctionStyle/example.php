<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>
<?php
require('pdo_connect.php');
require('pdo_query.php');

$result = getAllUsers();
if ($result->rowCount() > 0) {
    echo '<table><tr><th>ID</th><th>Name</th></tr>';
    foreach($result->fetchAll() as $row) {
        echo '<tr><td>' . $row['id']. '</td><td>' . $row['firstname']. ' ' . $row['lastname']. '</td></tr>';
    }
    echo '</table>';
}
?>
</body>
</html>
