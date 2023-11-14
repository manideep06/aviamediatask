$(document).ready(function () {
    $('#updateShopName').on('click', function () {
        var newShopName = $('#shopName').val();

        if (!/^[a-zA-Z0-9 ]*$/.test(newShopName)) {
            alert("Invalid shop name. Please use only letters, numbers, and spaces.");
            return;
        }

        $.ajax({
            type: 'POST',
            url: 'get_shop_name.php',
            data: { newShopName: newShopName },
            success: function (response) {
                alert(response); /
                if (response.includes("successfully")) {
                    $('#displayShopName').text(newShopName);
                }
            },
            error: function () {
                alert("Error while updating shop name");
            }
        });
    });
});