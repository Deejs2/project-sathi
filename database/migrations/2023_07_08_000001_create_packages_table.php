<?php

class CreatePackagesTable
{
    public function up()
    {
        $sql = "CREATE TABLE IF NOT EXISTS packages (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        if ($mysqli->query($sql) === TRUE) {
            echo "Table packages created successfully\n";
        } else {
            echo "Error creating table: " . $mysqli->error . "\n";
        }

        $mysqli->close();
    }

    public function down()
    {
        $sql = "DROP TABLE IF EXISTS packages";

        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        if ($mysqli->query($sql) === TRUE) {
            echo "Table packages dropped successfully\n";
        } else {
            echo "Error dropping table: " . $mysqli->error . "\n";
        }

        $mysqli->close();
    }
}