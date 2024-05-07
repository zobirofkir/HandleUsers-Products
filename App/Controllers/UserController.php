<?php
namespace App;

use Model\User;

error_reporting(E_ALL);
ini_set('display_errors', 1);


class UserController
{
    public function userController()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $data = file_get_contents('php://input');
            $array = json_decode($data, true);

            if(isset($array['username']) && isset($array['email']) && isset($array['password']))
            {
                $username = htmlspecialchars($array['username'], FILTER_SANITIZE_SPECIAL_CHARS);
                $email = htmlspecialchars($array['email'], FILTER_SANITIZE_EMAIL);
                $password = password_hash($array['password'], true);
                
                // Instantiate User class
                $user = new User();

                // Save user
                return $user->saveUser($username, $email, $password);
            }
        }
    }
}
