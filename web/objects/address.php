<?php
class Address 
{
    public $name;
    public $street;
    public $city;
    public $state;
    public $zip;
    
    public function __construct($name, $street, $city, $state, $zip) 
    {
        $this->name = $name;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
    }
}
?>