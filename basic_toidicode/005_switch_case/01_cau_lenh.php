<?php
/**
 * tạo ra các nhánh điều kiện để thực thi các đoạn code
 */
// viết chương trình đọc số tự nhiên từ 1 đến 5
$so = 4;
switch ($so){
    case 1:
        echo "Một";
        break;
    case 2:
        echo "Hai";
        break;
    case 3:
        echo "Ba";
        break;
    case 4:
        echo "Bốn";
        break;
    case 5:
        echo "Năm";
        break;
    default:
        echo "Số nằm ngoài phạm vi";
        break;
}