<?php

class CreatePriceRangesTable
{
    public function up()
    {
        $sql = "CREATE TABLE IF NOT EXISTS price_ranges (
            id INT AUTO_INCREMENT PRIMARY KEY,
            package_id INT,
            min_price DECIMAL(10, 2),
            max_price DECIMAL(10, 2),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (package_id) REFERENCES packages(id) ON DELETE CASCADE
        )";

        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        if ($mysqli->query($sql) === TRUE) {
            echo "Table price_ranges created successfully\n";
        } else {
            echo "Error creating table: " . $mysqli->error . "\n";
        }

        $mysqli->close();
    }

    public function down()
    {
        $sql = "DROP TABLE IF EXISTS price_ranges";

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