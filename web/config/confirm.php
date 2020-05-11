<?php
include_once "objects/address.php";

function trim_value(&$value)
{
    $value = trim($value);
}

array_filter($_POST, 'trim_value');

if(!empty($_POST['name'])) 
{
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
}
if(!empty($_POST['street'])) 
{
    $street = filter_var($_POST['street'], FILTER_SANITIZE_STRING);
}
if(!empty($_POST['city'])) 
{
    $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
}
if(!empty($_POST['state'])) 
{
    $state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
}
if(!empty($_POST['zip'])) 
{
    $zip = filter_var($_POST['zip'], FILTER_VALIDATE_INT) ? $_POST['zip'] : 0;
}

?>