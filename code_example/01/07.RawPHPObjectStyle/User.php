<?php
class User extends Database
{
    function getAllUsers()
    {
        $sql = 'SELECT * FROM users';
        return $this->getRows($sql);
    }
}