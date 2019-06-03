<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<?php
include_once "config.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";

if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['inventory'])){
    if ($_POST['name'] && $_POST['price'] && ($_POST['inventory'] > 0)){
        $name= $_POST['name'];
        $price=$_POST['price'];
        $inventory=$_POST['inventory'];
        $brand=$_POST['brand'];
        $time=Date("Y/m/d");
        $sqlInsert = "INSERT INTO product (name, price, inventory,brand,created_at) VALUES ('$name', '$price', '$inventory','$brand','$time')";
        if (mysqli_query($connection, $sqlInsert)) {
            echo "Insert thành công";
            /**
             * hàm header được dùng để chuyển hướng url
             */
            header('Location: index.php');
            exit;
        } else {
            echo "Thêm mới thất bại";
        }
    }
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Thêm mới nhân viên</h1>
            <div>
                <form name="create" action="" method="post">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="number" min="0" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label>Tồn Kho</label>
                        <input type="number" min="0" class="form-control" name="inventory">
                    </div>
                    <div class="form-group">
                        <label>Nhà Cung Cấp</label>
                        <input type="text" class="form-control" name="brand">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>