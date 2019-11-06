<?php
/**
 * các vòng lặp khác kiểm tra điều kiện trước rồi với thực thi câu lệnh, còn vòng lặp do while thực thi câu lệnh
 * trước rồi mới kiểm tra điều kiện
 */
$i = 0;// khởi tạo biến
do{
    echo $i."<br>";// in ra $i hiện tại
    $i++;// cộng thêm mộ đơn vị sau mỗi lần lặp
}while($i <= 10);// nếu $i lớn hơn 10 thì dừng vòng lặp