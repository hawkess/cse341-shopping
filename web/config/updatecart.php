<?php
$action = isset($_POST['action']) ? $_POST['action'] : "";

function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    
    echo $js_code;
}


console_log($action);

if (!isset($_SESSION['cart'])) 
{
    $_SESSION['cart'] = array();
}                                    
    
switch ($action) 
{
    case 'add':
		if(!empty($_POST['quantity'])) 
        {
		    $productByID = $product_list[$_POST['id']];
		    $cart_item = array($productByID[$_POST['id']]=>$_POST['quantity']);
			
			if(!empty($_SESSION['cart'])) 
            {
			    $cart_ids = array_keys($_SESSION['cart']);
			    if(in_array($id, $cart_ids)) 
                {
					foreach($_SESSION['cart'] as $i => $q) 
                    {
							if($_POST['id'] == $i) 
                            {
							    $_SESSION['cart'][$i]['quantity'] += $_POST['quantity'];
							}
					}
				} 
                else 
                {
					$_SESSION['cart'] = array_merge($_SESSION['cart'], $cart_item);
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
