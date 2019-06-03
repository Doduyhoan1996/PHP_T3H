<?php
include_once "config.php";

if (isset($_GET['id'])){
    $id=$_GET['id'];
    $sqlDelete = "DELETE FROM product WHERE id='$id'";
    if (mysqli_query($connection, $sqlDelete)) {
        header('Location: index.php');
    } else {
        echo "Xóa không thành công: " . mysqli_error($connection);
    }
    mysqli_close($connection);
}


