window.onload = function () {
    $("#shipping-info").submit(function (event) {
        event.preventDefault();
        let formData = new FormData(document.getElementById("shipping-info"));
        console.log(formData);
        $.ajax({
            type: "POST",
            url: "/confirmation.php",
            data: formData,
            success: function (data) {},
            error: function () {
                console.log("Failed to send.");
            }
        });
        window.location.href("/confirmation.php");
    });
}
