<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
Trong vòng lặp có 3 thành phần quan trọng nhất
1. Sự khởi đầu vòng lặp
2. Điều kiện chạy vòng lặp
3. Sự thay đổi sau mỗi vòng lặp
<pre>
    Sự khởi đàu vòng lặp
    while(đk chạy vòng lặp){
    //các câu lệnh của vòng lặp
    Sự thay đổi của vòng lặp sau mỗi lần chạy
    }
</pre>
<pre>
     for(sự khởi đầu vòng lặp; điều kiện chạy vòng lặp; sự thay đổi của vòng lặp sau mỗi lần chạy ) {
        // các câu lệnh của vòng lặp
    }
</pre>
<pre>
    Sự khởi đầu vòng lặp
    do{
        //các câu lệnh của vòng lặp
        Sự thay đổi của vòng lặp sau mỗi lần chạy
    }while(điều kiện để  chạy vòng lặp)
</pre>

<?php
$i=1;
while ($i<100){
    if(($i%2==0)){
        echo "<br>" . $i;
    }
    $i++;
}

?>
</body>
</html>