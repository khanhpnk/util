<?php
function getAllUsers() {
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM users');
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt;
}