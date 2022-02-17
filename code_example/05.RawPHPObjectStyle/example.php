<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>
<?php
require('Database.php');
require('User.php');
$userModel = new User();
$user = $userModel->getAllUsers();

if ($user->num_rows > 0) {
    echo '<table><tr><th>ID</th><th>Name</th></tr>';
    while($row = $user->fetch_assoc()) {
        echo '<tr><td>' . $row['id']. '</td><td>' . $row['firstname']. ' ' . $row['lastname']. '</td></tr>';
    }
    echo '</table>';
}
?>
</body>
</html>
