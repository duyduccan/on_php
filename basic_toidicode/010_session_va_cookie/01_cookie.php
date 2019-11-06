<?php
/**
 * dùng để lưu những tùy chọn riêng của user...
 * cookie dc lưu trữ ở máy của client lên khi đóng trình duyệt thì cookie vẫn tồn tại
 * và tồn tại bao lâu là do bạn set
 */
//khởi tạo cookie
/*
 * setcookie($name,$value,$expire,$path,$domain);
 * $name: là tên cookie muốn tạo
 * $value: là giá trị của cookie đó
 * $expire là thời gian sống của cookie
 * $path là đường dẫn lưu trữ cookie
 * $domain: là tên của domain
 * */
// khỏi tạo cookie có tên là user, giá trị canduyduc, thời gian sống 10 phút
setcookie('user','canduyduc',time() + 600);

// lấy giá trị của cookie (user trên)
$_COOKIE('user');

// xóa cookie
// để xóa cookie bạn chỉ cần xét cho thời gian sống nhỏ hơn thời điểm hiện tại
// xóa cookie của user trên
setcookie('user','canduyduc',time() - 100);