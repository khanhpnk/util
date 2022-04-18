<!DOCTYPE html>
<html>
<style>
    table, th, td { border:1px solid black;}
</style>
<body>
<?php
require('Database.php');
require('User.php');
$userModel = new User();
$users = $userModel->getAllUsers();
?>
<?php if($users): ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?=$user['id'] ?></td>
                <td><?=$user['lastname'] ?> <?=$user['firstname'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
</body>
</html>
