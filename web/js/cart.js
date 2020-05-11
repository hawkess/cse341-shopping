function addToCart(productIndex, productId) {
    let quantInput = $("#product_quant_" + productIndex.toString()).val();
    quantInput = quantInput.toString();
    let prodid = productId.toString();
    let query = "action=add&quantity=" + quantInput + "&id=" + prodid;

    $.ajax({
        type: "POST",
        url: "/index.php",
        data: query,
        success: function (data) {
            if (data.code == "200") {
                console.log("Success: " + data.msg);
            }
        },
        error: function () {
            console.log("Failed to send.");
        }
    });
    
    $("#product_quant_" + productIndex.toString()).val('');
}
function removeFromCart(productId) {
    let prodid = productId.toString();
    let query = "action=remove&id=" + prodid;

    $.ajax({
        type: "POST",
        url: "/cart.php",
        data: query,
        success: function (data) {
            location.reload();
        },
        error: function () {
            console.log("Failed to send.");
        }
    });
}

