<?php
/**
 * phương thức GET gửi dữ liệu từ client lên server thông qua paramter(tham số) trên url
 * từ đó server sẽ phân tích dữ liệu để thực thi một hành động nào đó.
 * các tham số mà phương thức GET gửi lên sẽ bắt đầu sau dấu ?. và sẽ nối nhau giữa các khóa thông qua dấu &
 *
 * Server sẽ nhận dữ liệu
 * để thông báo server nhận dữ liệu get khi có thì chúng ta sd $_GET đây là 1 biến toàn cục lưu trữ dưới dạng mảng
 * bất tuần tự
 */
$_GET = [
    'age' => 22,
    'name'=> 'CanDuyDuc'
];
echo $_GET['age'];
echo "<br>";
echo $_GET['name'];