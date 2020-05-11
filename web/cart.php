<?php
session_name("shopping");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CSE 341 Shopping Cart</title>

<?php
include_once "config/header.php";
include_once "config/product_list.php";
include_once "config/updatecart.php";
include_once "objects/product.php";
?>

</head>

<body>
    <div class="container-fluid">
        <div class="px-4 px-lg-0">
            <div class="pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="p-2 px-3 text-uppercase">Product</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Price</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Quantity</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Remove</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                            <?php
                            $total = 0;    
                            foreach($_SESSION['cart'] as $i=>$q)
                            {

                                $item = $product_list[$i];
                                echo 
                                '<tr>
                                  <th scope="row" class="border-0">
                                    <div class="p-2">
                                      <div class="ml-3 d-inline-block align-middle">
                                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">' . $item->name . '</a></h5><span class="text-muted font-weight-normal font-italic d-block">' . $item->cat . '</span>
                                      </div>
                                    </div>
                                  </th>
                                  <td class="border-0 align-middle"><strong>S' . number_format($item->price, 2, '.', ',') . '</strong></td>
                                  <td class="border-0 align-middle"><strong>' . $q . '</strong></td>
                                  <td class="border-0 align-middle"><a onclick="removeFromCart(' . $i . ')" class="text-dark"><i class="fa fa-trash text-dark"></i></a></td>
                                </tr>';
                                $total += $item->price * $q;
                            }
                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End -->
                        </div>
                    </div>
                    <div class="row py-5 p-4 bg-white rounded shadow-sm">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                            <div class="p-4">
                                <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                                <ul class="list-unstyled mb-4">
                                    <?php
                                    $shipping = count($_SESSION['cart']) * 5;
                                    $tax = $total * .0825;
                                    $grand_total = $total + $shipping + $tax;
                                    echo
                                    '<li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$' . number_format($total, 2, '.', ',') . '</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$' . number_format($shipping, 2, '.', ',') . '</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$' . number_format($tax, 2, '.', ',') . '</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                        <h5 class="font-weight-bold">$' . number_format($grand_total, 2, '.', ',') . '</h5>
                                    </li>';
                                    ?>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="/index.php" class="btn btn-block btn-dark rounded-pill py-2">Continue shopping</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="/checkout.php" class="btn btn-block btn-success rounded-pill py-2">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
