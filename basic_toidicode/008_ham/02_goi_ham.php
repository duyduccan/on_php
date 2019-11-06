<?php
//khởi tạo hàm readName và thiết lập tham số mặc định
function readName($name = 'world'){
    echo 'Hello '.$name;
}
// gọi hàm không truyền tham số
readName();// kết quả: Hello world
// gọi hàm có truyền tham số
echo '<br>';
readName('Duc');// kq:Hello Duc

// khởi tạo biến $a
$a = "Canduyduc";
// gọi hàm
echo '<br>';
readName($a);

