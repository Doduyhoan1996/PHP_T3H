<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Mảng đa chiều chính là mảng lồng mảng</h1>

<?php
$class9a = array("nameclass"=>"9A",
        "student"=>array("an","hưng","sơn","linh")
);
$class9b = array("nameclass"=>"9B",
        "student"=>array("an1","hưng1","sơn1","linh1")
);


$dinhtienhoang =array($class9a,$class9b);

echo "<pre>";
print_r($dinhtienhoang);
echo "</pre>";

if (is_array($dinhtienhoang) && !empty($dinhtienhoang)){
    foreach ($dinhtienhoang as $key_class => $class){
        echo "<br>-".$class['nameclass'];
        if (is_array($class['student']) && !empty($class['student'])){
            foreach ($class['student'] as $key_student => $student){
                echo "<br>$key_student--".$student;
            }
        }
    }
}
?>


</body>
</html>
