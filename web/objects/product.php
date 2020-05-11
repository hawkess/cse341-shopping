<?php
class Product 
{
    public $id;
    public $name;
    public $price;
    public $desc;
    public $cat;
    
    public function __construct($id, $name, $price, $desc, $cat) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->desc = $desc;
        $this->cat = $cat;
    }    
}
?>