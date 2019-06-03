<?php
/**
 * Câu lệnh include "đường dẫn của file";
 * thì có thể sử dụng những hàm hoặc class hoặc biến hoặc hằng số của file các bạn vừa nạp
 */
include "function.php1";
$cv = tinhcvhinhtron(3);
/**
 * gặp thông báo lỗi
 *
Fatal error: Uncaught Error: Call to undefined function tinhchuvihinhtron() in D:\xampp\htdocs\PHP_T3H\M7.PHP\day7\napinclude1\index.php:3 Stack trace: #0 {main} thrown in D:\xampp\htdocs\PHP_T3H\M7.PHP\day7\napinclude1\index.php on line 3
 */
echo "Chu vi : " , $cv;