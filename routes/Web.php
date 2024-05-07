<?php
namespace Route;

use App\ProductController;
use App\UserController;

class Web 
{
    
    public function route()
    {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === '/users')
        {
            $userController = new UserController();
            return $userController->userController();
        }        
    }


    public function product()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === '/products')
        {
            $userController = new ProductController();
            $result =  $userController->product();
            if ($result)
            {
                $resultPro = ['success'=>true];
                echo $resultPro;
                return ;
            }
        }
    }
}
