<?php
    $today = "현재는 ".date("Y-m-j")."입니다.";
    echo $today, "<br>";

    $ary = array(100,50,200,7);
    echo "최대:", max($ary), "최소:", min(-123,50,999), "<br>";

    echo pi(), " ", round(M_PI), " ", ceil(M_PI), "<br>";

    $str = "   This is MySQL   ";
    $str = trim($str);
    echo "#", $str, "#", "<br>";

    echo "문자열 길이:", strlen($str), "<br>";
    
?>