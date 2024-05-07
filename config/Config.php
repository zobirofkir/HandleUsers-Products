<?php

namespace Config;

use PDO;
use PDOException;

abstract class Config {
    protected $database;

    public function __construct()
    {
        try {
            $username = 'csw';
            $password = 'Csw123@@@';
            $dsn = 'mysql:host=localhost;dbname=laravel;charset=utf8';
            $this->database = new PDO($dsn, $username, $password);
            
            // Set PDO to throw exceptions on error
            $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);            
        } catch (PDOException $e) {
            // Handle connection errors
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}
