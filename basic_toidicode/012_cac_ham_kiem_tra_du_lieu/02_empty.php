<?php
/**
 * empty($variable) kiểm tra xem biến có rỗng không, số 0, mảng rỗng, null, hay biến k tồn tại đều dc coi
 * là rồng
 */
$data = [];
if(empty($data)){
    echo "Biến này rỗng";
}else{
    echo "Biến này k rỗng";
}