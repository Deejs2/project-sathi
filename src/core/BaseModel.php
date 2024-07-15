<?php

namespace core;


abstract class BaseModel
{
    protected Database $database;
    protected string $tableName;

    public function __construct()
    {
        $this->database = new Database();
        $this->tableName = $this->getTableName();
    }

    abstract protected function getTableName(): string;

    public function save(array $data)
    {
        $columns = implode(', ', array_map(function($column) { return "`$column`"; }, array_keys($data)));
        $values = implode(', ', array_map(function($value) { return "'$value'"; }, array_values($data)));
        $sql = "INSERT INTO `{$this->getTableName()}` ($columns) VALUES ($values)";
        $result = $this->database->query($sql);
        if ($result) {
            $data['id'] = $this->database->getConnection()->insert_id;
            return $data;
        } else {
            return false;
        }
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

    public function getByCondition($condition)
    {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE $condition";
        $result = $this->database->query($sql);
        return $this->database->fetchAll($result);
    }

    public function getOneByCondition($condition)
    {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE $condition";
        $result = $this->database->query($sql);
        return $this->database->fetch($result);
    }
}
