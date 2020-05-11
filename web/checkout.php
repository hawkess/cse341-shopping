<?php
session_name("shopping");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CSE 341 Checkout</title>

<?php
    include_once "config/header.php";
?>

</head>

<body>
    <div class="container-fluid vertical-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="bg-white rounded-lg shadow-sm p-5">
                        <div class="tab-content">
                            <div id="nav-card" class="">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="username">Full name</label>
                                        <input type="text" name="username" placeholder="John Doe" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <div class="input-group">
                                            <input type="text" name="address" placeholder="1234 Oak Street" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <div class="input-group">
                                                    <input type="text" placeholder="Schenectady" name="city" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input type="text" placeholder="NY" name="state" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="zip">Zip</label>
                                                <input type="number" placeholder="12345" name="zip" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm">Return to Shopping Cart</a>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="subscribe btn btn-success btn-block rounded-pill shadow-sm"  action="/confirmation.php?action=confirm">Complete Purchase</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
</html>
