<?php
//2 biến global
$city = "hà nội";
$country ="Việt Nam";
$go = function ($vihicle) use ($country,$city){
    echo "<br> Go travel city ".$city." country ".$country ." by ".$vihicle;
};

