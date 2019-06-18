<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Cookie được sử dụng để nhận diện người dùng
    Cookie là 1 file nhỏ được server nhúng vào máy tính của người dùng
    Mỗi lần máy tính đó gửi request nó cũng sẽ gửi cookie đến
    Với PHP bạn có thể tạo và lấy giá trị của cookie
    Để tạo mới cookie bạn sử dụng hàm setcookie()
    Cú pháp :
    setcookie(name, value, expire, path, domain, secure, httponly);
    Chỉ có tham số name đầu tiên là bắt buộc phải truyền vào
    còn các tham số sau đó có thể truyền hoặc không

    [PHPSESSID] => 1jhts25u2kcve3mb4mc10ikpsr
    PHPSESSID : cookie này sẽ cho phép nhận diện người dùng do PHP tự sinh ra
</pre>
<?php
/**
 * Thời gian 1 ngày là 86400 giây
 * Cookie bên dưới sẽ sống trong 30 ngày
 */
$cookie_name="user_name";
$cookie_value="admin";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/"); //86400s = 1day

?>
<?php
/**
 * Xem tất cả các cookie
 */
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>

<?php
//Truy cập  vào  1 coockie
if(!isset($_COOKIE["user_name"])){
    echo '<br> Cookie $_COOKIE["user_name"] chưa được tạo';
} else {
    echo '<br>Giá trị của $_COOKIE["user_name"] là : ' . $_COOKIE["user_name"];
}
?>
</body>
</html>