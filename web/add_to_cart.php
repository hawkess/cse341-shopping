<?php
session_start();
$id = isset($_GET['id']) ? $_GET['id'] : "";
$quant = isset($_GET['quant']) ? $_GET['quant'] : 1;

$quant = $quantity <= 0 ? 1 : $quantity;
$cart_item = array('quant'=>$quant);

if(!isset($_SESSION['cart]']))
{
    $_SESSION['cart'] = array();
}

if(array_key_exists($id, $_SESSION['cart']))
{
    header('Location: products.php?action=exists&id=' . $id);
}
else
{
    $_SESSION['cart'][$id] = $cart_item;
    header('Location: products.php?action=added');
}
?>