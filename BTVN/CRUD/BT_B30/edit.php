<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<?php
/**
 * Nạp kết nối CSDL
 */
include_once "config.php";

$name = '';
$price = '';
$inventory = '';
$brand = '';
if (isset($_GET['id'])){
    $id = (int) $_GET['id'];
    $sqlSelect = "SELECT * FROM product WHERE id = " . $id;
    $result = mysqli_query($connection, $sqlSelect);
    $row = mysqli_fetch_assoc($result);

    // cú pháp rút gon của if else ( condition ? câu lênh chạy khi đk la true : câu lệnh chạy khi dk = false
    $name = isset($row['name']) ? $row['name'] : '' ;
    $name = isset($row['price']) ? $row['price'] : '' ;
    $name = isset($row['inventory']) ? $row['inventory'] : '' ;
    $name = isset($row['brand']) ? $row['brand'] : '' ;

}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa nhân viên</h1>
            <div>
                <form name="create" action="update.php" method="post">
                    <input hidden type="text" class="form-control" name="id" value="<?php echo $id ?>">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="number" class="form-control" name="price" value="<?php echo $row['price']?>">
                    </div>
                    <div class="form-group">
                        <label>Tồn Kho</label>
                        <input type="number" min="0" class="form-control" name="inventory" value="<?php echo $row['inventory']?>">
                    </div>
                    <div class="form-group">
                        <label>Nhà Cung Cấp</label>
                        <input type="text" class="form-control" name="brand" value="<?php echo $row['brand']?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>