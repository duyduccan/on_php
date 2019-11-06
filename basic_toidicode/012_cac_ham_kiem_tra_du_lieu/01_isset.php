<?php
/**
 * isset($variable) tác dụng kiểm tra sự tồn tại của biến, trả về true nếu tồn tại và ngc lại trả về false
 * nếu k tồn tại
 */
$data = 'toidicode';
if(isset($data)){
    echo "Biến này tồn tại";
}else{
    echo "Biến này không tồn tại";
}