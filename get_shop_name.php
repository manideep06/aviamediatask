<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newShopName = $_POST['newShopName'];


    if (!preg_match("/^[a-zA-Z0-9 ]*$/", $newShopName)) {
        echo "Invalid shop name. Please use only letters, numbers, and spaces.";
        exit;
    }

    $updateQuery = "UPDATE shop_name SET new_shop_name = :shopName";
    $stmt = $pdo->prepare($updateQuery);
    $stmt->bindParam(':shopName', $newShopName);
    
    if ($stmt->execute()) {
        echo "successfully Updated Shop name";
    } else {
        echo "Error while updating shop name";
    }
}
?>