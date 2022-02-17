<?php
class Database
{
    protected $conn;

    public function __construct()
    {
        $hostname = 'localhost';
        $username = 'mariadb_user';
        $password = 'abcd1234???';
        $dbname   = 'php';
        $this->conn = new mysqli($hostname, $username, $password, $dbname);
    }
}