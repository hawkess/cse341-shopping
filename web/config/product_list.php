<?php
include_once "objects/product.php";

$product_list = array();

$product_list[] = new Product("1", "name", 120.00, "desc", "cat", "image");
$product_list[] = new Product("2", "", 99.00, "", "", "");
$product_list[] = new Product("3", "", 140.00, "", "", "");
$product_list[] = new Product("4", "", 220.00, "", "", "");

?>