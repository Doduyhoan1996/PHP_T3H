<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<?php
if (isset($_POST) && !empty($_POST)){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>

<h1>Form HTML</h1>

<pre>
    isset() được sử dụng để kiểm tra xem có sự tồn tại của biến trong hàm isset hay không
    nếu có tồn tại hàm trả về true không tồn tại trả về false
    && và thoả các điều kiện
    || hoặc tức là chỉ cần thoải 1 trong các điều kiện
    $_POST khi gửi form đi và method="post" trong form
    thì $_POST khi gửi đi sẽ là 1 mảng dữ liệu
    với key là tên các ô input trong form
    và value là giá trị bên trong các ô input đó
</pre>
<body>
<form name="register" action="" method="post">
    <div>
        <label>Username</label>
        <input type="text" name="username" placeholder="Nhập username">
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="pass" placeholder="Nhập password">
    </div>
    <div>
        <input type="submit" name="submit" value="Đăng ký">
    </div>
</form>
</body>
</html>