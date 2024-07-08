<?php

class PackageSeeder
{
    public function run()
    {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        $packages = [
            ['name' => 'Portfolio'],
            ['name' => 'Web Service'],
            ['name' => 'Web Application']
        ];

        foreach ($packages as $package) {
            $stmt = $mysqli->prepare("INSERT INTO packages (name) VALUES (?)");
            $stmt->bind_param("s", $package['name']);
            $stmt->execute();
        }

        $stmt->close();
        $mysqli->close();
    }
}