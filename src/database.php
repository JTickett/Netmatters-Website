<?php

function getPDO() {

    // Create a static variable to store the PDO object
    static $pdo = null;

    // If the PDO object is not already created, create it. Otherwise, return the existing object.
    if ($pdo === null) {

        // Try to get the database connection details from the .env file
        try {
            require_once realpath(__DIR__ . "/../vendor/autoload.php");
            $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
            $dotenv->load();

            $dbHost = $_ENV['DB_HOST'];
            $dbPort = $_ENV['DB_PORT'];
            $dbName = $_ENV['DB_DATABASE'];
            $dbUser = $_ENV['DB_USERNAME'];
            $dbPass = $_ENV['DB_PASSWORD'];
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }

        // Try to create a PDO connection
        try {
            // Add charset and port to DSN
            $dsn = "mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=utf8mb4";
            
            // Create PDO connection with additional options
            $pdo = new PDO(
                $dsn,
                $dbUser,
                $dbPass,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
                ]
            );

        } catch(PDOException $e) {
            // Handle connection errors
            die("Connection failed: " . $e->getMessage());
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }

    }

    // Return the PDO object
    return $pdo;
}


?>