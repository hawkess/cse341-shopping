<?php
include_once "objects/address.php";

function trim_value(&$value)
{
    $value = trim($value);
}

array_filter($_POST, 'trim_value');

$name = !empty($_POST['name']) ? filter_var($_POST['name'], FILTER_SANITIZE_STRING) : "";
$street = !empty($_POST['street']) ? filter_var($_POST['street'], FILTER_SANITIZE_STRING) : "";
$city = !empty($_POST['city']) ? filter_var($_POST['city'], FILTER_SANITIZE_STRING) : "";
$state = !empty($_POST['state']) ? filter_var($_POST['state'], FILTER_SANITIZE_STRING) : "";
$zip = !empty($_POST['zip']) ? filter_var($_POST['zip'], FILTER_SANITIZE_STRING) : "";

$_SESSION['address'] = new Address($name, $street, $city, $state, $zip);
?>