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

    public function getRows($sql) {
        $data = [];
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }
}