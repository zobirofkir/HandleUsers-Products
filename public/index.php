<?php
header('Content-Type: application/json');

require_once __DIR__ . '/../vendor/autoload.php';

use Databases\CreateProductsTable;
use Databases\CreateUsersTable;
use Route\Web;

new CreateUsersTable();
new CreateProductsTable();

$data = new Web();
$data->route();
$data->product();


