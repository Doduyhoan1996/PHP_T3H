<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
//Mảng chỉ số
$students=array("a"=>"nguyễn văn a1","b"=>"nguyễn văn a2","c"=>"nguyễn văn a3","d"=>"nguyễn văn a4","e"=>"nguyễn văn a5");
echo "<pre>";
print_r($students);
echo "</pre>";

echo "<br> Dạng foreach đầy đủ: ";
//Dang foreach đầy đủ
if(is_array($students) && !empty($students)){
    foreach ($students as $key => $value){
        echo "<br> Key: ".$key. "_ Value:".$value;
    }
}
echo "<br>";

echo "<br> Dạng foreach rút gọn: ";
if(is_array($students) && !empty($students)){
    foreach ($students as $value){
        echo "<br>  Value: ".$value;
    }
}
?>


</body>
</html>
