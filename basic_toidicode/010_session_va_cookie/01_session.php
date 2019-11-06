<?php
/**
 * biến session dùng để lưu trữ thông tin người dùng, thông tin cấu hình...
 * Mà nó chỉ tồn tại đến khi chúng ta đóng trình duyệt
 * và mỗi client sẽ có 1 Seesionid khác nhau nên hoàn toàn k có thể xảy ra việc xung đột session
 * ứng dụng thực tế trong việc sd session thường làm chức năng đăng nhập, giỏ hàng...
 */

// khởi tạo session
// khai báo cho server biết phiên làm việc sử dụng session
session_start();

// lưu trữ session
// session cũng được lưu trữ trong biến toàn cục $_SESSION.
//khi thêm xóa sửa session chúng ta phải thao tác trên biến này

//thêm session
$_SESSION['user'] = 'admin';
// hoặc đối với mảng
$array = [5,8,6,4,7,5];
$_SESSION['user'] = $array;

// sửa session
// khởi tạo session user có giá trị là canduyduc
$_SESSION['user'] = 'canduyduc';
//sửa giá trị của session user thành toidicode
$_SESSION['user'] = 'toidicode';

// lấy session
if(isset($_SESSION['user'])){
    echo $_SESSION['user'];
}

// xóa session user
unset($_SESSION['user']);

// xóa tất cả session
session_destroy();
// hoặc
unset($_SESSION);