<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Biến trong PHP : lưu trữ thông tin và thay đổi trong quá trình chạy</h1>
<pre>
    Khai báo biến trong php như thế nào?
    $tên_biến
    Biến trong PHP thì không cần từ khóa var giống js
    và bắt đầu bằng $ và tiếp theo là tên biến
    tên biến phải viết liền không được dùng tiếng việt có dấu
    không được dùng kí tự đặt biệt như @#....
    tên biến chỉ chứa các số và chữ cái A đến Z và ký tự _
    tên biến có phân biệt hoa thường ví dụ như $A khác $a
    trong js nối chuỗi bằng +
    trong PHP nối chuỗi bằng .

</pre>
<?php
$a=5;
$b=7;
$c= $a +$b;
echo ' $c: '.$c;
?>


</body>
</html>