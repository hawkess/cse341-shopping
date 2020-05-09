<?php

class Product 
{
    public $id;
    public $name;
    public $price;
    public $desc;
    public $cat;
    public $image;
    
    public function __construct($id, $name, $price, $desc, $cat, $image) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->desc = $desc;
        $this->cat = $cat;
        $this->image = $image;
    }    
}
?>