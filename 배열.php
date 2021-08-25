<?php
    // $myArray = Array(1,2,3,4,5,6,7,8,9,10);
    $myArray = range(1,10); // 1부터 10까지 배열에 넣기
    echo "임의로 섞은 값 ==> ";
    shuffle($myArray); // 배열의 값을 임의로 섞는다
    foreach($myArray as $data) // 배열의 값을 차례대로 하나씩 변수에 넣어서 반복
        echo $data, " ";

    echo "<br>오름차순 정렬 ==> ";
    sort($myArray); // 오름차순 정렬
    foreach($myArray as $data)
        echo $data, " ";

    echo "<br>내림차순 정렬 ==> ";
    rsort($myArray); // 내림차순 정렬
    foreach($myArray as $data)
        echo $data, " ";
    
    echo "<br>순서를 반대로 ==> ";
    $revArray = array_reverse($myArray); // 순서를 역순으로 바꾼다
    foreach($revArray as $data)
        echo $data, " ";
?>