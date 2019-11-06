<?php
/**
 * hàm là 1 hoặc nhiều đoạn mã được viết ra để thực thi một hoặc nhiều hành động khi gọi nó
 * hàm có khả năng gọi đi gọi lại dc
 */
function tinhTong($a, $b){
    return $a + $b;
}
function readName($name = 'world'){
    echo 'Hello'.$name;
}