<?php
namespace Model;
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Config\Config;

class Model extends Config {
    protected $tableName;
    
    protected $dataOne;
    protected $dataTwo;
    protected $dataThree;

    protected $valueOne;
    protected $valueTwo;
    protected $valueThree;

    public function model($tableName, $dataOne, $dataTwo, $dataThree, $valueOne, $valueTwo, $valueThree) {
        $insert = "INSERT INTO $tableName ($dataOne, $dataTwo, $dataThree) VALUES (:valueOne, :valueTwo, :valueThree)";
        $bindParam = $this->database->prepare($insert);
        $bindParam->bindParam(':valueOne', $valueOne);
        $bindParam->bindParam(':valueTwo', $valueTwo);
        $bindParam->bindParam(':valueThree', $valueThree);
        $bindParam->execute();
    }
}
