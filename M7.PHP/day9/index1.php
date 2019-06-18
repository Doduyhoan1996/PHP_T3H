<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Lambda là hàm không ten trong laravel</h1>
<?php
function hello($name){
    echo "<br> Hello " . $name;
}
hello("function");
/*
 * Có những hàm chỉ cần sử dụng 1 lần duy nhất
 * Khi mình khai báo và gán lambda cho 1 biến thì cần kết thúc lambda bằng dấu ;
 */

$hello=function ($name){
    return "<br> Hello ".$name;
};
/**
 * Gọi lambda qua biến
 *  $bien("truyền vào tham số nếu có")
 */
echo $hello("lambda");
/**
 * Callback
 * Khi mà thực hiện xong một hành động mới cho phép 1 hành động khác chạy ngay sau đó
 * thì người ta gọi cái hành động chạy phía sau là Callback
 * @param $country
 * Tham số truyền váo hàm này buộc phải là 1 lambda đóng vai trò là Callback của ShowMessage()
 * tức là ShowMessage() chạy trước sau đó lambda Callback phía sau
 */
function ShowMessage($country){
    /*
     * Khi biến chắc chắn tham số truyền vào hàm là lambda thì gọi
     * tham số $thamso()
     */
    echo "<br> Xin Chào ". $country();
}

/**
 * function (){
return "Korea";
}
 * đóng vài trò là giá trị truyền vào và nó là 1 lambda
 */
ShowMessage(function (){
    return "Lambda truyền ở dạng Callback";
});

?>

<h1>Closure là Lambda sẽ sử dụng các biến toàn cục  khi khai báo closure</h1>

<?php
//2 biến global
$city = "hà nội";
$country ="Việt Nam";
$go = function ($vihicle) use ($country,$city){
    echo "<br> Go travel city ".$city." country ".$country ." by ".$vihicle;
};
$go("motor");

/**
 * Ví dụ tương tự closure
 */

$go = function ($vihicle,$country,$city){
    echo "<br> Go travel city ".$city." country ".$country ." by ".$vihicle;
};
$go("motor",$country,$city);

?>
</body>
</html>