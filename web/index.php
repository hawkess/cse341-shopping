<?php
session_name("shopping");
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>CSE 341 Products</title>

<?php
include_once "config/header.php";
include_once "objects/product.php";
include_once "config/product_list.php";
include_once "config/updatecart.php";
?>

</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <ul class="list-group shadow">
            <?php
            $product_count = 0;
            foreach ($product_list as $id=>$product) 
            {
                ++$product_count;
                echo 
                '<li class="list-group-item">
                        <div class="align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="">
                                <h5 class="mt-0 font-weight-bold mb-2">' . $product->name . '</h5>
                                <p class="font-italic text-muted mb-0 small">' . $product->desc . '</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">$' . number_format($product->price, 2, '.', ',') . '</h6>
                                </div>
                            </div>
                        </div>
                        <div class="align-items-lg-center flex-column flex-lg-row p-3">
                         <form class="form-inline form-row">
                         <div class="form-group">
                          <label for="quantity1" class="mx-1">Quantity</label>
                          <div class="col-xs-2">
                           <input type="number" placeholder="0" name="quantity' . $product_count . '" id="product_quant_' . $product_count . '" required class="form-control form-sm w-25">
                           </div>
                           </div>
                            <a type="button" href="#myModal" class="trigger-btn subscribe btn btn-dark px-5 shadow-sm mx-0" data-toggle="modal" id="add_' . $id . '" onclick="addToCart(' . $product_count . ', ' . $id . ')">Add to cart</a>
                            </form>
                        </div>
                    </li>';
            } 
            ?>
                        <li class="list-group-item">
                        <div class="align-items-lg-center flex-column flex-lg-row p-3">
                            <button type="button" class="subscribe btn btn-dark btn-block px-5 rounded-pill shadow-sm mx-0" onclick="(window.location = '/cart.php')">Go to shopping cart</a>
                            </form>
                        </div>
                    </li>
            </ul>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header mx-auto">			
				<h4 class="modal-title">Thank you!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Your item has been successfully added to the cart.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div>  
</body>
</html>
