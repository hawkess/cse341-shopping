function addToCart(productIndex, productId) {
    let quantInput = $("#product_quant_" + productIndex.toString()).val();
    quantInput = quantInput.toString();
    let prodid = productId.toString();
    let query = "action=add&quantity=" + quantInput + "&id=" + prodid;

    $.ajax({
        type: "POST",
        url: "products.php",
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
}
