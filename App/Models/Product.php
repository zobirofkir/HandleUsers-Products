<?php
namespace Model;

use Model\Model;

class Product extends Model{
    protected $tableName;
    
    private $title;
    private $image;
    private $description;

    public function product($title, $image, $description)
    {
        $this->tableName = 'products';
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
        return $this->model($this->tableName, 'title', 'image', 'description', $this->title, $this->image, $this->description);
    }
}