<?php

namespace model;

require_once __DIR__ . '/BaseModel.php';

class Auth extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $columns = "id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                email VARCHAR(255) NOT NULL, 
                password VARCHAR(255) NOT NULL";
        $this->createTable($columns);
    }
    protected function getTableName(): string
    {
        return 'users';
    }

    public function login($data)
    {
        $email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
        $password = filter_var($data['password'], FILTER_SANITIZE_STRING);
        $user = $this->getOneByCondition("email = '$email'");
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return false;
        }
    }
}