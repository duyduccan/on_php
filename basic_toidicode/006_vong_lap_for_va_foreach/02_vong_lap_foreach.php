<?php
/**
 * vòng lặp hay dùng để lặp mảng, object, được sử dụng rất nhiều về sau
 */
//Khởi tạo mảng có key tự tăng
$data = [
    'A',
    'B',
    'C',
    'D'
];
// lặp cả key lẫn value của mảng
foreach($data as $key => $value){
    echo "Đây là phần tử có key = $key và có giá trị = $value <br>";
}
// tạo khoảng cách để phần biệt
echo "-----------------------<br>";
// lặp value của mảng
foreach($data as $value){
    echo "Giá trị của phần tử = $value <br>";
}