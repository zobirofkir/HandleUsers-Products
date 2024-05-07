<?php
namespace Model;
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Model\Model;

class User extends Model {
   protected $tableName;
   
   private $username;
   private $email;
   private $password;

   public function saveUser($username, $email, $password)
   {
      $this->tableName = 'users';
      $this->username = $username;
      $this->email = $email;
      $this->password = $password;

      // Pass correct parameters to the model() method
      return $this->model($this->tableName, 'username', 'email', 'password', $this->username, $this->email, $this->password);
   }
}
