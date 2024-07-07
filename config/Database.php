<?php

namespace config;

class Database
{
    protected string $host = 'localhost';
    protected string $username = 'root';

    protected string $password = '';

    protected string $database = 'project_partner';

    protected $connection;

    public function __construct()
    {
        $this->connection = new \mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die('Connection failed: ' . $this->connection->connect_error);
        }
    }

    public function getConnection(): \mysqli
    {
        return $this->connection;
    }

    public function closeConnection()
    {
        $this->connection->close();
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    public function query($sql)
    {
        return $this->connection->query($sql);
    }

    public function fetch($result)
    {
        return $result->fetch_assoc();
    }

    public function fetchAll($result)
    {
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}