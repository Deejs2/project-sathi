<?php

namespace model;

use config\Database;

abstract class BaseModel
{
    protected Database $database;
    protected string $tableName;

    public function __construct()
    {
        $this->database = new Database();
        $this->tableName = $this->getTableName();
    }

    abstract protected function getTableName();

    public function save(array $data)
    {
        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_map(function($value) { return "'$value'"; }, array_values($data)));
        $sql = "INSERT INTO {$this->getTableName()} ($columns) VALUES ($values)";
        return $this->database->query($sql);
    }

    public function update(array $data, $condition)
    {
        $updateData = implode(', ', array_map(function($key, $value) { return "$key = '$value'"; }, array_keys($data), $data));
        $sql = "UPDATE {$this->getTableName()} SET $updateData WHERE $condition";
        return $this->database->query($sql);
    }

    public function delete($condition)
    {
        $sql = "DELETE FROM {$this->getTableName()} WHERE $condition";
        return $this->database->query($sql);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->getTableName()}";
        $result = $this->database->query($sql);
        return $this->database->fetchAll($result);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = '$id'";
        $result = $this->database->query($sql);
        return $this->database->fetch($result);
    }
}