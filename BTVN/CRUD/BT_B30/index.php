<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<?php
/**
 * Nạp kết nối CSDL
 */
include_once "config.php";

$sqlSelect="SELECT * FROM product";
/**
 * mysqli_query(tham số 1, tham số 2) là hàm thực hiện câu query mysql
 * tham số 1 chính là biến kết nối CSDL $connection
 * tham số 2 chính là câu query sql
 */

$result = mysqli_query($connection, $sqlSelect);
/**
 * In ra biến $result
 * mysqli_result Object
(
[current_field] => 0
[field_count] => 4
[lengths] =>
[num_rows] => 0
[type] => 0
)
 */
/**
 * mysqli_num_rows() truyền vào tham số của hàm mysqli_query()
 * được sử dụng để đếm số bản ghi trả về của câu SQL
 */
if (mysqli_num_rows($result)>0){
    /**
     * mysqli_fetch_assoc() truyền vào biến của mysqli_query()
     * nó dùng để lấy ra từng bản ghi trả về của câu SQL
     * $row sẽ là 1 bản ghi trong bảng
     * vòng lặp while sẽ chạy cho đến khi hết các bản ghi trong bảng trả về từ câu SQL
     */

}else{
    echo "<br> Không có bản ghi nào trong CSDL";
}
?>

<body>
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-12">
                <div style="margin:30px 0" >
                    <a href="create.php" class="btn btn-success">Thêm mới Sản Phẩm</a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Giá Tiền</th>
                        <th scope="col">Tồn Kho</th>
                        <th scope="col">Nhà Cung Cấp</th>
                        <th scope="col">Ngày Tạo</th>
                        <th scope="col">Hành Động</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (mysqli_num_rows($result)>0){
                        /**
                         * mysqli_fetch_assoc() truyền vào biến của mysqli_query()
                         * nó dùng để lấy ra từng bản ghi trả về của câu SQL
                         * $row sẽ là 1 bản ghi trong bảng
                         * vòng lặp while sẽ chạy cho đến khi hết các bản ghi trong bảng trả về từ câu SQL
                         */
                        while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                            <th scope="row"><?php echo $row['id'] ?></th>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['price'] ?></td>
                            <td><?php echo $row['inventory'] ?></td>
                            <td><?php echo $row['brand'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">Sửa Sản Phẩm</a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Xóa Sản Phẩm</a>
                            </td>
                        </tr>
                        <?php
                        }

                    }else{
                        echo "<br> Không có bản ghi nào trong CSDL";
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>