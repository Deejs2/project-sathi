<?php

class CreateUsersTable
{
    public function up()
    {
        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        if ($mysqli->query($sql) === TRUE) {
            echo "Table users created successfully\n";
        } else {
            echo "Error creating table: " . $mysqli->error . "\n";
        }

        $mysqli->close();
    }

    public function down()
    {
        $sql = "DROP TABLE IF EXISTS users";

        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        if ($mysqli->query($sql) === TRUE) {
            echo "Table users dropped successfully\n";
        } else {
            echo "Error dropping table: " . $mysqli->error . "\n";
        }

        $mysqli->close();
    }
}