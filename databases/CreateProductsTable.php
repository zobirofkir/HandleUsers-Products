<?php
namespace Databases;

use Config\Config;

class CreateProductsTable extends Config {
    public function __construct()
    {
        parent::__construct(); // Make sure to call the constructor of the parent class

        $data = "CREATE TABLE IF NOT EXISTS products (
            id INT PRIMARY KEY AUTO_INCREMENT,
            title VARCHAR(255) NOT NULL,
            image VARCHAR(255) NOT NULL,
            description VARCHAR(255) NOT NULL
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
