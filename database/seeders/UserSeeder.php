<?php

class UserSeeder
{
    public function run()
    {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        $users = [
            ['name' => 'Utsab Dahal', 'email' => 'dlutsab2120@gmail.com', 'password' => password_hash('Utsab@123', PASSWORD_BCRYPT)],
            ['name' => 'Dhiraj Jirel', 'email' => 'jireldhioraj123@gmail.com', 'password' => password_hash('Dhiraj@123', PASSWORD_BCRYPT)],
            ['name' => 'Pasang Gelbu Sherpa', 'email' => 'ps94959321@gmail.com', 'password' => password_hash('Pasang@123', PASSWORD_BCRYPT)],
            ['name' => 'Bishal Acharya', 'email' => 'bishalacharya@gmail.com', 'password' => password_hash('Bishal@123', PASSWORD_BCRYPT)]
        ];

        foreach ($users as $user) {
            $stmt = $mysqli->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $user['name'], $user['email'], $user['password']);
            $stmt->execute();
        }

        $stmt->close();
        $mysqli->close();
    }
}