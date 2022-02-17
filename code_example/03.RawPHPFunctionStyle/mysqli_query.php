<?php
function getAllUsers() {
    global $conn;
    $sql = 'SELECT * FROM users';
    return $conn->query($sql);
}