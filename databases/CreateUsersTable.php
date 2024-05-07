<?php
namespace Databases;

use Config\Config;

class CreateUsersTable extends Config {
    public function __construct()
    {
        parent::__construct(); // Make sure to call the constructor of the parent class

        $data = "CREATE TABLE IF NOT EXISTS users (
            id INT PRIMARY KEY AUTO_INCREMENT,
            username VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL
        )";
        
        $prepare = $this->database->prepare($data);
        $execHandle = $prepare->execute();
        if ($execHandle > 0)
        {
            return false;
        }
        $prepare->execute();
    }
}
