<?php
namespace App;

use Model\Product;
use Model\User;

error_reporting(E_ALL);
ini_set('display_errors', 1);


class ProductController
{
    public function product()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $data = file_get_contents('php://input');
            $array = json_decode($data, true);

            if(isset($array['title']) && isset($array['image']) && isset($array['description']))
            {
                $title = htmlspecialchars($array['title'], FILTER_SANITIZE_SPECIAL_CHARS);
                $image = htmlspecialchars($array['image']);
                $description = $array['description'];
                
                // Instantiate User class
                $user = new Product();

                // Save user
                return $user->product($title, $image, $description);
            }
        }
    }
}
