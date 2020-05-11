<?php
$action = isset($_POST['action']) ? $_POST['action'] : "";

if (!isset($_SESSION['cart'])) 
{
    $_SESSION['cart'] = array();
}                                    
    
switch ($action) 
{
    case 'add':
		if(!empty($_POST['quantity'])) 
        {
            $quantity = $_POST['quantity'] >= 0 ? $_POST['quantity'] : 0;
		    $cart_item = array($_POST['id']=>$quantity);
			
			if(!empty($_SESSION['cart'])) 
            {
			    if(array_key_exists($_POST['id'], $_SESSION['cart'])) 
                {

                    $_SESSION['cart'][$_POST['id']] += $quantity;
				} 
                else 
                {
					$_SESSION['cart'] += $cart_item;
				}
			} 
            else 
            {
				$_SESSION['cart'] = $cart_item;
			}
		}
        break;
    case 'empty':
        $_SESSION['cart'] = array();
        break;
    case 'remove':
        if (!empty($_SESSION['cart']))
        {
            foreach($_SESSION['cart'] as $i=>$q)
            {
                if ($_POST['id'] == $i)
                    unset($_SESSION['cart'][$i]);
                if(empty($_SESSION['cart']))
                    unset($_SESSION['cart']);
            }
        }
        break;
    default:
        break;
}
?>
