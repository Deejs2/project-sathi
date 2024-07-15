<?php

class CreateContactUsTable
{
    public function up()
    {
        $sql = "CREATE TABLE IF NOT EXISTS contact_us (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL,
            subject VARCHAR(255) NOT NULL,
            message TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        if ($mysqli->query($sql) === TRUE) {
            echo "Table contact us created successfully\n";
        } else {
            echo "Error creating table: " . $mysqli->error . "\n";
        }

        $mysqli->close();
    }

    public function down()
    {
        $sql = "DROP TABLE IF EXISTS contact_us";

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