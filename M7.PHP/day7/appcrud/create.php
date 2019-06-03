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

if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['salary'])){
    if ($_POST['name'] && $_POST['address'] && ($_POST['salary'] > 0)){
        $name= $_POST['name'];
        $address=$_POST['address'];
        $salary=$_POST['salary'];
        $sqlInsert = "INSERT INTO employees (name, address, salary) VALUES ('$name', '$address', $salary)";
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
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <label>Lương</label>
                        <input type="text" class="form-control" name="salary">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>