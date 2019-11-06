<?php
// kết hợp hai hay nhiều toán tử quan hệ lại và nó trả về giá trị true hoặc false
$a = 4;
$b = 4;
$result =((($a + 7) == 4) && (5 == 0));//false && false => false
//true || false => true
//!false => true
var_dump($result);