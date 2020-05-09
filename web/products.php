<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>CSE 341 Shopping Cart</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="scripts/javascript.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>

<body>
<?php
session_start();
include_once "config/product_list.php";

echo "<div class='col-md-12'>";
if($action=='added'){
    echo "<div class='alert alert-info'>";
        echo "Product was added to your cart!";
    echo "</div>";
}

if($action=='exists'){
    echo "<div class='alert alert-info'>";
        echo "Product already exists in your cart!";
    echo "</div>";
}
echo "</div>";
?>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
            <?php 
            foreach ($product_list as $product) 
              {
                echo '
                <ul class="list-group shadow">
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2">{$product->name}</h5>
                                <p class="font-italic text-muted mb-0 small">{$product->desc}</p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">\${$product->price</h6>
                                </div>
                            </div><img src="{$product->image}" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div>
                        <div class="align-items-lg-center flex-column flex-lg-row p-3">
                         <form class="form-inline form-row">
                         <div class="form-group">
                          <label for="quantity1" class="mx-1">Quantity</label>
                          <div class="col-sm-6">
                           <input type="number" placeholder="1" name="quantity1" required class="form-control form-sm">
                           </div>
                           </div>
                            <button type="button" class="subscribe btn btn-dark px-5 shadow-sm order-1 order-lg-2">Add to cart</button>
                            </form>
                        </div>
                    </li>
                </ul>'
            } ?>
            </div>
        </div>
    </div>
</body>

</html>
