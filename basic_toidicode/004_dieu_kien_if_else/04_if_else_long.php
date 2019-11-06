<?php
$point = 6;
if($point <= 10){
    if($point < 4){
        echo 'Học lại';
    }elseif($point >=4 && $point < 5.5){
        echo 'Loại D';
    }elseif($point >= 5.5 && $point < 7){
        echo 'Loại C';
    }elseif($point >= 7 && $point <= 8.5){
        echo 'Loại B';
    }elseif($point >= 8.5 && $point <=10){
        echo 'Loại A';
    }
}else{
    echo 'Điểm không hợp lệ ';
}