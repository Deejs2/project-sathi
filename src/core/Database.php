<?php

namespace core;
class Database
{
    private \mysqli $connection;
    public Response $response;

    public function __construct()
    {
        $this->response = new Response();
        $this->connection = new \mysqli();
        $this->connection->connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->connection->connect_error) {
            $this->response->error(['db' => 'Database connection error']);
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