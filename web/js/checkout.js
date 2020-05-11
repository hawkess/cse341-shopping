function checkoutConfirm() {
    let formData = new FormData($("form"));
    let url = "/confirmation.php";
    $.post(url, formData, function (data, status) {});
}
