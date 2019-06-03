<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

include_once "config.php";
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['inventory']) && isset($_POST['brand'])) {
    if ($_POST['name'] && $_POST['brand'] && ($_POST['price'] > 0)) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $inventory = $_POST['inventory'];
        $brand = $_POST['brand'];
        $sqlInsert = "UPDATE product SET name='$name',price='$price',inventory='$inventory' ,brand='$brand' WHERE id = " . (int) $_POST['id'];
        if (mysqli_query($connection, $sqlInsert)) {
            echo "Update thanh cong";
            /**
             * hàm header được dùng để chuyển hương url
             */
            header('Location: index.php');
            exit;
        } else {
            echo "Update thất bại";
        }
    }
}
